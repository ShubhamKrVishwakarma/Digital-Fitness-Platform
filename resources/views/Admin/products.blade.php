@extends('layouts.adminLayout')

@section('title', 'Products') 

@section('content')
<div x-data="{productsTable : true, addProduct : false, manageProduct : false}" class="container-fluid py-4">
    <!-- Products Table -->
    @livewire('Admin.Product.ProductsTable')
    <!-- Add Product -->
    @livewire('Admin.Product.AddProduct')
    <!-- Manage Product -->
    <div x-show="manageProduct" style="display: none;">
        <form>
            <div class="row">
                <div class="col-12 d-flex justify-content-between align-items-center mb-3">
                    <h3 class="text-light ms-2 font-weight-bolder">Manage Product</h3>
                    <a class="btn btn-sm btn-dark mb-0 me-4" data-view-product>View All Products</a>
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body mb-3">
                            <div class="col-12 d-flex justify-content-between align-items-center flex-wrap">
                                <h6>Product ID : 2223</h6>
                                <a class="btn btn-sm btn-danger my-2">Delete</a>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="" class="form-label text-uppercase text-secondary">Name</label>
                                <input type="text" class="form-control" placeholder="Product title" required>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="" class="form-label text-uppercase text-secondary">Description</label>
                                <textarea class="form-control" cols="30" rows="5" placeholder="Product Description"
                                    required></textarea>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="" class="form-label text-uppercase text-secondary">Search
                                    Keywords</label>
                                <textarea class="form-control" cols="30" rows="3" placeholder="Product Keywords"
                                    required></textarea>
                            </div>
                            <div class="col-12">
                                <label for="" class="form-label text-uppercase text-secondary">Image</label>
                                <input type="file" class="form-control" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-12 mb-3">
                                <label for="" class="form-label text-uppercase text-secondary">Price</label>
                                <input type="number" class="form-control" placeholder="Product Price" required>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="" class="form-label text-uppercase text-secondary">Quantity</label>
                                <input type="number" class="form-control" required placeholder="Quantity">
                            </div>
                            <div class="col-12 mb-3">
                                <label for="" class="form-label text-uppercase text-secondary">Quantity</label>
                                <select class="form-control" required>
                                    <option value="">Select Category</option>
                                    <option value="">Protien</option>
                                    <option value="">Equipment</option>
                                    <option value="">T-shirt</option>
                                </select>
                            </div>
                            <div class="col-12 mb-3">
                                <button type="submit" class="btn btn-sm btn-success m-0 mt-2">Update</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
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