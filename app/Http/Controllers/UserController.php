<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Exception;

class UserController extends Controller
{
    public function show($id)
    {
        try {
            $user = User::findOrFail($id);
            return view('profile', [
                'user' => $user,
                'posts' => Post::where('user_id',$id )->get()
            ]);
        } catch (Exception $e) {
            // Handled the case where the user is not found
            return redirect()->route('home')->with('error', 'User not found.');
        }
    }

    public function profile_edit($id)
    {
        try {
            $user = User::findOrFail($id);
            return view('profile_edit', compact('user'));
        } catch (Exception $e) {
            // Handled the case where the user is not found
            return redirect()->route('home')->with('error', 'User not found.');
        }
    }

    public function update(Request $request)
    {
        $request->validate([
            "name" => "required|min:2|max:100",
            "bio" => "max:255",
            "dob" => "date",
            "phone" => "max:10",
            "address" => "max:255",
            "city" => "max:100",
            "state" => "max:50",
            "zip_code" => "max:10",
            "profile_pic" => "mimes:jpg,bmp,png",
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

        return redirect()->route('user.show',$user->id)->with('success', 'Profile updated successfully.');
    }
    
    public function update_pass(Request $request)
    {
        $request->validate([
            "old-pass" => "required|min:8|max:255",
            "new-pass" => "required|min:8|max:255",
            "re-pass" => "required|min:8|max:255|same:new-pass",
        ]);
        
        $user = User::findOrFail(auth()->user()->id);
        
        $user->password = $request->input('new-pass');
        
        $user->update();
        
        return redirect()->route('user.show',$user->id)->with('success', 'Profile updated successfully.');
    }
}


