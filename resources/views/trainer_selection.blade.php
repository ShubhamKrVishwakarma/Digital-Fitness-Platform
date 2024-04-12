@extends('layouts.mainLayout')

@section('title', 'Select a Trainer')

@push('styles')
<style>
    .team3 {
        color: #8d97ad;
        font-weight: 300;
    }

    .team3 h1,
    .team3 h2,
    .team3 h3,
    .team3 h4,
    .team3 h5,
    .team3 h6 {
        color: #3e4555;
    }

    .team3 .font-weight-medium {
        font-weight: 500;
    }

    .team3 .bg-light {
        background-color: #f4f8fa !important;
    }

    .team3 .subtitle {
        color: #8d97ad;
        line-height: 24px;
        font-size: 13px;
    }

    .team3 ul {
        margin-top: 30px;
    }

    .team3 h5 {
        line-height: 22px;
        font-size: 18px;
    }

    .team3 ul li a {
        color: #8d97ad;
        padding-right: 15px;
        -webkit-transition: 0.1s ease-in;
        -o-transition: 0.1s ease-in;
        transition: 0.1s ease-in;
    }

    .team3 ul li a:hover {
        -webkit-transform: translate3d(0px, -5px, 0px);
        transform: translate3d(0px, -5px, 0px);
        color: #316ce8;
    }

    .team3 .title {
        margin: 30px 0 0 0;
    }

    .team3 .subtitle {
        margin: 0 0 20px 0;
        font-size: 13px;
    }
</style>
@endpush

@section('content')
<div class="py-5 team3 bg-light">
    <div class="container">
        <div class="row justify-content-center mb-4">
            <div class="col-md-7 text-center">
                <h3 class="mb-3">Experienced & Professional Team</h3>
                <h6 class="subtitle font-weight-normal">You can relay on our amazing features list and also our customer
                    services will be great experience for you without doubt and in no-time</h6>
            </div>
        </div>
        <div class="row">
            <!-- column  -->
            <div class="col-lg-4 mb-4">
                <!-- Row -->
                <div class="row">
                    <div class="col-md-12">
                        <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/team/t1.jpg"
                            alt="wrapkit" class="img-fluid" />
                    </div>
                    <div class="col-md-12">
                        <div class="pt-2">
                            <h5 class="mt-4 font-weight-medium mb-0">Michael Doe</h5>
                            <h6 class="subtitle">Property Specialist</h6>
                            <p>You can relay on our amazing features list and also our customer services will be great
                                experience.</p>
                            <ul class="list-inline">
                                <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i
                                            class="icon-social-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i
                                            class="icon-social-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i
                                            class="icon-social-instagram"></i></a></li>
                                <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i
                                            class="icon-social-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Row -->
            </div>
            <!-- column  -->
            <!-- column  -->
            <div class="col-lg-4 mb-4">
                <!-- Row -->
                <div class="row">
                    <div class="col-md-12 pro-pic">
                        <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/team/t2.jpg"
                            alt="wrapkit" class="img-fluid" />
                    </div>
                    <div class="col-md-12">
                        <div class="pt-2">
                            <h5 class="mt-4 font-weight-medium mb-0">Michael Doe</h5>
                            <h6 class="subtitle">Property Specialist</h6>
                            <p>You can relay on our amazing features list and also our customer services will be great
                                experience.</p>
                            <ul class="list-inline">
                                <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i
                                            class="icon-social-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i
                                            class="icon-social-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i
                                            class="icon-social-instagram"></i></a></li>
                                <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i
                                            class="icon-social-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Row -->
            </div>
            <!-- column  -->
            <!-- column  -->
            <div class="col-lg-4 mb-4">
                <!-- Row -->
                <div class="row">
                    <div class="col-md-12 pro-pic">
                        <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/team/t3.jpg"
                            alt="wrapkit" class="img-fluid" />
                    </div>
                    <div class="col-md-12">
                        <div class="pt-2">
                            <h5 class="mt-4 font-weight-medium mb-0">Michael Doe</h5>
                            <h6 class="subtitle">Property Specialist</h6>
                            <p>You can relay on our amazing features list and also our customer services will be great
                                experience.</p>
                            <ul class="list-inline">
                                <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i
                                            class="icon-social-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i
                                            class="icon-social-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i
                                            class="icon-social-instagram"></i></a></li>
                                <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i
                                            class="icon-social-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Row -->
            </div>
            <!-- column  -->
        </div>
    </div>
</div>
@endsection