<?php

namespace App\Livewire\Admin\Product;

use App\Models\Category;
use App\Models\Product;
use Livewire\Attributes\On;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

class ManageProduct extends Component
{
    use WithFileUploads;

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
    public $category_id;

    public $category;
    public $id;

    public function render()
    {
        return view('livewire.admin.product.manage-product', [
            "categories" => Category::all()
        ]);
    }

    #[On('edit-product')]
    public function edit($id) {
        $product = Product::find($id);
        $this->id = $id;
        $this->name = $product->name;
        $this->description = $product->description;
        $this->keywords = $product->keywords;
        $this->image = $product->image;
        $this->price = $product->price;
        $this->quantity = $product->quantity;
        $this->category_id = $product->category_id;

        $category = Category::find($product->category_id);
        $this->category = $category->name;
    }

    public function update() {
        $product = Product::find($this->id);
        $product->name = $this->name;
        $product->description = $this->description;
        $product->keywords = $this->keywords;
        $product->image = $this->image;
        $product->price = $this->price;
        $product->quantity = $this->quantity;
        $product->category_id = $this->category_id;
    }
}
