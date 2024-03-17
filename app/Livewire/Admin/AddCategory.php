<?php

namespace App\Livewire\Admin;

use App\Models\Category;
use Livewire\Attributes\Rule;
use Livewire\Component;

class AddCategory extends Component
{
    #[Rule('required|unique:categories,name|min:3|max:100')]
    public $name;

    public function render()
    {
        return view('livewire.admin.add-category');
    }

    public function create() {
        $this->validate();

        Category::create([
            "name" => $this->name
        ]);

        $this->reset();

        $this->dispatch('addCategory-success');
        $this->dispatch('refreshCategoryList');
    }
}
