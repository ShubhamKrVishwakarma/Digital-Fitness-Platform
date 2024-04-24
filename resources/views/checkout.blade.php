@extends('layouts.mainLayout')

@section('title', 'Checkout Page')

@section('content')
    <div class="container-fluid p-4 bg-body-tertiary">
        <div class="container" style="max-width: 1000px;">
            <main>
                <div class="py-2 text-center">
                    <h2>Checkout Page</h2>
                </div>
                <div class="row g-5">
                    <!-- Checkout Total -->
                    @php
                        $total_price=0;
                        $quantity=0;
                    @endphp
                    @foreach ($cart as $item)
                        @php
                            $total_price+= ($item->price * $item->quantity);  
                            $quantity+=$item->quantity; 
                        @endphp
                    @endforeach
                    <div class="col-md-5 col-lg-4 order-md-last">
                        <h4 class="d-flex justify-content-between align-items-center mb-3">
                            <span class="text-light-blue">Order Summary</span>
                        </h4>
                        <ul class="list-group mb-3">
                            <li class="list-group-item d-flex justify-content-between lh-sm">
                                <div>
                                    <h6 class="my-0">Products :</h6>
                                    <small class="text-body-secondary"></small>
                                </div>
                                <span class="text-body-secondary">{{ $cart->count() }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between lh-sm">
                                <div>
                                    <h6 class="my-0">Total Items :</h6>
                                </div>
                                <span class="text-body-secondary">{{ $quantity }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between bg-body-tertiary">
                                <div class="text-danger">
                                    <h6 class="my-0">Tax (0%)</h6>
                                </div>
                                <span class="text-danger">+ &#x20B9; 0.00</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between bg-body-tertiary">
                                <div class="text-success">
                                    <h6 class="my-0">Discount</h6>
                                </div>
                                <span class="text-success">− &#x20B9; 0.00</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span>Total</span>
                                <strong>&#x20B9; {{$total_price}}.00</strong>
                            </li>
                        </ul>
                    </div>
                    <!-- Checkout Form -->
                    <div class="col-md-7 col-lg-8">
                        <h4 class="mb-3">Billing address</h4>
                        <!-- Form -->
                        <form id="checkoutForm" action="{{route('checkout.store', $total_price)}}" method="post">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-12">
                                    <label for="name" class="form-label">Your Full Name</label>
                                    <input type="text" class="form-control" name="name" id="name" value="{{auth()->user()->name}}" required>
                                    @error('name')
                                    <span class="text-danger d-block mt-1 ms-1">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email" id="email"
                                         value="{{auth()->user()->email}}" readonly>
                                </div>
                                <div class="col-12">
                                    <label for="phone_number" class="form-label">Phone Number</label>
                                    <div class="input-group">
                                        <span class="input-group-text">+91</span>
                                        <input type="text" class="form-control" name="phone" id="phone_number"
                                           value="{{auth()->user()->phone}}" placeholder="XXXXXX-XXXXX" required>
                                    </div>
                                    @error('phone')
                                    <span class="text-danger d-block mt-1 ms-1">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <label for="address" class="form-label">Shipping Address</label>
                                    <textarea class="form-control" name="address" id="address" rows="3" placeholder="Enter your address" value="{{auth()->user()->address}}" required></textarea>
                                    @error('address')
                                    <span class="text-danger d-block mt-1 ms-1">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="city" class="form-label">City</label>
                                    <input type="text" class="form-control" name="city" id="city" value="{{auth()->user()->city}}" placeholder="Enter your city" required>
                                    @error('city')
                                    <span class="text-danger d-block mt-1 ms-1">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-md-5">
                                    <label for="zipcode" class="form-label">Zip Code</label>
                                    <input type="text" class="form-control" name="zip_code" id="zipcode" value="{{auth()->user()->zip_code}}" placeholder="Enter your Zip Code" required>
                                    @error('zip_code')
                                    <span class="text-danger d-block mt-1 ms-1">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="state" class="form-label">State</label>
                                    <input type="text" class="form-control" name="state" id="state" value="{{auth()->user()->state}}" placeholder="Enter your state" required>
                                    @error('state')
                                    <span class="text-danger d-block mt-1 ms-1">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                            <hr class="my-4">

                            <h4 class="mb-3">Payment Option:</h4>

                            <div class="my-3">
                                <div class="form-check">
                                    <input id="online" name="paymentType" type="radio" class="form-check-input" value="online" required>
                                    <label class="form-check-label" for="online">Pay Online</label>
                                </div>
                                <div class="form-check">
                                    <input id="cod" name="paymentType" type="radio" class="form-check-input" value="cod" required>
                                    <label class="form-check-label" for="cod">Cash on Delivery (COD)</label>
                                </div>
                            </div>

                            <hr class="my-4">

                            <button class="w-100 btn btn-lg btn-primary" type="submit">Continue to checkout</button>
                        </form>
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection