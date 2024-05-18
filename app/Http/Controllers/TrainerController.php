<?php

namespace App\Http\Controllers;

use Razorpay\Api\Api;
use App\Models\User;
use App\Models\Subscription;
use Illuminate\Http\Request;
use App\Models\TrainerReview;
use App\Http\Controllers\Controller;

class TrainerController extends Controller
{
    /**
     * Trainers Page
     * @return view
     */
    public function index()
    {
        return view('trainers', [
            "trainers" => User::where("role", "trainer")->get()
        ]);
    }

    /**
     * Review a Trainer
     * @return redirect
     */
    public function reviewTrainer(Request $request)
    {
        $request->validate([
            "trainer-rating" => "required",
            "trainer-review" => "required|min:2|max:255"
        ]);

        if (!TrainerReview::where("user_id", auth()->user()->id)->where("trainer_id", $request["trainer-id"])->exists())
        {
            TrainerReview::create([
                "user_id" => auth()->user()->id,
                "rating" => $request["trainer-rating"],
                "review" => $request["trainer-review"],
                "trainer_id" =>  $request["trainer-id"]
            ]);
    
            $total_no_of_reviews = TrainerReview::where("trainer_id", $request['trainer-id'])->count();
    
            $trainer = User::findOrFail($request["trainer-id"]);
    
            $trainer->rating = ($trainer->rating +  $request["trainer-rating"]) / $total_no_of_reviews;
    
            $trainer->update();
        }

        return redirect()->route("trainers")->with('alert', 'Trainer Reviewed Successfully!');
    }

    /**
     * Pricings Page
     * @return view
     */
    public function pricing($trainer_id)
    {
        return view('pricing', [
            "trainer_id" => $trainer_id
        ]);
    }

    /**
     * Make Subscription
     * @return view
     */
    public function subscribe(Request $request)
    {
        $request->validate([
            "trainer_id" => "required|numeric",
            "type" => "required|in:monthly,yearly"
        ]);

        $api = new Api(env("RAZORPAY_API_KEY"), env("RAZORPAY_SECRET_KEY"));

        $subscription = Subscription::create([
            "user_id" => auth()->user()->id,
            "trainer_id" => $request->trainer_id,
            "type" => $request->type,
            "expiry_date" => ($request->type === "monthly") ? now()->addMonth() : now()->addYear()
        ]);

        $order_id = 'S' . $subscription->id;

        $orderData = [
            'amount' => ( ( ($request->type === "monthly") ? 450 : 3999) * 100 ),
            'currency' => 'INR',
            'notes' => [
                'order_id' => $order_id,
                'name' => auth()->user()->name,
                'email' => auth()->user()->email,
                'phone' => auth()->user()->phone
            ]
        ];
        
        $razorpayOrder = $api->order->create($orderData);

        return view('subscription_payment', [
            "order_id" => $order_id,
            "order" => $razorpayOrder
        ]);
    }

    /**
     * Subscription Status
     * @return redirect
     */
    public function verify(Request $request)
    {
        $api = new Api(env("RAZORPAY_API_KEY"), env("RAZORPAY_SECRET_KEY"));

        $status = $api->payment->fetch($request->payment_id);

        if ($status->captured) {
            return redirect()->route('message')->with('alert', 'Subscription Added Successfully!');
        } else {
            $id = substr($request->order_id, 1);

            Subscription::findOrFail($id)->deleteOrFail();

            return redirect()->route('trainers')->with('alert', 'Payment Failed!');
        }
    }
}
