<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TrainerDetail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Exception;

class UserController extends Controller
{
    public function index() {
        return view('Admin.users', [
            "users" => User::orderBy('id', 'DESC')->paginate(7)
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

    public function store(Request $request) {
        try {
            $validator = Validator::make($request->all(), [
                "name" => "required|min:2|max:100",
                "email" => "required|email|min:5|max:100|unique:users,email",
                "gender" => "required|in:M,F,O",
                "dob" => "required|date",
                "phone" => "required|max:10",
                "city" =>"min:2|max:100",
                "zip_code" => "max:10",
                "state" => "max:50",
                "bio" => "max:255",
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

            $user = User::create([
                "name" => $request["name"],
                "email" => $request["email"],
                "dob" => $request["dob"],
                "phone" => $request["phone"],
                "gender" => $request["gender"],
                "password" => $request["password"],
                "role" => "pending"
            ]);

            TrainerDetail::create([
                "user_id" => $user->id,
                "occupation" => $request["occupation"],
                "certificate_id" => $request["certificate_id"],
                "issue_date" => $request["issue_date"],
                "expiry_date" => $request["expiry_date"],
                "issued_authority" => $request["issued_authority"]
            ]);

            return response()->json(['success' => 'Account Created Successfully!'], 200);
        } catch(Exception) {
            return response()->json(['error' => 'Server Error'], 500);
        }
    }

    public function getUserDetails(Request $request) {
        try {
            $user = User::find($request["id"]);
            if ($user) {
                return response()->json(['success' => 'Data Fetched Successfullt', 'user' => $user]);
            }
            return response()->json(['error' => 'User Does not Exists'], 401);
        } catch (Exception) {
            return response()->json(['error' => 'Server Error'], 500);
        }
    }
}
