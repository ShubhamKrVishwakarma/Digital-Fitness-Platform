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
                    <div class="row no-gutters">
                        {{-- Left Side --}}
                        @livewire('Chat.ChatList')
                        {{-- Right Side --}}
                        @livewire('Chat.Messages')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection