@extends('layouts.mainLayout')

@section('title', 'My Messages')

@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('css/message.css') }}">
@endpush

@section('content')
<div class="container py-4">
    <div class="content-wrapper">
        <div class="row gutters">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card m-0">
                    <div x-data="{hideMessages : true, showMessages : false}" class="row no-gutters">
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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection