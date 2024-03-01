@extends('layouts.adminLayout')

@section('title') Admin - Category @endsection

@section('content')
    <main class="main-content position-relative border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur"
            data-scroll="false">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Admin</a>
                        </li>
                        <li class="breadcrumb-item text-sm text-white active" aria-current="page">Categories</li>
                    </ol>
                    <h6 class="font-weight-bolder text-white mb-0">Categories</h6>
                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                        <div class="input-group">
                            <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" placeholder="Type here...">
                        </div>
                    </div>
                    <ul class="navbar-nav justify-content-end">
                        <li class="nav-item d-flex align-items-center">
                            <a href="./profile.html" class="nav-link text-white font-weight-bold px-0">
                                <div class="icon icon-shape shadow-primary text-center rounded-circle">
                                    <img src="{{ asset('admin.jpg') }}" alt="Admin"
                                        class="icon icon-shape shadow-primary rounded-circle">
                                </div>
                            </a>
                        </li>
                        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line bg-white"></i>
                                    <i class="sidenav-toggler-line bg-white"></i>
                                    <i class="sidenav-toggler-line bg-white"></i>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
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
    </main>
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