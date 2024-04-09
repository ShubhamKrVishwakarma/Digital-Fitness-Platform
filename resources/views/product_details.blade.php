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
                    <img src="{{ $product->getProductUrl() }}" id="imgs" alt="dumbbel image">
                </div>
            </div>
            <!-- Product Info -->
            <div class="col-lg-6 d-flex justify-content-center align-items-center mt-3">
                <div class="right">
                    <h1 class="mb-3">{{ $product->name }}</h1>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <h1 class="mt-3">₹{{ $product->price }} </h1>

                    <h3 class="mb-3">Product Info</h3>
                    <p class="mb-3">{{ $product->description }}</p>

                    <a href="{{route('addToCart',$product->id)}}" class="bttn bttn-primary">Add to cart</a>
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
                            <form action="{{ route('product.review') }}" method="post">
                                @csrf
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
                                    <button id="submit-Review-btn" class="btn btn-success btn-sm" type="submit">Submit Review</button>
                                </div>
                            </form>
                        </div>
                        {{-- User Reviews --}}
                        <div class="bg-white rounded shadow-sm p-4 mb-4 restaurant-detailed-ratings-and-reviews">
                            <h5 class="mb-1 text-dark">Product Ratings and Reviews</h5>
                            <div class="reviews-members pt-4 pb-4">
                                @forelse ($product->reviews as $review)
                                <div class="media">
                                    <div class="media-body">
                                        <div class="d-flex align-items center gap-3">
                                            <a href="#">
                                                <img alt="Generic placeholder image"
                                                    src="http://bootdey.com/img/Content/avatar/avatar1.png"
                                                    class="mr-3 rounded-pill">
                                            </a>
                                            <div class="reviews-members-header">
                                                <h6 class="mb-0"><a class="text-black text-decoration-none" href="{{ route('user.show', $review->user->id ) }}">{{ $review->user->name }}</a></h6>
                                                <small class="text-muted">{{$review->created_at->diffForHumans()}}</small>
                                            </div>
                                        </div>
                                        <div class="reviews-members-body">
                                            <div>
                                                <span class="star-rating float-right text-dark">
                                                    <i class="bi bi-star-fill text-warning fs-4"></i>
                                                    {{ $review->rating }}
                                                </span>
                                            </div>
                                            <p class="text-secondary">{{$review->review}}</p>
                                        </div>
                                    </div>
                                </div>
                                @empty
                                    <div class="media">
                                        <h6 class="text-center text-dark">No Reviews Found for this Product</h6>
                                    </div>
                                @endforelse
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

@push('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function() {
    const stars = document.querySelectorAll('.star');
    const ratingInput = document.querySelector('#product-review');
    const submitBtn = document.querySelector('#submit-Review-btn');
    let rating = document.querySelector('#product-rating');

    let ratingValue = 0;
    let trainer = document.querySelector("#product-id");

    // Function to highlight stars up to the hovered/clicked star
    function highlightStars(index) {
        stars.forEach((star, idx) => {
            if (idx <= index) {
                star.classList.remove('bi-star');
                star.classList.add('bi-star-fill');
            } else {
                star.classList.remove('bi-star-fill');
                star.classList.add('bi-star');
            }
        });
    }

    // Event listener for mouseover to highlight stars
    stars.forEach((star, index) => {
        star.addEventListener('mouseover', () => {
            highlightStars(index);
        });
    });

    // Event listener for mouseout to reset stars
    document.querySelector('.star-rating').addEventListener('mouseout', () => {
        highlightStars(ratingValue - 1);
    });

    // Event listener for click to set the rating value
    stars.forEach((star, index) => {
        star.addEventListener('click', () => {
            ratingValue = index + 1;
            ratingInput.value = ''; // Clear any previous text in the textarea
            highlightStars(index);
            rating.value=ratingValue;
        });
    });

    // Event listener for form submission
    submitBtn.addEventListener('click', () => {
        const review = ratingInput.value.trim();
        if (review === '') {
            alert('Please provide a review.');
            return;
        }

    });
});
</script>
@endpush