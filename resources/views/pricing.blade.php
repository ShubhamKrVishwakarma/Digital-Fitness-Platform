@extends('layouts.mainLayout')

@section('title', 'Trainers Pricing')

@push('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="{{ asset('css/pricing.css') }}">
@endpush

@section('content')
<div class="pricing6 py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <h3 class="mb-3">Choose Your Plan & Unlock Your Best Self</h3>
                <h6 class="subtitle font-weight-normal">We're committed to making your journey to health and wellness not only effective but also enjoyable. That's why we've designed our pricing plans to be as flexible and empowering as your workouts.</h6>
            </div>
        </div>
        <!-- row  -->
        <div class="row mt-4">
            <!-- column  -->
            <div class="col-md-6">
                <div class="card card-shadow border-0 mb-4">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center">
                            <h5 class="font-weight-medium mb-0 me-2">Monthly Plan</h5>
                            <div class="ml-auto"><span class="badge badge-danger font-weight-normal p-2">Popular</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-5 text-center">
                                <div class="price-box my-3">
                                    <sup>&#8377;</sup><span class="text-dark display-5">450</span>
                                    <h6 class="font-weight-light">MONTHLY</h6>
                                    <form action="{{ route('subscription.payment') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="amount" value="450">
                                        <input type="hidden" name="trainer_id" value="{{ $trainer_id }}">
                                        <input type="hidden" name="type" value="monthly">
                                        <button class="btn btn-info-gradiant font-14 border-0 text-white p-3 btn-block mt-3">CHOOSE PLAN </button>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-7 align-self-center">
                                <ul class="list-inline pl-3 font-14 font-weight-medium text-dark">
                                    <li class="py-2"><i class="bi bi-shield-fill-check text-success"></i> <span>5 Days a Week</span></li>
                                    <li class="py-2"><i class="bi bi-shield-fill-check text-success"></i> <span>Dedicated Trainer</span></li>
                                    <li class="py-2"><i class="bi bi-shield-fill-check text-success"></i> <span>Diet Plan Included</span></li>
                                    <li class="py-2"><i class="bi bi-shield-fill-check text-success"></i> <span>Morning and Evening Batches</span></li>
                                    <li class="py-2"><i class="bi bi-shield-fill-check text-success"></i> <span>Discount on Products</span></li>
                                    <li class="py-2"><i class="bi bi-shield-fill-check text-success"></i> <span>Community Interaction</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- column  -->
            <!-- column  -->
            <div class="col-md-6">
                <div class="card card-shadow border-0 mb-4">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center">
                            <h5 class="font-medium m-b-0">Yearly Plan</h5>
                        </div>
                        <div class="row">
                            <div class="col-lg-5 text-center">
                                <div class="price-box my-3">
                                    <sup>&#8377;</sup><span class="text-dark display-5">3,999</span>
                                    <h6 class="font-weight-light">MONTHLY</h6>
                                    <form action="{{ route('subscription.payment') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="amount" value="3999">
                                        <input type="hidden" name="trainer_id" value="{{ $trainer_id }}">
                                        <input type="hidden" name="type" value="yearly">
                                        <button class="btn btn-info-gradiant border-0 font-14 text-white p-3 btn-block mt-3">CHOOSE PLAN </button>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-7 align-self-center">
                                <ul class="list-inline pl-3 font-14 font-weight-medium text-dark">
                                    <li class="py-2"><i class="bi bi-shield-fill-check text-success"></i> <span>5 Days a Week</span></li>
                                    <li class="py-2"><i class="bi bi-shield-fill-check text-success"></i> <span>Dedicated Trainer</span></li>
                                    <li class="py-2"><i class="bi bi-shield-fill-check text-success"></i> <span>Diet Plan Included</span></li>
                                    <li class="py-2"><i class="bi bi-shield-fill-check text-success"></i> <span>Morning and Evening Batches</span></li>
                                    <li class="py-2"><i class="bi bi-shield-fill-check text-success"></i> <span>Discount on Products</span></li>
                                    <li class="py-2"><i class="bi bi-shield-fill-check text-success"></i> <span>Community Interaction</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- column  -->
        </div>
    </div>
</div>
@endsection