<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Chat;
use App\Models\TrainerReview;
use App\Models\User;
use Illuminate\Http\Request;
use Razorpay\Api\Api;

class TrainerController extends Controller
{
    public function index()
    {
        return view('trainers', [
            "trainers" => User::where("role", "trainer")->get()
        ]);
    }
    
    public function reviewTrainer(Request $request)
    {
        $request->validate([
            "trainer-rating" => "required",
            "trainer-review" => "required|min:2|max:255"
        ]);

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

        return redirect()->route("trainers")->with('success', 'Trainer Reviewed Successfully!');
    }

    public function pricing($trainer_id)
    {
        return view('pricing', [
            "trainer_id" => $trainer_id
        ]);
    }

    public function subscribe(Request $request)
    {
        $api = new Api(env("RAZORPAY_API_KEY"), env("RAZORPAY_SECRET_KEY"));

        $order_id = rand(111111, 999999);

        $orderData = [
            'receipt' => `rcptid_$order_id`,
            'amount' => ($request->amount * 100),
            'currency' => 'INR',
            'notes' => [
                'order_id' => $order_id,
                'name' => auth()->user()->name,
                'email' => auth()->user()->email,
                'phone' => auth()->user()->phone,
                'trainer_id' => $request->trainer_id
            ]
        ];

        $razorpayOrder = $api->order->create($orderData);

        return view('subscription_payment', [
            "order_id" => $order_id,
            "order" => $razorpayOrder
        ]);
    }

    public function subscriptionInfo(Request $request) {
        $api = new Api(env("RAZORPAY_API_KEY"), env("RAZORPAY_SECRET_KEY"));

        $status = $api->payment->fetch($request->payment_id);
        
        if ($status->captured) {
            // Chat::create([
            //     "user_id" => auth()->user()->id,
            //     "trainer_id" => $request->trainer_id
            // ]);
            return redirect()->route('message')->with('alert', 'Subscription Added Successfully!');
        } else {
            return redirect()->route('trainers')->with('alert', 'Payment Failed!');
        }
    }
}
