@extends("layouts.mainLayout")

@section("title", "Home")

@push("styles")
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
@endpush

@section("content")
    <section class="container-fluid banner text-white" id="banner-1">
        <video autoplay muted loop plays-inline class="background-clip">
          <source src="{{asset("videos/fitness_video.webm")}}" type="video/webm">
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
                <button class="bttn bttn-primary">Get Started</button>
            </div>
        </div>
    </section>

    <section class="container-fluid banner animate text-white" id="banner-2">
        <div class="heading">
            <h2>Start Your Fitness Journey.</h2>
            <h4>With our Pre-Planned Workouts</h4>
        </div>
        <div class="content animate">
            <div class="content-1 animate-2">
                <a href="">
                    <div class="image">
                        <img src="./images/home/beginner.jpg" alt="">
                        <span>BEGINNER</span>
                    </div>
                </a>
            </div>
            <div class="content-2">
                <a href="">
                    <div class="image">
                        <img src="./images/home/intermediate.jpg" alt="">
                        <span>INTERMEDIATE</span>
                    </div>
                </a>
            </div>
            <div class="content-3 animate-3">
                <a href="">
                    <div class="image">
                        <img src="./images/home/advance.jpg" alt="">
                        <span>ADVANCE</span>
                    </div>
                </a>
            </div>
        </div>
        <div class="banner-button">
            <button class="bttn bttn-primary">Explore more</button>
        </div>
    </section>

    <section class="container-fluid banner animate" id="banner-3">
      <div class="image animate">
        <img src="./images/home/bar.jpg" alt="">
      </div>
      <div class="content">
          <h1 class=" mb-5 display-2">SHOP VARIETY OF <br>EQUIPMENTS</h1>
          <!-- <p>
              We are offering variety of gym equipments as well as suppliments to boost your fitness
              journey.
          </p> -->
          <div class="banner-button">
              <button class="bttn bttn-primary">Go to Store</button>
          </div>
      </div>
    </section>

    <section class="container-fluid banner animate text-white" id="banner-4">
        <div class="heading pb-sm-5">
            <h2>Our Top rated Trainers</h2>
        </div>
        <div class="content">
            <div class="trainer">
                <img src="./images/profile.jpg" alt="" />
                <h3>Trainer</h3>
                <p>
                    Checkout profile.
                </p>
                
                <a href="#"><i class="bi bi-box-arrow-right"></i></a>
                {{-- <a href="{{ route('user.show'),['id'=>user->id]}}"><i class="bi bi-box-arrow-right"></i></a> --}}
            </div>

            <div class="trainer">
                <img src="./images/profile.jpg" alt="" />
                <h3>Trainer</h3>
                <p>
                    Checkout profile.
                </p>

                {{-- <a href="{{ route('user.show'),['id'=>user->id]}}"><i class="bi bi-box-arrow-right"></i></a> --}}
                <a href="{{ route('user.show', ['id' => 2]) }}"><i class="bi bi-box-arrow-right"></i></a>
            </div>

            <div class="trainer">
                <img src="./images/home/profile.jpg" alt="" />
                <h3>Trainer</h3>
                <p>
                    Checkout profile.
                </p>
                <a href="{{ route('user.show', ['id' => 1]) }}"><i class="bi bi-box-arrow-right"></i></a>
                {{-- <a href="#"><i class="bi bi-box-arrow-right"></i></a> --}}
                {{-- <a href="{{ route('user.show'),['id'=>user->id]}}"><i class="bi bi-box-arrow-right"></i></a> --}}
            </div>
        </div>
    </section>

    <section class="container-fluid banner animate text-white" id="banner-5">
        <div class="image">
            <img src="./images/home/community2.jpg" alt="">
        </div>
        <div class="content">
            <div>
                <h1 class="mb-5 display-2">Explore <br>our Community hub</h1>
                <!-- <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium debitis at nulla ex? Totam
                    veritatis cumque nihil id pariatur amet dolorem consequatur, inventore quibusdam officiis
                    voluptatibus officia asperiores provident possimus?0</p> -->
            </div>
            <div class="banner-button">
                <button class="bttn bttn-primary">Explore</button>
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
                <img src="https://block.codescandy.com/assets/images/client-logo/clients-logo-1.svg" alt="logo" />
              </figure>
            </div>
            <div class="slide">
              <figure class="text-center">
                <img src="https://block.codescandy.com/assets/images/client-logo/clients-logo-2.svg" alt="logo" />
              </figure>
            </div>
            <div class="slide">
              <figure class="text-center">
                <img src="https://block.codescandy.com/assets/images/client-logo/clients-logo-3.svg" alt="logo" />
              </figure>
            </div>
            <div class="slide">
              <figure class="text-center">
                <img src="https://block.codescandy.com/assets/images/client-logo/clients-logo-4.svg" alt="logo" />
              </figure>
            </div>
            <div class="slide">
              <figure class="text-center">
                <img src="https://block.codescandy.com/assets/images/client-logo/clients-logo-5.svg" alt="logo" />
              </figure>
            </div>
            <div class="slide">
              <figure class="text-center">
                <img src="https://block.codescandy.com/assets/images/client-logo/clients-logo-1.svg" alt="logo" />
              </figure>
            </div>
            <div class="slide">
              <figure class="text-center">
                <img src="https://block.codescandy.com/assets/images/client-logo/clients-logo-2.svg" alt="logo" />
              </figure>
            </div>
            <div class="slide">
              <figure class="text-center">
                <img src="https://block.codescandy.com/assets/images/client-logo/clients-logo-3.svg" alt="logo" />
              </figure>
            </div>
            <div class="slide">
              <figure class="text-center">
                <img src="https://block.codescandy.com/assets/images/client-logo/clients-logo-4.svg" alt="logo" />
              </figure>
            </div>
            <div class="slide">
              <figure class="text-center">
                <img src="https://block.codescandy.com/assets/images/client-logo/clients-logo-5.svg" alt="logo" />
              </figure>
            </div>
          </div>
        </div>
      </section>
@endsection

@push("scripts")
<script src="{{ asset('js/home.js') }}"></script>
@endpush