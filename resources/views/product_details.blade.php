@extends('layouts.mainLayout')

@section('title', 'Product Details')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/product.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
@endpush

@section('content')
{{-- Product Details --}}
<div class="card-product py-3 px-5">
    <div class="row justify-content-center align-items-center">
        <!-- Product Image -->
        <div class="col-lg-6 d-flex justify-content-center align-items-center mt-3">
            <div class="left">
                <img src="{{ asset('images/dumbbell.jpeg') }}" id="imgs" alt="dumbbel image">
            </div>
        </div>
        <!-- Product Info -->
        <div class="col-lg-6 d-flex justify-content-center align-items-center mt-3">
            <div class="right">
                <h1 class="mb-3">T-ReX Adjustable Dumbbell Kit – Dark Knight Edition</h1>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <h1 class="mt-3">₹6,950 – ₹58,658</h1>

                <p>Price exclusive of Shipping</p>
                <h3 class="mb-3">Why these Adjustable Dumbbells?</h3>
                <p class="mb-3">Worried about buying more weights as you are getting stronger & stronger?
                    T-ReX Adjustable Dumbbells Set is a versatile, space-saving, extendable & budgetary training
                    gear, an alternative to storing a complete set of traditional dumbbells in your home gym. It has
                    been built to enable you to make precision, custom weight adjustments in your dumbbell training.
                    The Dumbbells give you an isometric advantage and can be adjusted in smaller increments i.e.
                    2.5Kg so you can progress more naturally.

                    The best thing about BullrocK T-ReX Kit is, you can get started with the basic kit or pro kit
                    and buy extension kits later as your strength progress.</p>

                <button class="bttn bttn-primary">Add to cart</button>
            </div>
        </div>
    </div>
</div>
<!-- Review Section -->
<div class="container">
    <div class="col-md-12">
        <div class="offer-dedicated-body-left">
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade active show" id="pills-reviews" role="tabpanel"
                    aria-labelledby="pills-reviews-tab">
                    {{-- Review Form --}}
                    <div class="bg-white rounded shadow-sm p-4 mb-5 rating-review-select-page">
                        <h5 class="mb-4 text-dark">Review this Product</h5>
                        <p class="mb-2 text-muted">Rate the Place</p>
                        <div class="mb-4">
                            <span class="star-rating">
                                <a href="#"><i class="bi bi-star text-warning"></i></a>
                                <a href="#"><i class="bi bi-star text-warning"></i></a>
                                <a href="#"><i class="bi bi-star text-warning"></i></a>
                                <a href="#"><i class="bi bi-star text-warning"></i></a>
                                <a href="#"><i class="bi bi-star text-warning"></i></a>
                            </span>
                        </div>
                        <form>
                            <div class="form-group mb-3">
                                <label class="form-label text-dark">Your Review</label>
                                <textarea class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-success btn-sm" type="button">Submit Review</button>
                            </div>
                        </form>
                    </div>
                    {{-- User Reviews --}}
                    <div class="bg-white rounded shadow-sm p-4 mb-4 restaurant-detailed-ratings-and-reviews">
                        <h5 class="mb-1 text-dark">Product Ratings and Reviews</h5>
                        <div class="reviews-members pt-4 pb-4">
                            <div class="media">
                                <div class="media-body">
                                    <div class="d-flex align-items center gap-3">
                                        <a href="#">
                                            <img alt="Generic placeholder image"
                                                src="http://bootdey.com/img/Content/avatar/avatar1.png"
                                                class="mr-3 rounded-pill">
                                        </a>
                                        <div class="reviews-members-header">
                                            <h6 class="mb-0"><a class="text-black text-decoration-none" href="#">Singh
                                                    Osahan</a></h6>
                                            <small class="text-muted">Tue, 20 Mar 2020</small>
                                        </div>
                                    </div>
                                    <div class="reviews-members-body">
                                        <div>
                                            <span class="star-rating float-right">
                                                <a href="#"><i class="bi bi-star text-warning"></i></a>
                                                <a href="#"><i class="bi bi-star text-warning"></i></a>
                                                <a href="#"><i class="bi bi-star text-warning"></i></a>
                                                <a href="#"><i class="bi bi-star text-warning"></i></a>
                                                <a href="#"><i class="bi bi-star text-warning"></i></a>
                                            </span>
                                        </div>
                                        <p class="text-secondary">Contrary to popular belief, Lorem Ipsum is not simply
                                            random text. It has roots in a piece of classical Latin literature from 45
                                            BC, making it over 2000 years old. Richard McClintock, a Latin professor at
                                            Hampden-Sydney College in Virginia, looked up one of the more obscure Latin
                                            words, consectetur, from a Lorem Ipsum passage, and going through the cites
                                            of the word in classical literature, discovered the undoubtable source.
                                            Lorem Ipsum comes from sections </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <a class="text-center w-100 d-block mt-4 font-weight-bold text-decoration-none" href="#">See All
                            Reviews</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection