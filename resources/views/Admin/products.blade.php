@extends('layouts.adminLayout')

@section('title') Products @endsection

@section('content')
<div class="container-fluid py-4">
    <!-- Products Table -->
    <div id="productsTable">
        <div class="row mb-3">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0 d-flex justify-content-between align-items-center flex-wrap">
                        <h6>Products table</h6>
                        <button class="btn btn-sm btn-primary my-1" id="addProductButton">Add Product</button>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center justify-content-center mb-0">
                                <thead>
                                    <tr>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Product</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                            Price</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                            Quantity</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 text-center">
                                            Category</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2">
                                                <div>
                                                    <img src="{{ asset('admin.jpg') }}" class="avatar me-3"
                                                        alt="Product">
                                                </div>
                                                <div class="my-auto">
                                                    <h6 class="mb-0 text-sm">Protien</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-sm text-center font-weight-bold mb-0"><i
                                                    class="fa-solid fa-indian-rupee-sign"></i> 2,500</p>
                                        </td>
                                        <td class="text-center">
                                            <span class="text-xs font-weight-bold">40</span>
                                        </td>
                                        <td class="text-center">
                                            <span class="text-xs font-weight-bold">Protien</span>
                                        </td>
                                        <td class="text-center">
                                            <button class="me-2 btn btn-xs btn-dark mb-0"
                                                data-manage-product="12">Manage</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2">
                                                <div>
                                                    <img src="{{ asset('admin.jpg') }}" class="avatar me-3"
                                                        alt="Product">
                                                </div>
                                                <div class="my-auto">
                                                    <h6 class="mb-0 text-sm">Protien</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-sm text-center font-weight-bold mb-0"><i
                                                    class="fa-solid fa-indian-rupee-sign"></i> 2,500</p>
                                        </td>
                                        <td class="text-center">
                                            <span class="text-xs font-weight-bold">40</span>
                                        </td>
                                        <td class="text-center">
                                            <span class="text-xs font-weight-bold">Protien</span>
                                        </td>
                                        <td class="text-center">
                                            <button class="me-2 btn btn-xs btn-dark mb-0"
                                                data-manage-product="12">Manage</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2">
                                                <div>
                                                    <img src="{{ asset('admin.jpg') }}" class="avatar me-3"
                                                        alt="Product">
                                                </div>
                                                <div class="my-auto">
                                                    <h6 class="mb-0 text-sm">Protien</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-sm text-center font-weight-bold mb-0"><i
                                                    class="fa-solid fa-indian-rupee-sign"></i> 2,500</p>
                                        </td>
                                        <td class="text-center">
                                            <span class="text-xs font-weight-bold">40</span>
                                        </td>
                                        <td class="text-center">
                                            <span class="text-xs font-weight-bold">Protien</span>
                                        </td>
                                        <td class="text-center">
                                            <button class="me-2 btn btn-xs btn-dark mb-0"
                                                data-manage-product="12">Manage</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2">
                                                <div>
                                                    <img src="{{ asset('admin.jpg') }}" class="avatar me-3"
                                                        alt="Product">
                                                </div>
                                                <div class="my-auto">
                                                    <h6 class="mb-0 text-sm">Protien</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-sm text-center font-weight-bold mb-0"><i
                                                    class="fa-solid fa-indian-rupee-sign"></i> 2,500</p>
                                        </td>
                                        <td class="text-center">
                                            <span class="text-xs font-weight-bold">40</span>
                                        </td>
                                        <td class="text-center">
                                            <span class="text-xs font-weight-bold">Protien</span>
                                        </td>
                                        <td class="text-center">
                                            <button class="me-2 btn btn-xs btn-dark mb-0"
                                                data-manage-product="12">Manage</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2">
                                                <div>
                                                    <img src="{{ asset('admin.jpg') }}" class="avatar me-3"
                                                        alt="Product">
                                                </div>
                                                <div class="my-auto">
                                                    <h6 class="mb-0 text-sm">Protien</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-sm text-center font-weight-bold mb-0"><i
                                                    class="fa-solid fa-indian-rupee-sign"></i> 2,500</p>
                                        </td>
                                        <td class="text-center">
                                            <span class="text-xs font-weight-bold">40</span>
                                        </td>
                                        <td class="text-center">
                                            <span class="text-xs font-weight-bold">Protien</span>
                                        </td>
                                        <td class="text-center">
                                            <button class="me-2 btn btn-xs btn-dark mb-0"
                                                data-manage-product="12">Manage</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2">
                                                <div>
                                                    <img src="{{ asset('admin.jpg') }}" class="avatar me-3"
                                                        alt="Product">
                                                </div>
                                                <div class="my-auto">
                                                    <h6 class="mb-0 text-sm">Protien</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-sm text-center font-weight-bold mb-0"><i
                                                    class="fa-solid fa-indian-rupee-sign"></i> 2,500</p>
                                        </td>
                                        <td class="text-center">
                                            <span class="text-xs font-weight-bold">40</span>
                                        </td>
                                        <td class="text-center">
                                            <span class="text-xs font-weight-bold">Protien</span>
                                        </td>
                                        <td class="text-center">
                                            <button class="me-2 btn btn-xs btn-dark mb-0"
                                                data-manage-product="12">Manage</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Add Product -->
    <div id="addProduct" style="display: none;">
        <form>
            <div class="row">
                <div class="col-12 d-flex justify-content-between align-items-center mb-2">
                    <h3 class="text-light ms-2 font-weight-bolder">Add New Product</h3>
                    <button class="btn btn-sm btn-dark mb-0 me-4" data-view-product>View All Products</button>
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body mb-3">
                            <h6>Product Information</h6>
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
                            <div class="col-12 mb-3">
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
                            <div class="col-12">
                                <button type="submit" class="btn btn-sm btn-success m-0 mt-2">Add Product</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- Manage Product -->
    <div id="manageProduct" style="display: none;">
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
    let productTableButton = document.querySelectorAll("[data-view-product]");
    let productTable = document.getElementById("productsTable");

    let addProductButton = document.querySelector("#addProductButton");
    let addProduct = document.querySelector("#addProduct");
    
    let manageProductButton = document.querySelectorAll("[data-manage-product]");
    let manageProduct = document.querySelector("#manageProduct");

    addProductButton.addEventListener("click", function() {
      productTable.style.display = "none";
      manageProduct.style.display = "none";
      addProduct.style.display = "block";
    });

    productTableButton.forEach(item => {
      item.addEventListener("click", function() {
        addProduct.style.display = "none";
        manageProduct.style.display = "none";
        productTable.style.display = "block";
      });
    });

    manageProductButton.forEach(manage => {
      manage.addEventListener("click", function() {
        productTable.style.display = "none";
        addProduct.style.display = "none";
        manageProduct.style.display = "block";
      });
    });
</script>
@endpush