@extends('layouts.formLayout')

@section('title', 'Fashion Hub - Trainer Registration')

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
                                            <label class="form-label-control">Full Name</label>
                                            <input type="text" id="register-name" class="form-control" placeholder="Full Name" required>
                                            <span class="text-danger" id="register-name-error"></span>
                                        </div>
                                        <div class="col-md-4 mb-2">
                                            <label class="form-label-control">Email Address</label>
                                            <input type="email" id="register-email" class="form-control" placeholder="Email Address" required>
                                            <span class="text-danger" id="register-email-error"></span>
                                        </div>
                                        <div class="col-md-4 mb-2">
                                            <label class="form-label-control">Date of Birth</label>
                                            <input type="date" id="register-dob" class="form-control" placeholder="Date Of Birth" required>
                                            <span class="text-danger" id="register-dob-error"></span>
                                        </div>
                                        <div class="col-md-4 mb-2">
                                            <label class="form-label-control">Phone Number</label>
                                            <input type="number" id="register-phone" class="form-control" placeholder="Phone Number" required>
                                            <span class="text-danger" id="register-phone-error"></span>
                                        </div>
                                        <div class="col-md-4 mb-2">
                                            <label class="form-label-control">Gender</label>
                                            <select id="register-gender" class="form-control" required>
                                                <option value="" selected>Select Gender</option>
                                                <option value="M">Male</option>
                                                <option value="F">Female</option>
                                                <option value="O">Others</option>
                                            </select>
                                            <span class="text-danger" id="register-gender-error"></span>
                                        </div>
                                        <div class="col-md-4 mb-2">
                                            <label class="form-label-control">Occupation</label>
                                            <input type="text" id="register-occupation" class="form-control" placeholder="Enter Occupation" required>
                                            <span class="text-danger" id="register-occupation-error"></span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h6>Professional Information</h6>
                                        </div>
                                        <div class="col-md-4 mb-2">
                                            <label class="form-label-control">Certificate ID</label>
                                            <input type="text" id='register-certificate-id' class="form-control" placeholder="Certificate ID" required>
                                            <span class="text-danger" id="register-certificate-id-error"></span>
                                        </div>
                                        <div class="col-md-4 mb-2">
                                            <label class="form-label-control">Issued Date</label>
                                            <input type="date" id='register-issue-date' class="form-control" placeholder="Issued Date" required>
                                            <span class="text-danger" id="register-issue-date-error"></span>
                                        </div>
                                        <div class="col-md-4 mb-2">
                                            <label class="form-label-control">Expiry Date</label>
                                            <input type="date" id='register-expiry-date' class="form-control" placeholder="Expiry Date" required>
                                            <span class="text-danger" id="register-expiry-date-error"></span>
                                        </div>
                                        <div class="col-md-4 mb-2">
                                            <label class="form-label-control">Issued Authority</label>
                                            <input type="text" id='register-issued-authority' class="form-control" placeholder="Issued Authority" required>
                                            <span class="text-danger" id="register-issued-authority-error"></span>
                                        </div>
                                        <div class="col-md-4 mb-2">
                                            <label class="form-label-control">Password</label>
                                            <input type="password" id="register-password" class="form-control" placeholder="Password" required>
                                            <span class="text-danger" id="register-password-error"></span>
                                        </div>
                                        <div class="col-md-4 mb-2">
                                            <label class="form-label-control">Confirm Password</label>
                                            <input type="password" id="register-confirm-password" class="form-control" placeholder="Confirm Password" required>
                                            <span class="text-danger" id="register-confirm-password-error"></span>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-sm btn-dark m-0">Register as Trainer</button>
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

@push('scripts')
<script>
    document.addEventListener('success', function () {
        Swal.fire({
                title: 'Success..',
                text: 'Our Team will you reach you soon. After Verifing your Details!',
                icon: 'success',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'OK'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = 'http://127.0.0.1:8000/';
            }
        });
    });

    document.addEventListener('error', function () {
        Swal.fire({
            icon: 'error',
            title: 'Error!',
            text: 'Server Timeout!',
        });
    });
</script>    
@endpush