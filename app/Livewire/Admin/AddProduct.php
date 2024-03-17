<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Product;
use App\Models\Category;
use Livewire\Attributes\Rule;
use Livewire\WithFileUploads;

class AddProduct extends Component
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

    public function render()
    {
        return view('livewire.admin.add-product', [
            "categories" => Category::all()
        ]);
    }

    public function store() {
        $this->validate();

        $this->image = $this->image->store('products', 'public');

        Product::create([
            "name" => $this->name,
            "description" => $this->description,
            "keywords" => $this->keywords,
            "image" => $this->image,
            "price" => $this->price,
            "quantity" => $this->quantity,
            "category_id" => $this->category_id
        ]);

        $this->dispatch('addProduct-success');

        $this->reset();
    }
}
