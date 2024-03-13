<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Query;

class QueryController extends Controller
{
    public function index() {
        return view('Admin.queries', [
            "queries" => Query::orderBy('created_at', 'DESC')->paginate(7)
        ]);
    }
}
