<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login()
    {
        return view('Auth.login');
    }

    public function signup()
    {
        return view('Auth.signup');
    }

    public function register()
    {
        return view('Auth.register');
    }

    public function authenticate(Request $request) {
        try {
            $validator = Validator::make($request->all(), [
                "email" => "required|email|min:5|max:100",
                "password" => "required|min:8",
            ]);

            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 422);
            }

            if (Auth::attempt($validator->validated())) {
                $user = Auth::user();

                if ($user->role == "pending") {
                    auth()->logout();
                    request()->session()->invalidate();
                    request()->session()->regenerateToken();
                    return response()->json(['error' => 'Account is pending approval'], 403);
                }

                return response()->json(['message' => 'Account created successfully']);
            } else {
                return response()->json(['error' => 'Invalid credentials'], 401);
            }
        } catch (Exception) {
            return response()->json(['error' => 'Server Error'], 500);
        }
    }

    public function create(Request $request) {
        try {
            $validator = Validator::make($request->all(), [
                "name" => "required|min:2|max:100",
                "email" => "required|email|min:5|max:100|unique:users,email",
                "gender" => "required|in:M,F,O",
                "date_of_birth" => [
                    "required",
                    "date",
                    "before:" . Date::now()->subYears(15)->format('Y-m-d'),
                ],
                "password" => "required",
                "confirm_password" => "required|same:password"
            ]);

            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 422);
            }

            User::create([
                "name" => $request->name,
                "email" => $request->email,
                "gender" => $request->gender,
                "dob" => $request->date_of_birth,
                "password" => $request->password
            ]);

            return response()->json(['message' => 'Account created successfully']);
        } catch (Exception) {
            return response()->json(['error' => 'Server Error'], 500);
        }
    }

    public function logout() {
        auth()->logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect()->route('home');
    }
}
