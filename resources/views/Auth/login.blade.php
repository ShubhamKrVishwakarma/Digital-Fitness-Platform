@extends('layouts.formLayout')

@section('title', 'Fitness Hub - Login')

@push('styles')
<style>
    #registerModal {
        color: #8d97ad;
        font-weight: 300;
    }

    #registerModal h1,
    #registerModal h2,
    #registerModal h3,
    #registerModal h4,
    #registerModal h5,
    #registerModal h6 {
        color: #3e4555;
    }

    #registerModal .card-title {
        font-size: 18px;
    }

    #registerModal .subtitle {
        color: #8d97ad;
        line-height: 24px;
    }

    #registerModal .card.card-shadow {
        -webkit-box-shadow: 0px 0px 30px rgba(115, 128, 157, 0.1);
        box-shadow: 0px 0px 30px rgba(115, 128, 157, 0.1);
    }

    #registerModal .card-img {
        height: 100%;
        width: 100%;
        object-fit: cover;
        object-position: center;
    }

    #registerModal .b-h-box .card-img-overlay {
        bottom: 0px;
        top: auto;
        -webkit-transition: 0.2s ease-in;
        -o-transition: 0.2s ease-in;
        transition: 0.2s ease-in;
        height: 55%;
    }

    #registerModal .b-h-box .card-title {
        color: #ffffff;
    }

    #registerModal .b-h-box {
        color: #ffffff;
    }

    #registerModal .b-h-box .card-text {
        display: none;
    }

    #registerModal .b-h-box:hover {
        color: #8d97ad;
    }

    #registerModal .b-h-box:hover .card-img-overlay {
        height: 100%;
        background: #ffffff;
        border: 3px solid rgba(120, 130, 140, 0.13);
    }

    #registerModal .b-h-box:hover .card-title {
        color: #263238;
        margin: 15px 0;
    }

    #registerModal .b-h-box:hover .card-text {
        display: block;
    }

    #registerModal .bg-danger-gradiant {
        background: #ff4d7e;
        background: -webkit-linear-gradient(legacy-direction(to right),
                #ff4d7e 0%,
                #ff6a5b 100%);
        background: -webkit-gradient(linear,
                left top,
                right top,
                from(#ff4d7e),
                to(#ff6a5b));
        background: -webkit-linear-gradient(left, #ff4d7e 0%, #ff6a5b 100%);
        background: -o-linear-gradient(left, #ff4d7e 0%, #ff6a5b 100%);
        background: linear-gradient(to right, #ff4d7e 0%, #ff6a5b 100%);
    }

    #registerModal .font-14 {
        font-size: 14px;
    }

    @media (max-width: 768px) {
        #registerModal .b-h-box .card-img-overlay {
            height: 40%;
        }
    }
</style>
@endpush

@section('content')
{{-- Modal --}}
<div class="modal fade" id="registerModal">
    <div class="modal-dialog">
        <div class="modal-content bg-dark">
            <div class="modal-header">
                <h1 class="modal-title text-light fs-5" id="exampleModalLabel">Create New Account</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row mb-3">
                    <div class="col-md-12" style="height: 200px">
                        <a href="{{ route('signup') }}"
                            class="card b-h-box position-relative font-14 border-0 mb-4 h-100 w-100">
                            <img class="card-img" src="{{ asset('images/trainer.jpg') }}" alt="Card image">
                            <div class="card-img-overlay overflow-hidden">
                                <div class="d-flex justify-content-center align-items-center">
                                    <span
                                        class="bg-danger-gradiant badge overflow-hidden text-white px-3 py-1 fs-6 font-weight-normal">Fitness
                                        HUB</span>
                                </div>
                                <h2 class="card-title text-center my-3 fs-3 font-weight-normal">Join as a Member</h2>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" style="height: 200px">
                        <a href="{{ route('register') }}"
                            class="card b-h-box position-relative font-14 border-0 mb-4 h-100 w-100">
                            <img class="card-img" src="{{ asset('images/member.jpg') }}" alt="Card image">
                            <div class="card-img-overlay overflow-hidden">
                                <div class="d-flex justify-content-center align-items-center">
                                    <span
                                        class="bg-danger-gradiant badge overflow-hidden text-white px-3 py-1 fs-6 font-weight-normal">Fitness
                                        HUB</span>
                                </div>
                                <h2 class="card-title text-center my-3 fs-3 font-weight-normal">Join as a Trainer</h2>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Navbar -->
<div class="container position-sticky z-index-sticky top-0">
    <div class="row">
        <div class="col-12">
            <!-- Navbar -->
            <nav
                class="navbar navbar-expand-lg blur border-radius-lg top-0 z-index-3 shadow position-absolute mt-4 py-2 start-0 end-0 mx-4">
                <div class="container-fluid">
                    <a class="navbar-brand fs-5 font-weight-bolder ms-lg-0 ms-3 " href="{{ route('home') }}">
                        Fitness HUB
                    </a>
                    <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon mt-2">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </span>
                    </button>
                    <div class="collapse navbar-collapse" id="navigation">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center me-2 active" aria-current="page"
                                    href="{{ route('home') }}">
                                    <i class="fa-solid fa-house opacity-6 text-dark me-1"></i>
                                    Home
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link me-2" href="{{ route('shop') }}">
                                    <i class="fa-solid fa-cart-shopping opacity-6 text-dark me-1"></i>
                                    Shop
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link me-2" href="{{ route('community') }}">
                                    <i class="fa-solid fa-icons opacity-6 text-dark me-1"></i>
                                    Community
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link me-2" href="{{ route('trainers') }}">
                                    <i class="fa-solid fa-circle-info opacity-6 text-dark me-1"></i>
                                    Trainers
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link me-2" href="{{ route('contact') }}">
                                    <i class="fa-solid fa-file-signature opacity-6 text-dark me-1"></i>
                                    Contact
                                </a>
                            </li>
                        </ul>
                        <ul class="navbar-nav d-lg-block d-none">
                            <li class="nav-item">
                                <button class="btn btn-sm mb-0 me-1 btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#registerModal">Create Account</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- Main Section -->
<main class="main-content mt-0">
    <section>
        <div class="page-header min-vh-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
                        <div class="card card-plain">
                            <div class="card-header pb-0 text-start">
                                <h4 class="font-weight-bolder">Welcome Back!</h4>
                                <p class="mb-0">Enter your email and password to Login in</p>
                            </div>
                            <div class="card-body">
                                <form id="loginForm">
                                    <div class="mb-3">
                                        <input type="email" id="login-email" class="form-control form-control-lg" placeholder="Email" minlength="5" maxlength="100" required>
                                        <span class="text-danger" id="login-email-error"></span>
                                    </div>
                                    <div class="mb-3">
                                        <input type="password" id="login-password" class="form-control form-control-lg"
                                            placeholder="Password" minlength="8" maxlength="16" required>
                                        <span class="text-danger" id="login-password-error"></span>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Log
                                            in</button>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                <p class="mb-4 text-sm mx-auto">
                                    Don't have an account?
                                    <a href="{{ route('signup') }}"
                                        class="text-primary text-gradient font-weight-bold">Sign
                                        up</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
                        <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden"
                            style="background-image: url('./images/login.jpg');background-size: cover;">
                            <span class="mask bg-gradient-secondary opacity-4"></span>
                            <h4 class="mt-5 text-white font-weight-bolder position-relative">"Unleash Your Inner
                                Warrior"</h4>
                            <p class="text-white position-relative">Step into the arena of self-improvement, where every
                                workout is a battle and each rep is a victory that brings you closer to the warrior
                                within.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

@push('scripts')
@if(session('alert'))
<script>
      Swal.fire({
        icon: "success",
        title: "Success",
        text: "{{ session('alert') }}"
      });
  </script>
@endif
@endpush