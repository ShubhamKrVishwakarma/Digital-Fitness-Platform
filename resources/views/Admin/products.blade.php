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
    document.addEventListener('alert', (event) => {
        Swal.fire({
            icon: event.detail.icon,
            title: event.detail.title,
            text: event.detail.text,
        });
    });
</script>
@endpush