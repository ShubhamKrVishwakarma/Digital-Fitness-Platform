@extends('layouts.mainLayout')

@section('title', 'My Messages')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/message.css') }}">
@endpush

@section('content')
<div class="container py-4">
    <div class="content-wrapper">
        <div class="row justify-content-center align-items-center gutters">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card m-0">
                    @if (auth()->user()->hasSubscription())
                        <div x-data="{hideMessages : true, showMessages : false, messageDiv : false, imageForm : false, videoForm : false}" class="row no-gutters">
                            {{-- Left Side --}}
                            @livewire('Chat.ChatList')
                            {{-- Right Side --}}
                            @livewire('Chat.Messages')
                            <div x-show="hideMessages" class="col-xl-8 col-lg-8 col-md-8 col-sm-9 col-9">
                                <div style="height: 625px;">
                                    <div class="d-flex flex-column justify-content-center align-items-center h-100 w-100">
                                        <i class="bi bi-messenger" style="font-size: 6rem;"></i>
                                        <p class="fs-4">End-to-End Encryption</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="py-5 bg-light service-25">
                            <div class="container">
                                @if (auth()->user()->role === "member")
                                    <div class="row justify-content-center">
                                        <div class="col-md-12 text-center mb-5"><img src="https://cdn-icons-png.flaticon.com/512/5234/5234307.png" width="200" class="img-fluid" /></div>
                                        <div class="col-md-7 text-center"> <span class="badge badge-success rounded-pill px-3 py-1 font-weight-light">Premium</span>
                                            <h3 class="my-3">🚀 Unlock Premium Access to Your Ultimate Fitness Journey!</h3>
                                            <h6 class="subtitle font-weight-light">We see you're enjoying our platform, but did you know there's a whole world of exclusive content waiting for you with a subscription?</h6>
                                        </div>
                                                    <div class="col-md-12 mt-3 text-center">
                                            <a class="btn btn-success-gradiant btn-md border-0 text-white" href="{{ route('trainers') }}"><span>View Trainers</span></a>
                                        </div>
                                    </div>
                                @else
                                <div class="d-flex flex-column justify-content-center align-items-center" style="height: 300px">
                                    <h2>No Messgaes</h2>
                                    <p>When you have messages</p>
                                    <p>you will see them here</p>
                                </div>
                                @endif
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    <script>
        document.addEventListener('alert', (event) => {
            Swal.fire({
                position: "center",
                icon: event.detail.icon,
                title: event.detail.title,
                text: event.detail.text,
                showConfirmButton: false,
                timer: 1200
            });
        });
    </script>
@endpush