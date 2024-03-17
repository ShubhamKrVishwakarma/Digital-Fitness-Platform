<?php

namespace App\Livewire\Admin;

use App\Models\Category;
use Livewire\Attributes\On;
use Livewire\Component;

class CategoryList extends Component
{
    #[On('refreshCategoryList')]
    public function render()
    {
        return view('livewire.admin.category-list', [
            "categories" => Category::all()
        ]);
    }

    public function editCategory($id) {
        $this->dispatch('edit-category', $id);
    }
}
