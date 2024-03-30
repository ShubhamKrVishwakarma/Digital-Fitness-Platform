@extends('layouts.mainLayout')

@section('title', 'Messages')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/message.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
@endpush

@section('content')
    <div class="container-fluid bg-white chatbox shadow-lg rounded">
        <div x-data="{chatList : true, chatBox : false}" class="row h-100 p-2 p-md-4" style="min-height: 600px">
            {{-- Chat list --}}
            <livewire:ChatList>    
            {{-- chatbox --}}
            <livewire:ChatBox>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('js/message.js') }}"></script>
@endpush
