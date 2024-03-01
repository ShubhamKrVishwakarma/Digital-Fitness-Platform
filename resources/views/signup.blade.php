@extends('layouts.formLayout')

@section('title') Fitness Hub - Signup @endsection

@section('content')
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3 navbar-transparent mt-4">
        <div class="container">
            <a class="navbar-brand font-weight-bolder fs-5 ms-lg-0 ms-3 text-white" href="{{ route('home') }}">Fitness HUB</a>
            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse"
                data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon mt-2">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navigation">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center me-2 active" href="{{ route('home') }}">
                            <i class="fa-solid fa-house opacity-6 me-1"></i>
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="">
                            <i class="fa-solid fa-cart-shopping opacity-6 me-1"></i>
                            Shop
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="">
                            <i class="fa-solid fa-icons opacity-6 me-1"></i>
                            Community
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="">
                            <i class="fa-solid fa-circle-info opacity-6 me-1"></i>
                            About
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="">
                            <i class="fa-solid fa-file-signature opacity-6 me-1"></i>
                            Contact
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav d-lg-block d-none">
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="btn btn-sm mb-0 me-1 bg-gradient-light">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Main Section -->
    <main class="main-content  mt-0">
        <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg"
            style="background-image: url('https://img.freepik.com/free-photo/dumbbells-set-against-dark-background-floor_60438-3557.jpg?w=1380&t=st=1708407752~exp=1708408352~hmac=5958d83b709212650b3fbc6ae8ec3fb3c85a2ee95f0210bda515dd3fb3c1722e'); background-position: top;">
            <span class="mask bg-gradient-dark opacity-6"></span>
        </div>
        <div class="container">
            <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
                <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
                    <div class="card z-index-0">
                        <div class="card-header text-center pt-4 pb-0">
                            <h5>Create New Account</h5>
                        </div>
                        <div class="card-body">
                            <form enctype="multipart/form-data">
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="Name" required>
                                    <span class="text-danger d-block ms-1 mt-1 fs-6"></span>
                                </div>
                                <div class="mb-3">
                                    <input type="email" class="form-control" placeholder="Email" required>
                                    <span class="text-danger d-block ms-1 mt-1 fs-6"></span>
                                </div>
                                <div class="mb-3">
                                    <input type="password" class="form-control" placeholder="Password" required>
                                    <span class="text-danger d-block ms-1 mt-1 fs-6"></span>
                                </div>
                                <div class="mb-3">
                                    <input type="password" class="form-control" placeholder="Confirm Password" required>
                                    <span class="text-danger d-block ms-1 mt-1 fs-6"></span>
                                </div>
                                <!-- <div class="mb-3">
                                    <input type="file" class="form-control">
                                </div> -->
                                <div class="form-check form-check-info text-start">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"
                                        checked>
                                    <label class="form-check-label" for="flexCheckDefault">
                                        I agree the <a href="javascript:;" class="text-dark font-weight-bolder">Terms
                                            and Conditions</a>
                                    </label>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Create
                                        Account</button>
                                </div>
                                <p class="text-sm text-center mt-3 mb-0">Already have an account? <a href="{{ route('login') }}"
                                        class="text-dark font-weight-bolder">Login</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection