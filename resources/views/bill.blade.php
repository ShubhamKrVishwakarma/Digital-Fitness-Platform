@extends('layouts.mainLayout')

@section('title', 'Bill')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/message.css') }}">
@endpush

@section('content')
<section class="py-3 py-md-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-lg-9 col-xl-8 col-xxl-7">
        <div class="row gy-3 mb-3">
          <div class="col-6">
            <h2 class="text-uppercase text-endx m-0">Invoice</h2>
          </div>
          <div class="col-6">
            <a class="d-block text-end" href="{{ route('home') }}">
              <img src="{{ asset('images/favicon/favicon.png') }}" class="img-fluid" alt="BootstrapBrain Logo"
                width="135" height="44">
            </a>
          </div>
          <div class="col-12">
            <h4>From</h4>
            <address>
              <strong>Fitness Hub</strong><br>
              <strong>Phone:</strong> +91 9999999999<br>
              <strong>Email:</strong> FitnessHub@gmail.com
            </address>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-12 col-sm-6 col-md-8">
            <h4>Bill To</h4>
            <address>
              <strong>{{ $order->user->name }}</strong><br>
              {{ $order->address }}<br>
              {{ $order->city }}, {{ $order->zip_code }}<br>
              {{ $order->state }}<br>
              Phone: {{ $order->phone }}<br>
              Email: {{ $order->user->email }}
            </address>
          </div>
          <div class="col-12 col-sm-6 col-md-4">
            <h4 class="row">
              <span class="col-6">Invoice</span>
            </h4>
            <div class="row">
              <span class="col-6">Order ID</span>
              <span class="col-6 text-sm-end">#{{ $order->id }}</span>
              <span class="col-6">Invoice Date</span>
              <span class="col-6 text-sm-end">{{ $order->created_at->format('d/m/Y') }}</span>
            </div>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-12">
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col" class="text-uppercase">Qty</th>
                    <th scope="col" class="text-uppercase">Product</th>
                    <th scope="col" class="text-uppercase text-end">Unit Price</th>
                    <th scope="col" class="text-uppercase text-end">Amount</th>
                  </tr>
                </thead>
                <tbody class="table-group-divider">
                  @foreach ($order->orders as $ordered_product)
                    <tr>
                      <th scope="row">{{ $ordered_product->quantity }}</th>
                      <td>{{ $ordered_product->product_name }}</td>
                      <td class="text-end">&#x20b9; {{ $ordered_product->product_price }}</td>
                      <td class="text-end">&#x20b9; {{ $ordered_product->product_price * $ordered_product->quantity }}</td>
                    </tr>
                  @endforeach
                  <tr>
                    <th scope="row" colspan="3" class="text-uppercase text-end">Total</th>
                    <td class="text-end">&#x20b9; {{ $order->amount }}</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection