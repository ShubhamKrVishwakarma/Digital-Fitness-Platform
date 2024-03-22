<?php

namespace App\Livewire\Admin\Order;

use App\Models\Order;
use App\Models\Product;
use Livewire\Attributes\On;
use Livewire\Component;

class ManageOrder extends Component
{
    public $id;
    public $order;
    public $user;
    public $ordered_products;

    public function render()
    {
        return view('livewire.admin.order.manage-order');
    }

    #[On('manage-order')]
    public function manage($id) {
        $this->id = $id;
        $order = Order::findOrFail($id);
        $this->user = $order->user;
        $this->ordered_products = $order->orders;
    }

    public function confirmOrder() {
        $order = Order::findOrFail($this->id);
        $products = $order->orders->toArray();
        foreach ($products as $product) {
            $update = Product::findOrFail($product["product_id"]);
            $update->quantity = $update->quantity - $product["quantity"];
            $update->update();
        }
        $order->status = "confirmed";
        $order->update();
        $this->dispatch('refreshOrdersTable');
        $this->dispatch(
            'alert', 
            icon: 'success',
            title: 'Success!',
            text: 'Order Confirmed!',
        );
    }
    
    public function cancelOrder() {
        $order = Order::findOrFail($this->id);
        $order->status = "rejected";
        $order->update();
        $this->dispatch('refreshOrdersTable');
        $this->dispatch(
            'alert', 
            icon: 'success',
            title: 'Error!',
            text: 'Order Rejected!',
        );
    }
}
