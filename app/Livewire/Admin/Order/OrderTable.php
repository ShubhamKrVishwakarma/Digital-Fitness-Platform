<?php

namespace App\Livewire\Admin\Order;

use App\Models\Order;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class OrderTable extends Component
{
    use WithPagination;
    
    #[On('refreshOrdersTable')]
    public function render()
    {
        return view('livewire.admin.order.order-table', [
            "orders" => Order::orderBy('id', 'DESC')->paginate(7)
        ]);
    }
}
