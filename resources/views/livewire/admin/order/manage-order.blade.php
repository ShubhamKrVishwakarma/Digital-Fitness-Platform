<div class="row" x-show="manageOrder" style="display: none;">
    <!-- view Order Table Button -->
    <div class="col-12 d-flex justify-content-start align-items-center flex-wrap ps-3 mb-3">
        <button class="btn btn-sm btn-dark m-0" wire:click='resetAll' x-on:click="manageOrder = false, ordersTable = true">View All Orders</button>
    </div>
    <!-- Order Details -->
    <div class="col-md-8">
        <div class="card">
            <div class="card-header pb-0 px-3 d-flex justify-content-between align-items-center">
                <div>
                    <h6 class="mb-0">Order Information</h6>
                </div>
                <div class="text-end">
                    @if ($status)
                        <span class="btn btn-link text-{{ $status === "Order Confirmed" ? 'success' : 'danger' }} text-gradient px-3 mb-0">{{ $status }}</span>
                    @else
                        <button class="btn btn-link text-danger text-gradient px-3 mb-0" wire:click.prevent='cancelOrder'><i class="far fa-trash-alt me-2"></i>Cancel</button>
                        <button class="btn btn-link text-success text-gradient px-3 mb-0" wire:click.prevent='confirmOrder'><i class="fa-solid fa-circle-check"></i> Confirm</button>
                    @endif
                </div>
            </div>
            <div class="card-body pt-4 p-3">
                <ul class="list-group">
                    @foreach ($order_details as $order_detail)
                        <li
                            class="list-group-item border-0 d-flex justify-content-center justify-content-md-start p-4 mb-3 bg-gray-100 border-radius-lg">
                            <div
                                class="d-flex flex-column flex-md-row justify-content-start align-items-center flex-wrap gap-3">
                                <div class="avatar avatar-xxl position-relative mb-2">
                                    <img src="{{ url('storage/products/') . '/' . $order_detail["product_image"] }}" class="w-100 border-radius-lg shadow-sm">
                                </div>
                                <!-- Product Details -->
                                <div class="d-flex flex-column justify-content-center">
                                    <span class="mb-1 text-xs">Product Name: <span
                                            class="text-dark font-weight-bold ms-sm-2">{{ $order_detail["product_name"] }}</span></span>
                                    <span class="mb-1 text-xs">Category: <span
                                            class="text-dark font-weight-bold ms-sm-2">{{ $order_detail["category"] }}</span></span>
                                    <span class="mb-1 text-xs">Quantity: <span
                                            class="text-danger ms-sm-1 font-weight-bold">{{ $order_detail["quantity"] }}</span></span>
                                    <span class="mb-1 text-xs">Available Quantity: <span
                                            class="text-dark ms-sm-1 font-weight-bold">112</span></span>
                                    <span class="mb-1 text-xs">Price: <span
                                            class="text-success ms-sm-1 font-weight-bold"><i
                                                class="fa-solid fa-indian-rupee-sign"></i> {{ $order_detail["product_price"] }}</span></span>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
                <!-- Order Total -->
                <hr class="m-0 bg-secondary">
                <div class="pt-2">
                    <h6 class="m-0 ps-4">Total Amount: <span class="text-success ms-sm-1 font-weight-bold"><i class="fa-solid fa-indian-rupee-sign"></i> {{ $total_amount }}</span></h6>
                </div>
            </div>
        </div>
    </div>
    <!-- User Details -->
    <div class="col-md-4">
        <div class="card mb-3">
            <div class="card-header p-3">
                <h6 class="mb-0">Customer Details</h6>
            </div>
            <hr class="m-0 bg-secondary">
            <div class="card-body p-3">
                <!-- User Info  -->
                <div class="d-flex">
                    <div>
                        <img src="../images/team-3.jpg" class="avatar avatar-sm me-3" alt="user1">
                    </div>
                    <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm">{{ $name }}</h6>
                        <p class="text-xs text-secondary mb-0">{{ $email }}</p>
                    </div>
                </div>
                <div>
                    <span class="text-success d-block py-2 fs-5 mb-0"><i class="fa-solid fa-cart-shopping"></i>
                        {{ $total_orders }} Orders</span>
                </div>
                <div>
                    <h6 class="m-0">Contact Info:</h6>
                    <p class="m-0 text-sm mb-1"><b>Email :</b> {{ $email }}</p>
                    <p class="m-0 text-sm"><b>Mobile :</b> +91 {{ $phone }}</p>
                </div>
                <!-- Shipping Info -->
            </div>
        </div>
        <!-- Shipping Address -->
        <div class="card mb-3">
            <div class="card-body p-3">
                <h6 class="mb-0 px-1 py-2">Shipping Address</h6>
                <p class="text-sm text-secondary m-0 px-1 pt-1 pb-2">{{ $address }}</p>
            </div>
        </div>
        <!-- Payment Inforamtaion -->
        <div class="card mb-3">
            <div class="card-body p-3">
                <h6 class="mb-0 px-1 py-2">Payment Details</h6>
                <p class="text-sm text-secondary m-0 px-1 pt-1 pb-2">Payment Type: COD</p>
            </div>
        </div>
    </div>
</div>