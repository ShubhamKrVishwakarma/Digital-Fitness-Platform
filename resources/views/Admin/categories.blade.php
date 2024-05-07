@extends('layouts.adminLayout')

@section('title', 'Category')

@section('content')
<div class="container-fluid py-4">
    <div x-data="{manageCategory : false, addCategory : true}" class="row mt-4">
        <!-- Categories -->
        @livewire('Admin.Category.CategoryList')
        <!-- Manage Category -->
        <div class="col-lg-6 mb-4">
            <!-- Update / Delete Category -->
            @livewire('Admin.Category.ManageCategory')
            <!-- Add Category -->
            @livewire('Admin.Category.AddCategory')
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    document.addEventListener('alert', (event) => {
        Swal.fire({
            icon: event.detail.icon,
            title: event.detail.title,
            text: event.detail.text
        });
    });
</script>
@endpush