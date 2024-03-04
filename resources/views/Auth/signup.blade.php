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
                        <a class="nav-link me-2" href="{{ route('shop') }}">
                            <i class="fa-solid fa-cart-shopping opacity-6 me-1"></i>
                            Shop
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="{{ route('community') }}">
                            <i class="fa-solid fa-icons opacity-6 me-1"></i>
                            Community
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="{{ route('about') }}">
                            <i class="fa-solid fa-circle-info opacity-6 me-1"></i>
                            About
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="{{ route('contact') }}">
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
            <div class="row mt-n12 justify-content-center">
                <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
                    <div class="card z-index-0">
                        <div class="card-header text-center pt-4 pb-0">
                            <h5>Create New Account</h5>
                        </div>
                        <div class="card-body">
                            {{-- Member Signup Form --}}
                            <form id="signupForm">
                                @csrf
                                <div class="mb-3">
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Name" required>
                                    <span class="text-danger d-block ms-1 mt-1" id="signup-name-error"></span>
                                </div>
                                <div class="mb-3">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                                    <span class="text-danger d-block ms-1 mt-1" id="signup-email-error"></span>
                                </div>
                                <div class="mb-2">
                                    <label for="gender" class="form-label">Gender</label>
                                    <select class="form-control" name="gender" id="gender" required>
                                        <option value="" disabled selected>Select Gender</option>
                                        <option value="M">Male</option>
                                        <option value="F">Female</option>
                                        <option value="O">Others</option>
                                    </select>
                                    <span class="text-danger d-block ms-1 mt-1" id="signup-gender-error"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="dob" class="form-label">Date of Birth</label>
                                    <input type="date" class="form-control" name="dob" id="dob" required>
                                    <span class="text-danger d-block ms-1 mt-1" id="signup-dob-error"></span>
                                </div>
                                <div class="mb-3">
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                                    <span class="text-danger d-block ms-1 mt-1" id="signup-password-error"></span>
                                </div>
                                <div class="mb-3">
                                    <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Confirm Password" required>
                                    <span class="text-danger d-block ms-1 mt-1" id="signup-confirm-password-error"></span>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn bg-gradient-dark w-100">Create Account</button>
                                </div>
                                <p class="text-sm text-center mt-1 mb-0">Already have an account? <a href="{{ route('login') }}"
                                        class="text-dark font-weight-bolder">Login</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@push('scripts')
    <script src="{{ asset('auth/signup.js') }}"></script>
@endpush