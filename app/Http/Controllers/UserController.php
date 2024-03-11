<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function show($id)
    {
        try {
            $user = User::findOrFail($id);
            return view('profile', compact('user'));
        } catch (ModelNotFoundException $e) {
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
            "profile_pic" => "image"
        ]);
    
        $user = Auth::user();

        $user->name = $request->input('name');
        $user->bio = $request->input('dob');
        $user->phone = $request->input('phone');
        $user->address = $request->input('address');
        $user->city = $request->input('city');
        $user->state = $request->input('state');
        $user->zip_code = $request->input('zip-code');

        // print_r($request->image);
        // die;
        // $file_name= $user->id.'.'.$request->file('image')->getClientOriginalExtension();
        // dd($file_name);
        // if ($request->has('image')) {
        //     $request->file('image')->storeAs('public/user', $file_name);
        // }
        // $user->profile_pic = $file_name;

        $user->save();

        return redirect()->route('user.show',$user->id)->with('success', 'Profile updated successfully.');
    }
    
    
    public function update_pass(Request $request)
    {
        $request->validate([
            "old-pass" => "required|min:8|max:255",
            "new-pass" => "required|min:8|max:255",
            "re-pass" => "required|min:8|max:255|same:new-pass",
        ]);
        $user = Auth::user();
        
        $user->password = $request->input('new-pass');
        $user->save();
        return redirect()->route('user.show',$user->id)->with('success', 'Profile updated successfully.');
    }
}


