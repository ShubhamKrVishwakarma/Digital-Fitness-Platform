@extends('layouts.mainLayout')

@section('title', 'Shop')

@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="{{ asset('css/shop.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
@endpush

@section('content')
    <div class="container-fluid p-4">
    <div class="row p-4 text-center">
      <h1 class="mb-3">FITNESS STORE</h1>
      <p>Shop top-tier gym gear for peak performance and style. Elevate your workout with quality equipment.</p>
    </div>
    <div class="row py-md-2 px-md-4">

      <!-- Left Side -->
      <div class="col-lg-3 p-3">
        <h2 class="ms-1 mb-4">Filter</h2>

        <!-- Filter Dropdowns -->
        <div class="list-group list-group-radio d-grid gap-2 border-0">
          <div class="position-relative">
            <label class="list-group-item py-3 pe-5 d-flex align-items-center justify-content-between" for="listGroupRadioGrid1">
              <strong class="fw-semibold">Protine</strong>
              <input class="form-check-input" type="radio" name="listGroupRadioGrid" id="listGroupRadioGrid1" value="" checked="">
            </label>
          </div>
          <div class="position-relative">
            <label class="list-group-item py-3 pe-5 d-flex align-items-center justify-content-between" for="listGroupRadioGrid2">
              <strong class="fw-semibold">Creatine</strong>
              <input class="form-check-input" type="radio" name="listGroupRadioGrid" id="listGroupRadioGrid2" value="" checked="">
            </label>
          </div>
          <div class="position-relative">
            <label class="list-group-item py-3 pe-5 d-flex align-items-center justify-content-between" for="listGroupRadioGrid3">
              <strong class="fw-semibold">T-shirts</strong>
              <input class="form-check-input" type="radio" name="listGroupRadioGrid" id="listGroupRadioGrid3" value="" checked="">
            </label>
          </div>
          <div class="position-relative">
            <label class="list-group-item py-3 pe-5 d-flex align-items-center justify-content-between" for="listGroupRadioGrid4">
              <strong class="fw-semibold">Caps</strong>
              <input class="form-check-input" type="radio" name="listGroupRadioGrid" id="listGroupRadioGrid4" value="" checked="">
            </label>
          </div>
        </div>
        
        
      
        
      </div>

      <!-- Right Side -->
      <div class="col-lg-9 p-3">

        <!-- Search Container -->
        <div class="input-group px-1 px-md-3 py-1">
          <input type="search" class="form-control" placeholder="Search by Product's Name or Category Name...">
          <button class="btn btn-success" type="button" id="button-addon2">Search</button>
        </div>

        <!-- Products -->
        <div class="row justify-content-center align-items-center flex-wrap">

        @foreach ($products as $item)
            
          <!-- Single Product -->
          <div class="product" >
            <div class="product-content">
              <div class="product-img">
                <a href="{{ route('product.details', $item->id) }}"><img src="{{$item->getProductUrl()}}" alt="product image" /></a>
              </div>
              <div class="product-btns d-flex justify-content-center align-items-center">
                <a href="{{route('addToCart',$item->id)}}" class="btn btn-cart">
                  add to cart
                  {{-- <span><i class="fa-solid fa-plus"></i></span> --}}
                </a>
                {{-- <button type="button" class="btn-buy">
                  buy now
                  <span><i class="fas fa-shopping-cart"></i></span>
                </button> --}}
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
              <a href="#" class="product-name">{{ substr($item->name, 0, 15) }}...</a>
              <p class="product-price"><i class="bi bi-currency-rupee"></i></p>
              <p class="product-price">{{ $item->price }}</p>
            </div>

            {{-- <div class="off-info">
              <h2 class="sm-title">25% off</h2>
            </div> --}}
          </div>

        @endforeach
        </div>

      </div>

    </div>
  </div>
@endsection
