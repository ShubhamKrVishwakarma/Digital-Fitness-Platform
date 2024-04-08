@extends('layouts.adminLayout')

@section('title', 'Dashboard')

@section('content')
<div class="container-fluid py-4">
    {{-- Website Counters --}}
    @livewire('Admin.Dashboard.SiteInfo')
    {{-- Reviews --}}
    <div class="row mt-4">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Recent Reviews</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        ID
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        User Info
                                    </th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Review Type
                                    </th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Rating
                                    </th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Date
                                    </th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <p class="ms-3">1</p>
                                    </td>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div>
                                                <img src="../images/team-3.jpg" class="avatar avatar-sm me-3"
                                                    alt="user1">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">John Michael</h6>
                                                <p class="text-xs text-secondary mb-0">john@creative-tim.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class="badge badge-sm bg-gradient-warning">Trainer</span>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0"><i
                                                class="fa-solid fa-star text-success"></i> 5.0</p>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                                    </td>
                                    <td class="align-middle">
                                        <button class="btn btn-xs btn-primary m-0">Manage</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="ms-3">1</p>
                                    </td>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div>
                                                <img src="../images/team-3.jpg" class="avatar avatar-sm me-3"
                                                    alt="user1">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">John Michael</h6>
                                                <p class="text-xs text-secondary mb-0">john@creative-tim.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class="badge badge-sm bg-gradient-info">Product</span>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0"><i
                                                class="fa-solid fa-star text-success"></i> 4.0</p>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                                    </td>
                                    <td class="align-middle">
                                        <button class="btn btn-xs btn-primary m-0">Manage</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 d-flex justify-content-end">
            <button class="btn btn-sm btn-dark">View All Reviews</button>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header text-center py-2">
                    <div class="avatar avatar-xxl position-relative">
                        <img src="http://127.0.0.1:8000/storage/products/product-1.jpg" class="w-100 border-radius-lg shadow-sm">
                    </div>
                    {{-- <div class="d-flex justify-content-center">
                        <span class="btn btn-sm btn-info mb-0 d-none d-lg-block my-2">Trainer</span>
                    </div> --}}
                </div>
                <div class="card-body pt-0">
                    {{-- <div class="row">
                        <div class="col">
                            <div class="d-flex justify-content-center">
                                <div class="d-grid text-center">
                                    <span class="text-lg font-weight-bolder">22</span>
                                    <span class="text-sm opacity-8">Posts</span>
                                </div>
                                <div class="d-grid text-center mx-4">
                                    <span class="text-lg font-weight-bolder">10</span>
                                    <span class="text-sm opacity-8">Followers</span>
                                </div>
                                <div class="d-grid text-center">
                                    <span class="text-lg font-weight-bolder">89</span>
                                    <span class="text-sm opacity-8">Following</span>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="text-center">
                        <h5>
                            Mark Davis
                        </h5>
                        <div class="h6 font-weight-300">
                            Category
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- User Review --}}
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-column flex-md-row justify-content-start align-items-center flex-wrap gap-3">
                        <div class="d-flex justify-content-between align-items-center flex-wrap w-100">
                            <div class="d-flex px-2 py-1">
                                <div>
                                    <img src="../images/team-3.jpg" class="avatar avatar-sm me-3"
                                        alt="user1">
                                </div>
                                <div class="d-flex flex-column justify-content-center">
                                    <h6 class="mb-0 text-sm">John Michael</h6>
                                    <p class="text-xs text-secondary mb-0">john@creative-tim.com</p>
                                </div>
                            </div>
                            <div>
                                <button class="btn btn-xs btn-danger mb-0"><i class="fa-solid fa-trash"></i></button>
                            </div>
                        </div>
                        <!-- Product Details -->
                        <div class="d-flex flex-column justify-content-center ps-3">
                            <span class="mb-2"><i class="fa-solid fa-star text-success"></i> 5.0</span>
                            <span class="mb-1 text-xs">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Suscipit, dolorem! Doloribus omnis maxime vero quo nesciunt pariatur similique natus reiciendis, mollitia eum nostrum fuga soluta beatae unde iusto minima architecto!</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection