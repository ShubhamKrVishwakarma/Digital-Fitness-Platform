<?php

namespace App\Livewire\Admin\Dashboard;

use App\Models\Order;
use App\Models\Product;
use App\Models\Query;
use App\Models\User;
use Livewire\Component;

class SiteInfo extends Component
{
    public function render()
    {
        return view('livewire.admin.dashboard.site-info', [
            "total_users" => User::count(),
            "total_products" => Product::count(),
            "total_orders" => Order::count(),
            "total_queries" => Query::count()
        ]);
    }
}
