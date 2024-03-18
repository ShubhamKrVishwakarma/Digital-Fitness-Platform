<?php

namespace App\Livewire\Admin\Category;

use Livewire\Attributes\On;
use Livewire\Component;

class CategoryList extends Component
{
    #[On('refreshCategoryList')]
    public function render()
    {
        return view('livewire.admin.category.category-list');
    }

    public function editCategory($id) {
        $this->dispatch('edit-category', $id);
    }
}
