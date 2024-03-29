<?php

namespace App\Livewire\Admin\Order;

use App\Models\Order;
use App\Models\OrderedProduct;
use App\Models\Product;
use Livewire\Attributes\On;
use Livewire\Component;

class ManageOrder extends Component
{
    public $id;
    public $order = [];
    public $order_details = [];
    public $products = [];

    public $name;
    public $email;
    public $phone;
    public $address;
    public $total_orders;
    public $total_amount;

    public $status;

    public function render()
    {
        return view('livewire.admin.order.manage-order');
    }

    #[On('manage-order')]
    public function manage($id) {
        $this->id = $id;

        $order = Order::findOrFail($id);
        $this->order[] = $order;
        $this->name = $order->user->name;
        $this->email = $order->user->email;
        $this->phone = $order->phone;
        $this->address = $order->address;
        $this->total_orders = $order->orders->count();
        $this->total_amount = $order->amount;

        $order_details = OrderedProduct::where('order_id', $id)->get();
        $this->order_details[] = $order_details;
        
        foreach($order_details as $orders) {
            $this->products[] = Product::find($orders->product_id);
        }


        if ($order->status === "confirmed") {
            $this->status = "Order Confirmed";
        } else if ($order->status === "rejected") {
            $this->status = "Order Canceled";
        } else {
            $this->status = null;
        }
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
        $this->status = "Order Confirmed";
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
        $this->status = "Order Canceled";
        $this->dispatch('refreshOrdersTable');
        $this->dispatch(
            'alert', 
            icon: 'success',
            title: 'Error!',
            text: 'Order Rejected!',
        );
    }
}
