<?php

namespace App\Livewire\Admin\Order;

use App\Models\Order;
use Livewire\Attributes\On;
use Livewire\Component;

class ManageOrder extends Component
{
    public $order;

    public function render()
    {
        return view('livewire.admin.order.manage-order');
    }

    #[On('manage-order')]
    public function manage($id) {
        $this->order = Order::where('id', $id)->first();
        dd($this->order->ordered_product->id);
    }

    public function confirmOrder() {

    }

    public function cancelOrder() {

    }
}
