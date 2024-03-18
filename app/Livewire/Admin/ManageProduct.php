<?php

namespace App\Livewire\Admin;

use App\Models\Product;
use Livewire\Attributes\On;
use Livewire\Attributes\Rule;
use Livewire\Component;

class ManageProduct extends Component
{
    #[Rule('required|min:3|max:100')]
    public $name;

    #[Rule('required|min:10|max:255')]
    public $description;

    #[Rule('required|min:10|max:255')]
    public $keywords;

    #[Rule('required')]
    public $image;

    #[Rule('required')]
    public $price;
    
    #[Rule('required')]
    public $quantity;
    
    #[Rule('required')]
    public $category;

    public function render()
    {
        return view('livewire.admin.manage-product');
    }

    #[On('edit-product')]
    public function edit($id) {
        $product = Product::find($id);
        $this->name = $product->name;
        $this->description = $product->description;
        $this->keywords = $product->keywords;
        $this->image = $product->image;
        $this->price = $product->price;
        $this->quantity = $product->quantity;
        $this->category = $product->category->name;
    }

    public function update() {

    }
}
