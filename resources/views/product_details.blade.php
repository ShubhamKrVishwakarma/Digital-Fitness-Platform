@extends('layouts.mainLayout')

@section('title', 'Product Details')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/product.css') }}">
@endpush

@section('content')
    <div class="card-product py-2 px-4">
        <div class="row justify-content-center align-items-center">
            <!-- Product Left (Images) -->
            <div class="col-lg-6 d-flex justify-content-center align-items-center mt-3">
                <div class="left">
                    <img src="{{ $product->getProductUrl() }}" id="imgs" alt="dumbbel image">
                </div>
            </div>
            <!-- Product Right -->
            <div class="col-lg-6 d-flex justify-content-center align-items-center mt-3">
                <div class="right">
                    <h1 class="mb-3">{{ $product->name }}</h1>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <h1 class="mt-3">{{ $product->price }}</h1>

                    <p>Price exclusive of Shipping</p>
                    <h3 class="mb-3">Why these Adjustable Dumbbells?</h3>
                    <p class="mb-3">{{ $product->description }}</p>

                    <button class="btn btn-success">Add to cart</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Review Section -->
    {{-- <div class="bg-white rounded shadow-sm p-4 mb-5 rating-review-select-page">
        <h5 class="mb-4 text-dark">Review this Product</h5>
        <p class="mb-2 text-muted">Rate the Place</p>
        <form method="post">
            <div class="mb-4">
                <span class="star-rating">
                    <input type="hidden" id='product-rating' name="product-rating">
                    <input type="hidden" id='product-id' value="{{ $product->id }}" name="product-id">
                    <i class="star bi bi-star text-warning fs-4" style="cursor: pointer;"></i>
                    <i class="star bi bi-star text-warning fs-4" style="cursor: pointer;"></i>
                    <i class="star bi bi-star text-warning fs-4" style="cursor: pointer;"></i>
                    <i class="star bi bi-star text-warning fs-4" style="cursor: pointer;"></i>
                    <i class="star bi bi-star text-warning fs-4" style="cursor: pointer;"></i>
                </span>
            </div>
            <div class="form-group mb-3">
                <label class="form-label text-dark">Your Review</label>
                <textarea name="product-review" id="product-review" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <button id="submit-Review-btn" type="submit" class="btn btn-success btn-sm">Submit
                    Review</button>
            </div>
        </form>
    </div>
    <div class="bg-white rounded shadow-sm p-4 mb-4 restaurant-detailed-ratings-and-reviews">
        <h5 class="mb-1 text-dark">Product Ratings and Reviews</h5>
        <div class="reviews-members pt-4 pb-4">
            <div class="media">
                <div class="media-body">
                    <div class="d-flex align-items center gap-3">
                        <a href="#">
                            <img alt="Generic placeholder image" src="http://bootdey.com/img/Content/avatar/avatar1.png"
                                class="mr-3 rounded-pill">
                        </a>
                        <div class="reviews-members-header">
                            <h6 class="mb-0"><a class="text-black text-decoration-none"
                                    href="{{ route('user.show', $review->user->id) }}">Test User</a></h6>
                            <small class="text-muted">Test Email</small>
                        </div>
                    </div>
                    <div class="reviews-members-body">
                        <div>
                            <span class="star-rating float-right text-dark">
                                <i class="bi bi-star-fill text-warning fs-4"></i>
                                4
                            </span>
                        </div>
                        <p class="text-secondary">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit
                            aspernatur exercitationem pariatur iusto ab in tempore cum iure maiores rerum, nesciunt
                            dicta, omnis fuga doloribus doloremque officiis! Optio nostrum quos laborum dolorum amet.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <a class="text-center w-100 d-block mt-4 font-weight-bold text-decoration-none" href="#">See All Reviews</a>
    </div> --}}
@endsection

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js"></script>
    <script src="{{ asset('js/contact.js') }}"></script>
@endpush
