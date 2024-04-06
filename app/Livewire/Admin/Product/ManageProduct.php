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

    #[Rule('required|min:10')]
    public $description;

    #[Rule('required|min:10')]
    public $keywords;

    #[Rule('nullable|sometimes')]
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

    #[On('manage-user')]
    public function edit($id) {
        $product = Product::findOrFail($id);
        $this->id = $id;
        $this->name = $product->name;
        $this->description = $product->description;
        $this->keywords = $product->keywords;
        $this->price = $product->price;
        $this->quantity = $product->quantity;
        $this->category_id = $product->category_id;
        $this->category = $product->category->name;
    }

    public function update() {
        $this->validate();

        $product = Product::findOrFail($this->id);
        $product->name = $this->name;
        $product->description = $this->description;
        $product->keywords = $this->keywords;
        $product->price = $this->price;
        $product->quantity = $this->quantity;
        $product->category_id = $this->category_id;

        if ($this->image) {
            $this->image = $this->image->store('products', 'public');
            $product->image = $this->image;
        }

        $product->update();

        $this->reset('image');
        
        $this->dispatch('refreshProductsTable');

        $this->dispatch(
            'alert', 
            icon: 'success',
            title: 'Success!',
            text: 'Product Details Updated Successfully!',
        );
    }
    
    public function delete() {
        Product::findOrFail($this->id)->delete();
        $this->dispatch('refreshProductsTable');
        $this->dispatch(
            'alert', 
            icon: 'success',
            title: 'Success!',
            text: 'Product Deleted Successfully!',
        );
    }

    public function resetAll() {
        $this->reset();
    }
}
