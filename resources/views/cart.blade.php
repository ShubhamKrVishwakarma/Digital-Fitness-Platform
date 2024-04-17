@extends('layouts.mainLayout')

@section('title', 'Cart')

@push('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="{{ asset('css/cart.css') }}">
@endpush

@section('content')
<section style="background-color: whitesmoke">
    <div class="container py-5">
        <div class="row d-flex justify-content-center align-items-center h-100">
            @if ($cart->count() < 1) <div class="col-12 d-flex justify-content-center align-items-center"
                style="min-height: 500px">
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
                                    <form method="POST" action="{{ route('product.delete.all') }}">
                                        @method("DELETE")
                                        @csrf
                                        <button class="btn btn-danger">Delete All</button>
                                    </form>
                                </div>
                                <hr class="my-4">
                                @php
                                    $total=0;
                                    $quantity=0;
                                @endphp
                                @foreach ($cart as $item)
                                @php
                                    $quantity+=$item->quantity;
                                    $total=$total + ($item->price*$item->quantity);
                                @endphp
                                <div class="row mb-4 d-flex justify-content-between align-items-center">
                                    <div class="col-md-2 col-lg-2 col-xl-2">
                                        <img src="{{ $item->product->getProductUrl() }}"
                                            class="img-fluid rounded-3" alt="Dumbbells">
                                    </div>
                                    <div class="col-md-3 col-lg-3 col-xl-3">
                                        <a href="#" class="text-dark text-decoration-none">
                                            {{ $item->product->name }}
                                        </a>
                                    </div>
                                    <div class="col-md-3 col-lg-3 col-xl-2">
                                        <form method="POST" action="{{ route('cart.update', $item->product_id) }}">
                                            @csrf
                                            <div class="d-flex mb-1">
                                                <button type="button" class="btn btn-link px-2"
                                                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                    <i class="bi bi-dash"></i>
                                                </button>

                                                <input id="form1" min="1" max="10" width="45px" name="quantity"
                                                    value="{{ $item->quantity }}" type="number"
                                                    class="form-control form-control-sm" style="width: 45px" />

                                                <button type="button" class="btn btn-link px-2"
                                                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                    <i class="bi bi-plus-lg"></i>
                                                </button>
                                            </div>
                                            <div>
                                                <button type="submit" class="btn btn-sm btn-success w-100">Update</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                        <h6 class="mb-0">&#x20B9; {{ ($item->price*$item->quantity) }}</h6>
                                    </div>
                                    <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                        <form method="POST" action="{{ route('product.delete', $item->product_id) }}">
                                            @method("DELETE")
                                            @csrf
                                            <button class="btn btn-sm btn-danger"><i class="bi bi-x-lg"></i></button>
                                        </form>
                                    </div>
                                </div>
                                @endforeach


                                

                                <hr class="my-4">

                                <div class="pt-3">
                                    <a href="{{ route('shop') }}" class="btn btn-dark btn-block btn-m"><i
                                            class="fas fa-long-arrow-alt-left me-2"></i>Back to shop</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 bg">
                            <div class="p-5">
                                <h3 class="fw-bold mb-5 mt-2 pt-1">Summary</h3>
                                <hr class="my-4">

                                <div class="d-flex justify-content-between mb-4">
                                    <h5 class="text-uppercase">Products: </h5>
                                    <h5>{{ $cart->count() }}</h5>
                                </div>

                                
                                <div class="d-flex justify-content-between mb-4 pb-2" >
                                    <h5 class="text-uppercase mb-3">Quantity: </h5>
                                    <h5>{{ $quantity }}</h5>
                                </div>

                                <hr class="my-4">

                                <div class="d-flex justify-content-between mb-5">
                                    <h5 class="text-uppercase">Total price</h5>
                                    <h5>&#x20B9; {{ $total }}</h5>
                                </div>
                                <a href="{{route('checkout')}}" type="button" class="btn btn-dark btn-block btn-lg w-100">Continue to Checkout</a>

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

@push('scripts')
<script src="{{ asset('plugins/alert.js') }}"></script>
@if(session('alert'))
  <script>
      Swal.fire({
        position: "top",
        icon: "success",
        title: "{{ session('alert') }}",
        showConfirmButton: false,
        timer: 1200
      });
  </script>
@endif
@endpush