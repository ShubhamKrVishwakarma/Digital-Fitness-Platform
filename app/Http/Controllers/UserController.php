<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;

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
            "name" => "min:2|max:100",
            "bio" => "min:10|max:500",
            "dob" => "date",
            "phone" => "max:10",
            "address" => "min:10|max:300",
            "city" => "max:100",
            "state" => "max:50",
            "zip" => "max:10",
        ]);
    


        $user = Auth::user();

    // Update user data based on the submitted form data
        $user->name = $request->input('name');
    // Update other profile data as needed

    // Save the changes
        $user->save();

    // Redirect back to the profile page with a success message
        return redirect()->route('profile')->with('success', 'Profile updated successfully.');
    }
}

