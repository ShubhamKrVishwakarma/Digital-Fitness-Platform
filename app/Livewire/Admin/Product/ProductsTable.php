<?php

namespace App\Livewire\Admin\Product;

use App\Models\Product;
use Livewire\Attributes\On;
use Livewire\Component;

class ProductsTable extends Component
{
    #[On('refreshProductsTable')]
    public function render()
    {
        return view('livewire.admin.product.products-table', [
            "products" => Product::orderBy('created_at', 'DESC')->paginate(7)
        ]);
    }

    public function edit($id) {
        $this->dispatch('edit-product', $id);
    }
}
