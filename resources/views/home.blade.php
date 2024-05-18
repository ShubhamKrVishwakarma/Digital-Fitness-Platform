@extends('layouts.mainLayout')

@section('title', 'Home')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/shop.css') }}">
@endpush

@section('content')
    <section class="container-fluid banner" id="banner-1">
        <video autoplay muted loop plays-inline class="background-clip">
            <source src="{{ asset('videos/fitness_video.webm') }}" type="video/webm">
        </video>
        <div class="content">
            <h4 class="mb-3" data-text="FITNESS_HUB">FITNESS_HUB</h4>
            <h1 class="mb-0 pb-0"><span>MAKE</span> YOUR</h1>
            <h1 class="mb-5">BODY SHAPE</h1>
            <p>
                Fitness that Sticks
                Get started with out Personalized Workouts
            </p>
            <div class="banner-button mt-4">
                <a href="{{ route('workout.plans') }}" class="bttn bttn-primary text-decoration-none">Get Started</a>
            </div>
        </div>
    </section>

    <section class="container-fluid banner animate" id="banner-2">
        <div class="heading">
            <h2>Start Your Fitness Journey.</h2>
            <h4 class="text-dark">With our Pre-Planned Workouts</h4>
        </div>
        <div class="content animate">
            <div class="content-1 animate-2">
                <a href="{{route('workout.plans')}}#beginner">
                    <div class="image">
                        <img src="./images/home/beginner.jpg" alt="">
                        <span>BEGINNER</span>
                    </div>
                </a>
            </div>
            <div class="content-2">
                <a href="{{route('workout.plans')}}#intermediate">
                    <div class="image">
                        <img src="./images/home/intermediate.jpg" alt="">
                        <span>INTERMEDIATE</span>
                    </div>
                </a>
            </div>
            <div class="content-3 animate-3">
                <a href="{{route('workout.plans')}}#advance">
                    <div class="image">
                        <img src="./images/home/advance.jpg" alt="">
                        <span>ADVANCE</span>
                    </div>
                </a>
            </div>
        </div>
        <div class="banner-button">
        <a href="{{route('workout.plans')}}">
            <button class="bttn bttn-primary">Explore more</button>
        </a>
        </div>
    </section>

    <section class="container-fluid animate bg-dark text-dark mb-5" id="banner-7" style="background-image: url('{{ asset('./images/home/bar.jpg') }}');">
        <div>
            <h1 class=" text-center text-white py-3">Our top rated products</h1>
        </div>
        <div class="row px-3 w-100">
            <div class="col-lg-12 p-3">
                <div class="row justify-content-center align-items-center flex-wrap">
                    @forelse ($products as $product)
                        <!-- Single Product -->
                        <div class="product">
                            <div class="product-content">
                                <div class="product-img">
                                    <a href="{{ route('product.details', $product->id) }}"><img src="{{ $product->getProductUrl() }}" alt="product image" /></a>
                                </div>
                                <div class="product-btns d-flex justify-content-center align-items-center">
                                    @if ($product->quantity < 1)
                                        <p class="text-danger fw-semibold mt-4">Out of Stock</p>
                                    @else
                                        @auth
                                            @if ($product->isAlreadyInCart($product->id))
                                                <a href="{{ route('cart') }}" class="btn btn-dark bg-success" style="background-color: #40c9a2!important">Go to Cart</a>
                                            @else
                                                <a href="{{ route('addToCart', $product->id) }}" class="btn btn-dark">Add to Cart</a>
                                            @endif
                                        @endauth
                                        @guest
                                            <a href="{{ route('login') }}" class="btn btn-dark">Add to Cart</a>
                                        @endguest
                                    @endif
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="product-info-top">
                                    <a href="{{ route('product.details', $product->id) }}" class="product-name">{{ substr($product->name, 0, 15) }}...</a>
                                    <div class="rating">
                                        <span><i class="bi bi-star-fill"></i></span>
                                        {{ $product->rating }}
                                    </div>
                                </div>
                                <p class="product-price m-0"><i class="bi bi-currency-rupee"></i></p>
                                <p class="product-price m-0">{{ $product->price }}</p>
                            </div>
                        </div>
                    @empty
                        <div class="d-flex flex-column justify-content-center align-items-center py-4">
                            <h2>No Products Found!</h2>
                            <a href="{{ route('shop') }}" class="btn btn-primary">Refresh Products</a>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
        <div>
            <a href="{{ route('shop') }}">
                <button class="bttn bttn-primary">Show more</button>
            </a>
        </div>
    </section>

    <section class="container-fluid banner animate" id="banner-4">
        <div class="heading pb-sm-5">
            <h2>Our Top rated Trainers</h2>
        </div>
        <div class="content">
        @foreach ($trainers as $trainer)
            <div class="trainer">
                <img src="{{$trainer->getProfileUrl()}}" alt="{{$trainer->name}}" />
                <h3>{{$trainer->name}}</h3>
                <p>
                    {{$trainer->email}}
                </p>

                <a href="{{route('user.show', $trainer->id)}}"><i class="bi bi-box-arrow-right"></i></a>
            </div> 
        @endforeach

        </div>
        <div class="d-flex justify-content-center align-items-center">
            <a href="{{ route('trainers') }}" class="bttn bttn-primary">View All Trainers</a>
        </div>
    </section>

    <section class="container-fluid banner animate" id="banner-5">
        <div class="image">
            <img src="./images/home/community2.jpg" alt="">
        </div>
        <div class="content">
            <div>
                <h1 class="mb-5 display-2">Explore <br>our Community hub</h1>
            </div>
            <div class="banner-button">
                <a href="{{route('community')}}">
                    <button class="bttn bttn-primary">Explore</button>
                </a>
            </div>
        </div>
    </section>

    <section class="container-fluid animate text-dark" id="banner-6">
        <div class="heading">
            <h4 class="text-center">Trusted by
                <span class="fw-bold text-dark">20,000+</span>
                organizations worldwide
            </h4>
        </div>
        <div class="slider">
            <div class="slide-track">
                <div class="slide">
                    <figure class="text-center">
                        <img src="https://block.codescandy.com/assets/images/client-logo/clients-logo-1.svg"
                            alt="logo" />
                    </figure>
                </div>
                <div class="slide">
                    <figure class="text-center">
                        <img src="https://block.codescandy.com/assets/images/client-logo/clients-logo-2.svg"
                            alt="logo" />
                    </figure>
                </div>
                <div class="slide">
                    <figure class="text-center">
                        <img src="https://block.codescandy.com/assets/images/client-logo/clients-logo-3.svg"
                            alt="logo" />
                    </figure>
                </div>
                <div class="slide">
                    <figure class="text-center">
                        <img src="https://block.codescandy.com/assets/images/client-logo/clients-logo-4.svg"
                            alt="logo" />
                    </figure>
                </div>
                <div class="slide">
                    <figure class="text-center">
                        <img src="https://block.codescandy.com/assets/images/client-logo/clients-logo-5.svg"
                            alt="logo" />
                    </figure>
                </div>
                <div class="slide">
                    <figure class="text-center">
                        <img src="https://block.codescandy.com/assets/images/client-logo/clients-logo-1.svg"
                            alt="logo" />
                    </figure>
                </div>
                <div class="slide">
                    <figure class="text-center">
                        <img src="https://block.codescandy.com/assets/images/client-logo/clients-logo-2.svg"
                            alt="logo" />
                    </figure>
                </div>
                <div class="slide">
                    <figure class="text-center">
                        <img src="https://block.codescandy.com/assets/images/client-logo/clients-logo-3.svg"
                            alt="logo" />
                    </figure>
                </div>
                <div class="slide">
                    <figure class="text-center">
                        <img src="https://block.codescandy.com/assets/images/client-logo/clients-logo-4.svg"
                            alt="logo" />
                    </figure>
                </div>
                <div class="slide">
                    <figure class="text-center">
                        <img src="https://block.codescandy.com/assets/images/client-logo/clients-logo-5.svg"
                            alt="logo" />
                    </figure>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script src="{{ asset('js/home.js') }}"></script>
    @if(session('alert'))
    <script>
        Swal.fire({
            position: "center",
            icon: "success",
            title: "{{ session('alert') }}",
            showConfirmButton: false,
            timer: 1200
        });
    </script>
    @endif
@endpush
