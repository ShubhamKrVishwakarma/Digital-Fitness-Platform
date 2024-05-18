<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Post;
use App\Models\TrainerReview;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function show($id)
    {
        $user = User::findOrFail($id);
        $review = null;
        if($user->role === 'trainer'){
            $review = TrainerReview::where('trainer_id' , $id)->get();
        }

        return view('profile', [
            'user' => $user,
            'posts' => Post::where('user_id', $id)->get(),
            'reviews' => $review
        ]);
    }

    public function profile_edit($id)
    {
        return view('profile_edit', [
            "user" => User::findOrFail($id)
        ]);
    }

    /**
     * Update User Profile Details
     * @return redirect
     */
    public function update(Request $request)
    {
        $request->validate([
            "name" => "required|min:2|max:100",
            "bio" => "max:255",
            "dob" => "date",
            "phone" => "numeric|digits:10|nullable",
            "address" => "max:255",
            "city" => "max:100",
            "state" => "max:50",
            "zip_code" => "numeric|digits:6|nullable",
            "profile_pic" => "mimes:jpg,png",
        ]);

        $user = User::findOrFail(auth()->user()->id);

        $user->name = $request->input('name');
        $user->bio = $request->input('bio');
        $user->phone = $request->input('phone');
        $user->address = $request->input('address');
        $user->city = $request->input('city');
        $user->state = $request->input('state');
        $user->zip_code = $request->input('zip_code');

        if ($request->hasFile('profile_pic')) {
            $file_name = $user->id . '.' . $request->file('profile_pic')->getClientOriginalExtension();
            $request->file('profile_pic')->storeAs('public/users', $file_name);
            $user->profile_pic = $file_name;
        }

        $user->update();

        return redirect()->route('user.show', $user->id)->with('alert', 'Profile updated successfully.');
    }

    /**
     * Change User Password
     * @return redirect
     */
    public function update_pass(Request $request)
    {
        $request->validate([
            "old-pass" => "required|min:8|max:255",
            "new-pass" => "required|min:8|max:255",
            "re-pass" => "required|min:8|max:255|same:new-pass",
        ]);

        $user = User::findOrFail(auth()->user()->id);
        if(Hash::check($request->input('old-pass'),$user->password)){
            $user->password = $request->input('new-pass');
            $user->update();
            auth()->logout();

            request()->session()->invalidate();
            request()->session()->regenerateToken();

            return redirect()->route('login')->with('alert', 'Password Updated Successfully!');
        }
        return redirect()->route('user.profile_edit', $user->id)->with('alert','Please Enter correct password');
    }
    public function delete($id){
        auth()->logout();
        $user = User::findOrFail($id);
        $user->delete();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect()->route('login');
    }
}
