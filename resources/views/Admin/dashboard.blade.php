@extends('layouts.adminLayout')

@section('title', 'Dashboard')

@section('content')
<div x-data="{reviewsTable : true, manageReviews : false}" class="container-fluid py-4">
    {{-- Website Counters --}}
    @livewire('Admin.Dashboard.SiteInfo')
    {{-- Reviews --}}
    @livewire('Admin.Dashboard.ReviewsTable')
    {{-- Mnage Reviews --}}
    @livewire('Admin.Dashboard.ManageReview')
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