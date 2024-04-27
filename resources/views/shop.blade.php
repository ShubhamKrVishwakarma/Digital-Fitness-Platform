@extends('layouts.mainLayout')

@section('title', 'Shop')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/shop.css') }}">
@endpush

@section('content')
<div class="container-fluid overflow-hidden p-0">
    <div class="d-flex flex-column justify-content-center align-items-center p-4 text-center" id="shop-banner">
        <h1 class="text-light fw-bold mb-2">FITNESS HUB STORE</h1>
    </div>
    <div class="row px-3">
        <div class="col-lg-12 p-3">
            <!-- Search Container -->
            <form action="{{ route('shop') }}" method="GET">
                <div class="input-group px-2 px-md-5 py-2">
                    <input type="search" class="form-control" name="search" value="{{ $search ?? "" }}"
                        placeholder="Search by Product's Name or Category Name...">
                    <button class="btn btn-success" type="submit">Search</button>
                </div>
            </form>
            <!-- Products -->
            <div class="row justify-content-center align-items-center flex-wrap">
                @forelse ($products as $product)
                <!-- Single Product -->
                <div class="product">
                    <div class="product-content">
                        <div class="product-img">
                            <a href="{{ route('product.details', $product->id) }}"><img src="{{ $product->getProductUrl() }}" alt="product image" /></a>
                        </div>
                        <div class="product-btns d-flex justify-content-center align-items-center">
                            @auth
                                @if ($product->quantity < 1)
                                    <span class="text-success fw-semibold">Out of Stock</span>
                                @else
                                    @if ($item->isAlreadyInCart($product->id))
                                    <a href="{{ route('cart') }}" class="btn btn-dark bg-success">Go to Cart</a>
                                    @else
                                    <a href="{{ route('addToCart', $product->id) }}" class="btn btn-dark">Add to Cart</a>
                                    @endif
                                @endif
                            @endauth
                            @guest
                                @if ($product->quantity < 1)
                                    <span class="btn text-success fw-semibold">Out of Stock</span>
                                @else
                                    <a href="{{ route('login') }}" class="btn btn-dark">Add to Cart</a>
                                @endif
                            @endguest
                        </div>
                    </div>

                    <div class="product-info">
                        <div class="product-info-top">
                            <h2 class="sm-title"></h2>
                            <div class="rating">
                                <span><i class="bi bi-star-fill"></i></span>
                                <span><i class="bi bi-star-fill"></i></span>
                                <span><i class="bi bi-star-fill"></i></span>
                                <span><i class="bi bi-star-fill"></i></span>
                                <span><i class="bi bi-star-fill"></i></span>
                            </div>
                        </div>
                        <a href="#" class="product-name">{{ substr($product->name, 0, 15) }}...</a>
                        <p class="product-price"><i class="bi bi-currency-rupee"></i></p>
                        <p class="product-price">{{ $product->price }}</p>
                    </div>
                </div>
                @empty
                <div class="d-flex flex-column justify-content-center align-items-center py-4">
                    <h2>No Such Products Found!</h2>
                    <a href="{{ route('shop') }}" class="btn btn-primary">Refresh Products</a>
                </div>
                @endforelse
                <div>
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
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