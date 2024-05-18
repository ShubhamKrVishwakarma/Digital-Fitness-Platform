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

    public $name;
    public $email;
    public $phone;
    public $address;
    public $total_orders;
    public $total_amount;
    public $payment_mode;

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
        $this->payment_mode = $order->payment_mode;

        $order_details = OrderedProduct::where("order_id", $id)->get();
        $this->order_details = $order_details->toArray();

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

        $all_products_available = true;

        foreach ($this->order_details as $product) {
            // dump($product);
            if (!Product::where("id", $product["product_id"])->exists()) {
                $all_products_available = false;
            }
        }

        if ($all_products_available) {
            foreach ($this->order_details as $item) {
                $product = Product::findOrFail($item["product_id"]);

                $product->quantity -= $item["quantity"];

                $product->update();
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
        } else {
            $this->dispatch(
                'alert', 
                icon: 'warning',
                title: 'Oops..',
                text: 'Some Products Unavailable!!',
            );
        }

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
            title: 'Success!',
            text: 'Order Rejected!',
        );
    }

    public function resetAll() {
        $this->reset();
        $this->resetValidation();
    }
}
