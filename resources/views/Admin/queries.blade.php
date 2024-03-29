@extends('layouts.adminLayout')

@section('title', 'Query')

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/post.css') }}">
@endpush

@section('content')
<div x-data="{queryTable : true, manageQuery : false}" class="container-fluid py-4">
    {{-- Queries Table --}}
    @livewire('Admin.Query.QueriesTable')
    <!-- Reply To Query -->
    @livewire('Admin.Query.ManageQuery')
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