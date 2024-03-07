<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\TrainerDetail;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
                "password" => "required|min:8|"
            ]);

            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 422);
            }

            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {
                $user = Auth::user();

                if ($user->role == "member") {
                    return response()->json(['success' => 'Login Successful!', 'message' => 'Welcome Member!', 'user' => $user], 200);
                } else if ($user->role == "trainer") {
                    return response()->json(['success' => 'Login Successful!', 'message' => 'Welcome Trainer!', 'user' => $user], 200);
                } else if ($user->role == "pending") {
                    return response()->json(['success' => 'Login Successful!', 'message' => 'Verfification Pending!', 'user' => $user], 200);
                } else if ($user->role == "admin") {
                    return response()->json(['success' => 'Login Successful!', 'message' => 'Welcome Admin!', 'user' => $user], 200);
                }
            }

            return response()->json(['error' => 'Invalid credentials. Please check your email and password.'], 401);
        } catch(Exception) {
            return response()->json(['error' => 'Server Error'], 500);
        }
    }    

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

    public function logout() {
        auth()->logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect()->route('home')->with('success', "Logged out Successfully!");
    }
}
