@extends('layouts.adminLayout')

@section('title') Category @endsection

@section('content')
<div class="container-fluid py-4">
    <div class="row mt-4">
        <!-- Categories -->
        <div class="col-lg-6 mb-4">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center flex-wrap pb-0 p-3">
                    <h6 class="mb-0">Categories</h6>
                    <label class="btn btn-sm btn-dark my-1" for="add-category" id="addCategoryButton">Add
                        Category</label>
                </div>
                <hr class="bg-dark mb-0">
                <div class="card-body p-3">
                    <ul class="list-group">
                        <li
                            class="list-group-item border-0 d-flex justify-content-between flex-wrap ps-0 mb-2 border-radius-lg">
                            <div class="d-flex align-items-center">
                                <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                                    <i class="fa-solid fa-dumbbell text-white opacity-10"></i>
                                </div>
                                <div class="d-flex flex-column">
                                    <h6 class="mb-1 text-dark text-sm">Training Equipments</h6>
                                    <span class="text-xs">250 in stock, <span class="font-weight-bold">346+
                                            sold</span></span>
                                </div>
                            </div>
                            <div class="d-flex">
                                <button class="btn btn-sm btn-outline-danger my-2" data-edit-category>Edit</button>
                            </div>
                        </li>
                        <li
                            class="list-group-item border-0 d-flex justify-content-between flex-wrap ps-0 mb-2 border-radius-lg">
                            <div class="d-flex align-items-center">
                                <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                                    <i class="fa-solid fa-jar text-white opacity-10"></i>
                                </div>
                                <div class="d-flex flex-column">
                                    <h6 class="mb-1 text-dark text-sm">Supplements</h6>
                                    <span class="text-xs">250 in stock, <span class="font-weight-bold">346+
                                            sold</span></span>
                                </div>
                            </div>
                            <div class="d-flex">
                                <button class="btn btn-sm btn-outline-danger my-2" data-edit-category>Edit</button>
                            </div>
                        </li>
                        <li
                            class="list-group-item border-0 d-flex justify-content-between flex-wrap ps-0 mb-2 border-radius-lg">
                            <div class="d-flex align-items-center">
                                <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                                    <i class="fa-solid fa-bottle-water text-white opacity-10"></i>
                                </div>
                                <div class="d-flex flex-column">
                                    <h6 class="mb-1 text-dark text-sm">Bottles</h6>
                                    <span class="text-xs">250 in stock, <span class="font-weight-bold">346+
                                            sold</span></span>
                                </div>
                            </div>
                            <div class="d-flex">
                                <button class="btn btn-sm btn-outline-danger my-2" data-edit-category>Edit</button>
                            </div>
                        </li>
                        <li
                            class="list-group-item border-0 d-flex justify-content-between flex-wrap ps-0 border-radius-lg">
                            <div class="d-flex align-items-center">
                                <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                                    <i class="fa-brands fa-redhat text-white opacity-10"></i>
                                </div>
                                <div class="d-flex flex-column">
                                    <h6 class="mb-1 text-dark text-sm">Caps</h6>
                                    <span class="text-xs">250 in stock, <span class="font-weight-bold">346+
                                            sold</span></span>
                                </div>
                            </div>
                            <div class="d-flex">
                                <button class="btn btn-sm btn-outline-danger my-2" data-edit-category>Edit</button>
                            </div>
                        </li>
                        <li
                            class="list-group-item border-0 d-flex justify-content-between flex-wrap ps-0 border-radius-lg">
                            <div class="d-flex align-items-center">
                                <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                                    <i class="fa-solid fa-shirt text-white opacity-10"></i>
                                </div>
                                <div class="d-flex flex-column">
                                    <h6 class="mb-1 text-dark text-sm">T-Shirts</h6>
                                    <span class="text-xs">250 in stock, <span class="font-weight-bold">346+
                                            sold</span></span>
                                </div>
                            </div>
                            <div class="d-flex">
                                <button class="btn btn-sm btn-outline-danger my-2" data-edit-category>Edit</button>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Manage Category -->
        <div class="col-lg-6 mb-4">
            <!-- Update / Delete Category -->
            <div class="card" style="display: none;" id="manageCategory">
                <div class="card-header d-flex flex-wrap justify-content-between align-items-center pb-0 p-3">
                    <h6 class="mb-0">Manage Category</h6>
                    <button class="btn btn-sm btn-danger my-2">Delete</button>
                </div>
                <hr class="bg-dark">
                <div class="card-body py-1 px-3">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <h6 class="mb-0 text-uppercase font-weight-bold">Category name</h6>
                            <p class="text-sm font-weight-bold mb-0">Products Avialable : 40</p>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Category Name:</label>
                                <input class="form-control" id="manage-category" type="text" value="T-shirt">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <button class="btn btn-sm btn-primary">Update</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Add Category -->
            <div class="card" id="addCategory">
                <div class="card-header pb-0 p-3">
                    <h6 class="mb-0">Add Category</h6>
                </div>
                <hr class="bg-dark">
                <div class="card-body py-1 px-3">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <h6 class="mb-0 text-uppercase font-weight-bold">Add New Category</h6>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Category Name:</label>
                                <input class="form-control" id="add-category" type="text" value="Enter Category">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <button class="btn btn-sm btn-primary">Add Category</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    let editCategoryBtn = document.querySelectorAll('[data-edit-category]');
    let addCategoryBtn = document.querySelector("#addCategoryButton");
    let editCategory = document.querySelector("#manageCategory");
    let addCategory = document.querySelector("#addCategory");

    editCategoryBtn.forEach(btn => {
        btn.addEventListener("click", ()=> {
            addCategory.style.display = "none";
            editCategory.style.display = "flex";
        });
    });

    addCategoryBtn.addEventListener("click", ()=> {
        editCategory.style.display = "none";
        addCategory.style.display = "flex";
    })
</script>
@endpush