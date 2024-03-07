@extends('layouts.formLayout')

@section('title', 'Admin Login')

@section('content')
<!-- Main Section -->
<main class="main-content mt-0">
    <section>
        <div class="page-header min-vh-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-auto">
                        <div class="card card-plain">
                            <div class="card-header pb-0 text-center">
                                <h4 class="font-weight-bolder">Welcome Admin!</h4>
                                <p class="mb-0">Enter your credentials to Login in as Admin</p>
                            </div>
                            <div class="card-body">
                                <form id="adminLoginForm">
                                    @csrf
                                    <div class="mb-3">
                                        <input type="text" class="form-control form-control-lg" name="username" id="username" placeholder="Username" required>
                                        <span class="text-danger d-block ms-1 mt-1" id="admin-username-error"></span>
                                    </div>
                                    <div class="mb-3">
                                        <input type="password" class="form-control form-control-lg" name="password" id="password" placeholder="Password" required>
                                        <span class="text-danger d-block ms-1 mt-1" id="admin-password-error"></span>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Authenticate</button>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                <p class="mb-4 text-sm mx-auto">
                                    Want to Login as a User?
                                    <a href="{{ route('login') }}" class="text-primary text-gradient font-weight-bold">Login</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection