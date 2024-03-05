@extends('layouts.formLayout')

@section('title')
    Trainer Registration
@endsection

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
                <div class="col-xl-8 col-lg-9 col-md-10 mx-auto">
                    <div class="card z-index-0">
                        <div class="card-header text-center pt-3 pb-0">
                            <h4 class="m-0">Join as a Trainer</h4>
                        </div>
                        <div class="card-body">
                            <form id="registerForm">
                                <div id="trainer-first-form">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h6>Personal Details</h6>
                                        </div>
                                        <div class="col-md-4 mb-2">
                                            <label for="name" class="form-label">Full Name</label>
                                            <input type="text" class="form-control" name="name" id="name" placeholder="Full Name" required>
                                            <span class="text-danger d-block ms-1 mt-1" id="register-name-error"></span>
                                        </div>
                                        <div class="col-md-4 mb-2">
                                            <label for="email" class="form-label">Email Address</label>
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Email Address" required>
                                            <span class="text-danger d-block ms-1 mt-1" id="register-email-error"></span>
                                        </div>
                                        <div class="col-md-4 mb-2">
                                            <label for="dob" class="form-label">Date of Birth</label>
                                            <input type="date" class="form-control" name="dob" id="dob" placeholder="Date Of Birth" required>
                                            <span class="text-danger d-block ms-1 mt-1" id="register-dob-error"></span>
                                        </div>
                                        <div class="col-md-4 mb-2">
                                            <label for="phone" class="form-label">Phone Number</label>
                                            <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone Number" required>
                                            <span class="text-danger d-block ms-1 mt-1" id="register-phone-error"></span>
                                        </div>
                                        <div class="col-md-4 mb-2">
                                            <label for="gender" class="form-label">Gender</label>
                                            <select class="form-control" name="gender" id="gender" required>
                                                <option value="" disabled selected>Select Gender</option>
                                                <option value="M">Male</option>
                                                <option value="F">Female</option>
                                                <option value="O">Others</option>
                                            </select>
                                            <span class="text-danger d-block ms-1 mt-1" id="register-gender-error"></span>
                                        </div>
                                        <div class="col-md-4 mb-2">
                                            <label for="occupation" class="form-label">Occupation</label>
                                            <input type="text" class="form-control" name="occupation" id="occupation" placeholder="Enter Occupation" required>
                                            <span class="text-danger d-block ms-1 mt-1" id="register-occupation-error"></span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h6>Professional Information</h6>
                                        </div>
                                        <div class="col-md-4 mb-2">
                                            <label for="certificate_id" class="form-label">Certificate ID</label>
                                            <input type="text" class="form-control" name="certificate_id" id="certificate_id" placeholder="Certificate ID" required>
                                            <span class="text-danger d-block ms-1 mt-1" id="register-certificate-id-error"></span>
                                        </div>
                                        <div class="col-md-4 mb-2">
                                            <label for="issue_date" class="form-label">Issued Date</label>
                                            <input type="date" class="form-control" name="issue_date" id="issue_date" placeholder="Issued Date" required>
                                            <span class="text-danger d-block ms-1 mt-1" id="register-issue-date-error"></span>
                                        </div>
                                        <div class="col-md-4 mb-2">
                                            <label for="expiry_date" class="form-label">Expiry Date</label>
                                            <input type="date" class="form-control" name="expiry_date" id="expiry_date" placeholder="Expiry Date" required>
                                            <span class="text-danger d-block ms-1 mt-1" id="register-expiry-date-error"></span>
                                        </div>
                                        <div class="col-md-4 mb-2">
                                            <label for="issued_authority" class="form-label">Issued Authority</label>
                                            <input type="text" class="form-control" name="issued_authority" id="issued_authority" placeholder="Issued Authority" required>
                                            <span class="text-danger d-block ms-1 mt-1" id="register-issued-authority-error"></span>
                                        </div>
                                        <div class="col-md-4 mb-2">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                                            <span class="text-danger d-block ms-1 mt-1" id="register-password-error"></span>
                                        </div>
                                        <div class="col-md-4 mb-2">
                                            <label for="confirm_password" class="form-label">Confirm Password</label>
                                            <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Confirm Password" required>
                                            <span class="text-danger d-block ms-1 mt-1" id="register-confirm-password-error"></span>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-md-12">
                                            <button class="btn btn-sm btn-dark m-0">Register as Trainer</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection