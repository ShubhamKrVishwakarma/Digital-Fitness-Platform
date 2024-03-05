<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
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

    // public function authenticate() {

    // }    

    public function create(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                "name" => "required|min:2|max:100",
                "email" => "required|email|unique:users,email|min:5|max:100",
                "gender" => "required|in:M,F,O",
                "dob" => "required|date",
                "password" => "required|min:8",
                "confirm_password" => "required|min:8|same:password"
            ]);

            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 422);
            }

            User::create([
                "name" => $request["name"],
                "email" => $request["email"],
                "gender" => $request["gender"],
                "dob" => $request["dob"],
                "password" => $request["password"]
            ]);

            return response()->json(['success' => 'Account Created Successfully!'], 200);
        } catch (Exception) {
            return response()->json(['error' => 'Server Error'], 500);
        }
    }

    public function store(Request $request) {
        try {
            $validator = Validator::make($request->all(), [
                "name" => "required|min:2|max:100",
                "email" => "required|email|min:5|max:100|unique:users,email",
                "dob" => "required|date",
                "phone" => "required|max:10",
                "gender" => "required|in:M,F,O",
                "occupation" => "required|min:2|max:100",
                "certificate_id" => "required",
                "issue_date" => "required|date",
                "expiry_date" => "required|date",
                "issued_authority" => "required|max:200",
                "password" => "required|min:8",
                "confirm_password" => "required|min:8|same:password"
            ]);

            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 422);
            }

            return response()->json(['success' => 'Account Created Successfully!'], 200);
        } catch(Exception) {
            return response()->json(['error' => 'Server Error'], 500);
        }
    }
}
