<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\Query;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        return view('Admin.dashboard', [
            "total_users" => User::count(),
            "total_products" => Product::count(),
            "total_orders" => Order::count(),
            "total_queries" => Query::count(),
        ]);
    }
}
