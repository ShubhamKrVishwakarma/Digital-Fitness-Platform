@extends('layouts.adminLayout')

@section('title', 'Community')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/post.css') }}">
@endpush

@section('content')
<div class="container-fluid py-4">
    {{-- Community Info --}}
    @livewire('Admin.Community.CommunityInfo')
    {{-- Post Section --}}
    @livewire('Admin.Community.Posts')
</div>
@endsection

@push('scripts')
<script>
    document.addEventListener('alert', (event) => {
        Swal.fire({
            icon: event.detail.icon,
            title: event.detail.title,
            text: event.detail.text,
        });
    });
</script>
@endpush