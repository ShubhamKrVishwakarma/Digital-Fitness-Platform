@extends('layouts.mainLayout')

@section('title', 'Cart')

@push('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="{{ asset('css/cart.css') }}">
@endpush

@section('content')
    <section>
        <div class="container py-5">
            <div class="row d-flex justify-content-center align-items-center h-100">
                @if ($cart->count() < 1)
                    <div class="col-12 d-flex justify-content-center align-items-center" style="min-height: 500px">
                        <img src="{{ asset('images/Empty/empty_cart.png') }}" alt="">
                    </div>
                @else
                    <div class="col-12">
                        <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                            <div class="card-body p-0">
                                    <div class="row g-0">
                                        <div class="col-lg-8">
                                            <div class="p-5"
                                                style="background-color: lightsalmon; border-radius: 15px 0 0 15px;height: 100%;">
                                                <div class="d-flex justify-content-between align-items-center mb-5">
                                                    <h1 class="fw-bold mb-0 text-black">Shopping Cart</h1>
                                                    <h6 class="mb-0 text-muted">3 items</h6>
                                                </div>
                                                <hr class="my-4">
                                                @foreach ($cart as $item)
                                                <div class="row mb-4 d-flex justify-content-between align-items-center">
                                                    <div class="col-md-2 col-lg-2 col-xl-2">
                                                        <img src="{{ url('storage') . '/' . $item->product->image }}" class="img-fluid rounded-3" alt="Dumbbells">
                                                    </div>
                                                    <div class="col-md-3 col-lg-3 col-xl-3">
                                                        <h6 class="text-muted">{{ $item->product->category->name }}</h6>
                                                        {{-- <h6 class="text-black mb-0">Dumbbells</h6> --}}
                                                    </div>
                                                    <div class="col-md-3 col-lg-3 col-xl-2">
                                                        <div class="d-flex mb-1">
                                                            <button class="btn btn-link px-2"
                                                                onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                                <i class="bi bi-dash"></i>
                                                            </button>
    
                                                            <input id="form1" min="0" width="40px" name="quantity" value="{{ $item->quantity }}" type="number" class="form-control form-control-sm" style="width: 45px" />
    
                                                            <button class="btn btn-link px-2"
                                                                onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                                <i class="bi bi-plus-lg"></i>
                                                            </button>
                                                        </div>
                                                        <div>
                                                            <button class="btn btn-success w-100">Update</button>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                                        <h6 class="mb-0">&#x20B9; {{ $item->price }}</h6>
                                                    </div>
                                                    <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                                        <a href="#!" class="text-muted"><i class="bi bi-x-lg"></i></a>
                                                    </div>
                                                </div>
                                                @endforeach
                                                

                                                {{-- <hr class="my-4">

                                                <div class="row mb-4 d-flex justify-content-between align-items-center">
                                                    <div class="col-md-2 col-lg-2 col-xl-2">
                                                        <img src="./images/dumbbell.jpeg" class="img-fluid rounded-3"
                                                            alt="Dumbbells">
                                                    </div>
                                                    <div class="col-md-3 col-lg-3 col-xl-3">
                                                        <h6 class="text-muted">Weights</h6>
                                                        <h6 class="text-black mb-0">Dumbbells</h6>
                                                    </div>
                                                    <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                                        <button class="btn btn-link px-2"
                                                            onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                            <i class="fas fa-minus"></i>
                                                        </button>

                                                        <input id="form1" min="0" name="quantity" value="1"
                                                            type="number" class="form-control form-control-sm">

                                                        <button class="btn btn-link px-2"
                                                            onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                            <i class="fas fa-plus"></i>
                                                        </button>
                                                    </div>
                                                    <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                                        <h6 class="mb-0">&#x20B9; 44.00</h6>
                                                    </div>
                                                    <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                                        <a href="#!" class="text-muted"><i class="fas fa-times"></i></a>
                                                    </div>
                                                </div>

                                                <hr class="my-4">

                                                <div class="row mb-4 d-flex justify-content-between align-items-center">
                                                    <div class="col-md-2 col-lg-2 col-xl-2">
                                                        <img src="./images/dumbbell.jpeg" class="img-fluid rounded-3"
                                                            alt="Dumbbells">
                                                    </div>
                                                    <div class="col-md-3 col-lg-3 col-xl-3">
                                                        <h6 class="text-muted">Weights</h6>
                                                        <h6 class="text-black mb-0">Dumbbells</h6>
                                                    </div>
                                                    <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                                        <button class="btn btn-link px-2"
                                                            onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                            <i class="fas fa-minus"></i>
                                                        </button>

                                                        <input id="form1" min="0" name="quantity" value="1"
                                                            type="number" class="form-control form-control-sm" />

                                                        <button class="btn btn-link px-2"
                                                            onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                            <i class="fas fa-plus"></i>
                                                        </button>
                                                    </div>
                                                    <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                                        <h6 class="mb-0">&#x20B9; 44.00</h6>
                                                    </div>
                                                    <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                                        <a href="#!" class="text-muted"><i class="fas fa-times"></i></a>
                                                    </div>
                                                </div> --}}

                                                <hr class="my-4">

                                                <div class="pt-3">
                                                    <a href="{{ route('shop') }}" class="btn btn-dark btn-block btn-m"><i class="fas fa-long-arrow-alt-left me-2"></i>Back to shop</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 bg">
                                            <div class="p-5">
                                                <h3 class="fw-bold mb-5 mt-2 pt-1">Summary</h3>
                                                <hr class="my-4">

                                                <div class="d-flex justify-content-between mb-4">
                                                    <h5 class="text-uppercase">items 3</h5>
                                                    <h5>&#x20B9; 132.00</h5>
                                                </div>

                                                <h5 class="text-uppercase mb-3">Shipping</h5>

                                                <div class="mb-4 pb-2">
                                                    <select class="form-control">
                                                        <option value="1">Standard Delivery- &#x20B9; 50.00</option>
                                                        <option value="2">Free Delivery - Delayed</option>
                                                    </select>
                                                </div>

                                                <hr class="my-4">

                                                <div class="d-flex justify-content-between mb-5">
                                                    <h5 class="text-uppercase">Total price</h5>
                                                    <h5>&#x20B9; 182.00</h5>
                                                </div>

                                                <button type="button" class="btn btn-dark btn-block btn-lg w-100">Continue to Checkout</button>

                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection