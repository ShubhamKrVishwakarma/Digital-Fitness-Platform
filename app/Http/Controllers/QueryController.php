<?php

namespace App\Http\Controllers;

use App\Models\Query;
use Exception;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

class QueryController extends Controller
{
    public function index(){
        return view("contact");
    }

    public function store(Request $request){
        // dd($request->all());
        $request->validate([
            "name" => "required|min:2|max:255",
            "phone" => "required|min:10",
            "email" => "required|email",
            "message" => "required|max:250"
        ]);
        Query::create([
            "name" => $request->name,
            "phone" => $request->phone,
            "email" => $request->email,
            "message" => $request->message
        ]);
        return redirect()->route("contact");
    }
}
