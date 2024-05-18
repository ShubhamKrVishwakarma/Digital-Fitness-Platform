@extends('layouts.mainLayout')

@section('title', 'Checkout Page')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/checkout.css') }}">
@endpush
@section('content')
    <!-- Checkout Total -->
    @php
        $total_price = 0;
        $quantity = 0;
    @endphp
    @foreach ($cart as $item)
        @php
            $total_price += $item->price * $item->quantity;
            $quantity += $item->quantity;
        @endphp
    @endforeach
    <div class="container py-3">
        <div class="row">
            <div class="col-xl-8">
                <form action="{{ route('checkout.store') }}" method="POST">
                    @csrf
                    <div class="card">
                        <div class="card-body">
                            <ol class="activity-checkout mb-0 px-4 mt-3">
                                <li class="checkout-item">
                                    <div class="avatar checkout-icon p-1">
                                        <div class="avatar-title rounded-circle bg-primary">
                                            <i class="bi bi-receipt text-white font-size-20"></i>
                                        </div>
                                    </div>
                                    <div class="feed-item-list">
                                        <div>
                                            <h5 class="font-size-16 mb-1">Billing Info</h5>
                                            <div class="mb-3">
                                                <div>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="mb-3">
                                                                <input type="hidden" name="total_price" value="{{ $total_price }}">
                                                                <label class="form-label" for="billing-name">Name</label>
                                                                <input type="text" class="form-control" name="name"
                                                                    id="billing-name" placeholder="Enter name"
                                                                    value="{{ auth()->user()->name }}" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="mb-3">
                                                                <label class="form-label" for="billing-email-address">Email
                                                                    Address</label>
                                                                <input type="email" class="form-control"
                                                                    id="billing-email-address" name="email"
                                                                    placeholder="Enter email"
                                                                    value="{{ auth()->user()->email }}" readonly required>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="mb-3">
                                                                <label class="form-label" for="billing-phone">Phone</label>
                                                                <input type="text" name="phone" class="form-control"
                                                                    id="billing-phone" placeholder="Enter Phone no."
                                                                    value="{{ auth()->user()->phone }}" maxlength="10" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="checkout-item">
                                    <div class="avatar checkout-icon p-1">
                                        <div class="avatar-title rounded-circle bg-primary">
                                            <i class="bi bi-truck text-white font-size-20"></i>
                                        </div>
                                    </div>
                                    <div class="feed-item-list">
                                        <div>
                                            <h5 class="font-size-16 mb-1">Shipping Info</h5>
                                            <div class="mb-3">
                                                <label class="form-label" for="billing-address">Address</label>
                                                <textarea class="form-control" name="address" id="billing-address" rows="3" placeholder="Enter full address"
                                                    value="{{ auth()->user()->address }}" required></textarea>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="mb-4 mb-lg-0">
                                                        <label class="form-label">State</label>
                                                        <input type="text" class="form-control" name="state"
                                                            id="billing-city" placeholder="Enter State"
                                                            value="{{ auth()->user()->state }}" required>
                                                    </div>
                                                </div>

                                                <div class="col-lg-4">
                                                    <div class="mb-4 mb-lg-0">
                                                        <label class="form-label" for="billing-city">City</label>
                                                        <input type="text" name="city" class="form-control"
                                                            id="billing-city" placeholder="Enter City"
                                                            value="{{ auth()->user()->city }}" required>
                                                    </div>
                                                </div>

                                                <div class="col-lg-4">
                                                    <div class="mb-0">
                                                        <label class="form-label" for="zip-code">Zip / Postal
                                                            code</label>
                                                        <input type="text" class="form-control" name="zip_code"
                                                            id="zip-code" placeholder="Enter Postal code"
                                                            value="{{ auth()->user()->zip_code }}" required>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </li>
                                <li class="checkout-item">
                                    <div class="avatar checkout-icon p-1">
                                        <div class="avatar-title rounded-circle bg-primary">
                                            <i class="bi bi-wallet text-white font-size-20"></i>
                                        </div>
                                    </div>
                                    <div class="feed-item-list">
                                        <div>
                                            <h5 class="font-size-16 mb-1">Payment Info</h5>
                                        </div>
                                        <div>
                                            <h5 class="font-size-14 mb-3">Payment method :</h5>
                                            <div class="row">
                                                <div class="col-lg-3 col-sm-6">
                                                    <div>
                                                        <label class="card-radio-label">
                                                            <input type="radio" name="paymentType" value="online"
                                                                id="pay-methodoption2" class="card-radio-input" required>
                                                            <span class="card-radio py-3 text-center text-truncate">
                                                                <i class="bi bi-wallet2 d-block h2 mb-3"></i>
                                                                Online
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 col-sm-6">
                                                    <div>
                                                        <label class="card-radio-label">
                                                            <input type="radio" name="paymentType" value="cod"
                                                                id="pay-methodoption3" class="card-radio-input"
                                                                checked="" required>

                                                            <span class="card-radio py-3 text-center text-truncate">
                                                                <i class="bi bi-cash-coin d-block h2 mb-3"></i>
                                                                <span>Cash on Delivery</span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="mt-2 mt-sm-0">
                                        <button type="submit" class="btn btn-success">
                                            <i class="bi bi-cart me-1"></i> Proceed </button>
                                    </div>
                                </li>
                            </ol>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-xl-4">
                <div class="card checkout-order-summary">
                    <div class="card-body">
                        <div class="p-3 bg-light mb-3">
                            <h5 class="font-size-16 mb-0">Order Summary <span
                                    class="float-end ms-2">({{ $cart->count() }})</span></h5>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-centered mb-0 table-nowrap">
                                <thead>
                                    <tr>
                                        <th class="border-top-0" style="width: 110px;" scope="col">Product</th>
                                        <th class="border-top-0" scope="col">Product Name</th>
                                        <th class="border-top-0" scope="col">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cart as $item)
                                        <tr>
                                            <th scope="row"><img src="{{ $item->product->getProductUrl() }}"
                                                    alt="product-img" title="product-img" class="avatar-lg rounded"></th>
                                            <td>
                                                <h5 class="font-size-16 text-truncate"><a
                                                        href="{{ route('product.details', $item->product_id) }}"
                                                        class="text-dark">
                                                        {{ substr($item->product->name, 0, 15) }}...</a></h5>
                                                <p class="text-muted mb-0">
                                                    <span class="border rounded-5  border-success-subtle px-2">
                                                        <i class="bi bi-star-fill text-warning"></i>
                                                        {{ $item->product->rating }}
                                                    </span>
                                                </p>
                                                <p class="text-muted mb-0 mt-1"> &#x20b9; {{ $item->product->price }} X
                                                    {{ $item->quantity }} </p>
                                            </td>
                                            <td>&#x20b9; {{ $item->product->price * $item->quantity }}</td>
                                        </tr>
                                    @endforeach
                                    <tr class="bg-light">
                                        <td colspan="2">
                                            <h5 class="font-size-14 m-0">Total:</h5>
                                        </td>
                                        <td>
                                            &#x20b9; {{ $total_price }}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
@endsection
