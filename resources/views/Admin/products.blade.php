@extends('layouts.adminLayout')

@section('title', 'Products') 

@section('content')
<div x-data="{productsTable : true, addProduct : false, manageProduct : false}" class="container-fluid py-4">
    <!-- Products Table -->
    @livewire('Admin.Product.ProductsTable')
    <!-- Add Product -->
    @livewire('Admin.Product.AddProduct')
    <!-- Manage Product -->
    @livewire('Admin.Product.ManageProduct')
</div>
@endsection

@push('scripts')
<script>
    document.addEventListener('addProduct-success', function () {
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: 'A Product Added Successfully!',
        });
    });

    document.addEventListener('error', function () {
        Swal.fire({
            icon: 'error',
            title: 'Error!',
            text: 'Server Timeout!',
        });
    });
</script>
@endpush