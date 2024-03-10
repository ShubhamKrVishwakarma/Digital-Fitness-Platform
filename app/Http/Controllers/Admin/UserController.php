<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Exception;

class UserController extends Controller
{
    public function index() {
        return view('Admin.users', [
            "users" => User::latest()->paginate(7)
        ]);
    }

    public function create(Request $request) {
        try {
            $validator = Validator::make($request->all(), [
                "name" => "required|min:2|max:100",
                "email" => "required|email|unique:users,email|min:5|max:100",
                "gender" => "required|in:M,F,O",
                "dob" => "required|date",
                "phone" => "max:10",
                "city" =>"min:2|max:100",
                "zip_code" => "max:10",
                "state" => "max:50",
                "bio" => "max:255",
                "password" => "required|min:8",
                "confirm_password" => "required|min:8|same:password",
            ]);

            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 422);
            }

            User::create([
                "name" => $request["name"],
                "email" => $request["email"],
                "gender" => $request["gender"],
                "dob" => $request["dob"],
                "phone" => $request["phone"],
                "address" => $request["address"],
                "city" => $request["city"],
                "zip_code" => $request["zip_code"],
                "state" => $request["state"],
                "bio" => $request["bio"],
                "profile_pic" => $request["profile_pic"],
                "password" => $request["password"]
            ]);

            return response()->json(['success' => 'Account Created Successfully!'], 200);
        } catch (Exception) {
            return response()->json(['error' => 'Server Error'], 500);
        }
    }

    public function store() {

    }
}
