@extends('layouts.adminLayout')

@section('title', 'Category')

@section('content')
<div class="container-fluid py-4">
    <div x-data="{manageCategory : false, addCategory : true}" class="row mt-4">
        <!-- Categories -->
        @livewire('Admin.CategoryList')
        <!-- Manage Category -->
        <div class="col-lg-6 mb-4">
            <!-- Update / Delete Category -->
            @livewire('Admin.ManageCategory')
            <!-- Add Category -->
            @livewire('Admin.AddCategory')
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    document.addEventListener('addCategory-success', function () {
        Swal.fire({
            position: "top",
            icon: "success",
            title: "A New Category Added Successfully!",
            showConfirmButton: false,
            timer: 1200
        });
    });

    document.addEventListener('manageCategory-success', function () {
        Swal.fire({
            position: "top",
            icon: "success",
            title: "Category Name Updated Successfully!",
            showConfirmButton: false,
            timer: 1200
        });
    });
</script>
@endpush