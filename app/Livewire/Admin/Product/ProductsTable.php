<?php

namespace App\Livewire\Admin\Product;

use App\Models\Product;
use Livewire\Component;

class ProductsTable extends Component
{
    public function render()
    {
        return view('livewire.admin.product.products-table', [
            "products" => Product::orderBy('created_at', 'DESC')->paginate(7)
        ]);
    }
}
