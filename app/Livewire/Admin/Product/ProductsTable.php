<?php

namespace App\Livewire\Admin\Product;

use App\Models\Product;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class ProductsTable extends Component
{
    use WithPagination;
    
    #[On('refreshProductsTable')]
    public function render()
    {
        return view('livewire.admin.product.products-table', [
            "products" => Product::orderBy('id', 'DESC')->paginate(7)
        ]);
    }
}
