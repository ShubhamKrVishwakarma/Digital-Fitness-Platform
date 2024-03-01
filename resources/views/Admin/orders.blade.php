@extends('layouts.adminLayout')

@section('title') Admin - Orders @endsection

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
                    <li class="breadcrumb-item text-sm text-white active" aria-current="page">Orders</li>
                </ol>
                <h6 class="font-weight-bolder text-white mb-0">Orders</h6>
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
                                <img src="../images/team-3.jpg" alt="Admin"
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
    <div class="container-fluid py-2">
        <!-- Orders Table -->
        <div class="row" id="orderTable">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Orders table</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            User Info</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Phone Number
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Status
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Ordered Date</th>
                                        <th class="text-secondary opacity-7"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
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
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">+91 7425669841</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span class="badge badge-sm bg-gradient-secondary">Pending</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                                        </td>
                                        <td class="align-middle">
                                            <button class="btn btn-xs btn-dark m-0" data-manage-orders>Manage</button>
                                        </td>
                                    </tr>
                                    <tr>
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
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">+91 7425669841</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span class="badge badge-sm bg-gradient-danger">Canceled</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                                        </td>
                                        <td class="align-middle">
                                            <button class="btn btn-xs btn-dark m-0" data-manage-orders>Manage</button>
                                        </td>
                                    </tr>
                                    <tr>
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
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">+91 7425669841</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span class="badge badge-sm bg-gradient-success">Delivered</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                                        </td>
                                        <td class="align-middle">
                                            <button class="btn btn-xs btn-dark m-0" data-manage-orders>Manage</button>
                                        </td>
                                    </tr>
                                    <tr>
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
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">+91 7425669841</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span class="badge badge-sm bg-gradient-secondary">Pending</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                                        </td>
                                        <td class="align-middle">
                                            <button class="btn btn-xs btn-dark m-0" data-manage-orders>Manage</button>
                                        </td>
                                    </tr>
                                    <tr>
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
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">+91 7425669841</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span class="badge badge-sm bg-gradient-success">Delivered</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                                        </td>
                                        <td class="align-middle">
                                            <button class="btn btn-xs btn-dark m-0" data-manage-orders>Manage</button>
                                        </td>
                                    </tr>
                                    <tr>
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
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">+91 7425669841</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span class="badge badge-sm bg-gradient-success">Delivered</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                                        </td>
                                        <td class="align-middle">
                                            <button class="btn btn-xs btn-dark m-0" data-manage-orders>Manage</button>
                                        </td>
                                    </tr>
                                    <tr>
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
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">+91 7425669841</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span class="badge badge-sm bg-gradient-danger">Canceled</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                                        </td>
                                        <td class="align-middle">
                                            <button class="btn btn-xs btn-dark m-0" data-manage-orders>Manage</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single Order Information -->
        <div id="manageOrders" class="row" style="display: none;">
            <!-- view Order Table Button -->
            <div class="col-12 d-flex justify-content-start align-items-center flex-wrap ps-3 mb-3">
                <button class="btn btn-sm btn-dark m-0" id="viewOrdersButton">View All Orders</button>
            </div>
            <!-- Order Details -->
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header pb-0 px-3 d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="mb-0">Order Information</h6>
                        </div>
                        <div class="text-end">
                            <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i
                                    class="far fa-trash-alt me-2" aria-hidden="true"></i>Cancel</a>
                            <a class="btn btn-link text-success text-gradient px-3 mb-0" href="javascript:;"><i
                                    class="fa-solid fa-circle-check"></i> Confirm</a>
                        </div>
                    </div>
                    <div class="card-body pt-4 p-3">
                        <ul class="list-group">
                            <li
                                class="list-group-item border-0 d-flex justify-content-center justify-content-md-start p-4 mb-3 bg-gray-100 border-radius-lg">
                                <div
                                    class="d-flex flex-column flex-md-row justify-content-start align-items-center flex-wrap gap-3">
                                    <div class="avatar avatar-xxl position-relative mb-2">
                                        <img src="../images/team-3.jpg" alt="profile_image"
                                            class="w-100 border-radius-lg shadow-sm">
                                    </div>
                                    <!-- Product Details -->
                                    <div class="d-flex flex-column justify-content-center">
                                        <span class="mb-1 text-xs">Product ID: <span
                                                class="text-dark ms-sm-2 font-weight-bold">FRB1235476</span></span>
                                        <span class="mb-1 text-xs">Product Name: <span
                                                class="text-dark font-weight-bold ms-sm-2">Dumbell</span></span>
                                        <span class="mb-1 text-xs">Category: <span
                                                class="text-dark font-weight-bold ms-sm-2">Equipment</span></span>
                                        <span class="mb-1 text-xs">Quantity: <span
                                                class="text-danger ms-sm-1 font-weight-bold">12</span></span>
                                        <span class="mb-1 text-xs">Available Quantity: <span
                                                class="text-dark ms-sm-1 font-weight-bold">112</span></span>
                                        <span class="mb-1 text-xs">Price: <span
                                                class="text-success ms-sm-1 font-weight-bold"><i
                                                    class="fa-solid fa-indian-rupee-sign"></i> 450</span></span>
                                    </div>
                                </div>
                            </li>
                            <li
                                class="list-group-item border-0 d-flex justify-content-center justify-content-md-start p-4 mb-3 bg-gray-100 border-radius-lg">
                                <div
                                    class="d-flex flex-column flex-md-row justify-content-start align-items-center flex-wrap gap-3">
                                    <div class="avatar avatar-xxl position-relative mb-2">
                                        <img src="../images/team-3.jpg" alt="profile_image"
                                            class="w-100 border-radius-lg shadow-sm">
                                    </div>
                                    <!-- Product Details -->
                                    <div class="d-flex flex-column justify-content-center">
                                        <span class="mb-1 text-xs">Product ID: <span
                                                class="text-dark ms-sm-2 font-weight-bold">FRB1235476</span></span>
                                        <span class="mb-1 text-xs">Product Name: <span
                                                class="text-dark font-weight-bold ms-sm-2">Dumbell</span></span>
                                        <span class="mb-1 text-xs">Category: <span
                                                class="text-dark font-weight-bold ms-sm-2">Equipment</span></span>
                                        <span class="mb-1 text-xs">Quantity: <span
                                                class="text-danger ms-sm-1 font-weight-bold">12</span></span>
                                        <span class="mb-1 text-xs">Available Quantity: <span
                                                class="text-dark ms-sm-1 font-weight-bold">112</span></span>
                                        <span class="mb-1 text-xs">Price: <span
                                                class="text-success ms-sm-1 font-weight-bold"><i
                                                    class="fa-solid fa-indian-rupee-sign"></i> 450</span></span>
                                    </div>
                                </div>
                            </li>
                            <li
                                class="list-group-item border-0 d-flex justify-content-center justify-content-md-start p-4 mb-3 bg-gray-100 border-radius-lg">
                                <div
                                    class="d-flex flex-column flex-md-row justify-content-start align-items-center flex-wrap gap-3">
                                    <div class="avatar avatar-xxl position-relative mb-2">
                                        <img src="../images/team-3.jpg" alt="profile_image"
                                            class="w-100 border-radius-lg shadow-sm">
                                    </div>
                                    <!-- Product Details -->
                                    <div class="d-flex flex-column justify-content-center">
                                        <span class="mb-1 text-xs">Product ID: <span
                                                class="text-dark ms-sm-2 font-weight-bold">FRB1235476</span></span>
                                        <span class="mb-1 text-xs">Product Name: <span
                                                class="text-dark font-weight-bold ms-sm-2">Dumbell</span></span>
                                        <span class="mb-1 text-xs">Category: <span
                                                class="text-dark font-weight-bold ms-sm-2">Equipment</span></span>
                                        <span class="mb-1 text-xs">Quantity: <span
                                                class="text-danger ms-sm-1 font-weight-bold">12</span></span>
                                        <span class="mb-1 text-xs">Available Quantity: <span
                                                class="text-dark ms-sm-1 font-weight-bold">112</span></span>
                                        <span class="mb-1 text-xs">Price: <span
                                                class="text-success ms-sm-1 font-weight-bold"><i
                                                    class="fa-solid fa-indian-rupee-sign"></i> 450</span></span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <!-- Order Total -->
                        <hr class="m-0 bg-secondary">
                        <div class="pt-2">
                            <h6 class="m-0 ps-4">Total Amount: <span class="text-success ms-sm-1 font-weight-bold"><i
                                        class="fa-solid fa-indian-rupee-sign"></i> 450</span></h6>
                        </div>
                    </div>
                </div>
            </div>
            <!-- User Details -->
            <div class="col-md-4">
                <div class="card mb-3">
                    <div class="card-header p-3">
                        <h6 class="mb-0">Customer Details</h6>
                    </div>
                    <hr class="m-0 bg-secondary">
                    <div class="card-body p-3">
                        <!-- User Info  -->
                        <div class="d-flex">
                            <div>
                                <img src="../images/team-3.jpg" class="avatar avatar-sm me-3" alt="user1">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-sm">John Michael</h6>
                                <p class="text-xs text-secondary mb-0">john@creative-tim.com</p>
                            </div>
                        </div>
                        <div>
                            <span class="text-success d-block py-2 fs-5 mb-0"><i class="fa-solid fa-cart-shopping"></i>
                                12 Orders</span>
                        </div>
                        <div>
                            <h6 class="m-0">Contact Info:</h6>
                            <p class="m-0 text-sm mb-1"><b>Email:</b> test@gmail.com</p>
                            <p class="m-0 text-sm"><b>Mobile:</b> +91 8987567865</p>
                        </div>
                        <!-- Shipping Info -->
                    </div>
                </div>
                <!-- Shipping Address -->
                <div class="card mb-3">
                    <div class="card-body p-3">
                        <h6 class="mb-0 px-1 py-2">Shipping Address</h6>
                        <p class="text-sm text-secondary m-0 px-1 pt-1 pb-2">Lorem ipsum, dolor sit amet consectetur
                            adipisicing elit. Consequatur aliquid quia itaque esse quibusdam unde nam eaque? Vero fugit,
                            possimus corporis pariatur autem amet natus vel aliquam! Tempora, quo molestias.</p>
                    </div>
                </div>
                <!-- Payment Inforamtaion -->
                <div class="card mb-3">
                    <div class="card-body p-3">
                        <h6 class="mb-0 px-1 py-2">Payment Details</h6>
                        <p class="text-sm text-secondary m-0 px-1 pt-1 pb-2">Payment Type: COD</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

@push('scripts')
<script>
    let viewOrderTable = document.querySelector("#orderTable");
    let viewOrderTableButton = document.querySelector("#viewOrdersButton");
    let manageOrderButton = document.querySelectorAll("[data-manage-orders]");
    let manageOrder = document.querySelector("#manageOrders");

    manageOrderButton.forEach(item => {
      item.addEventListener("click", function() {
        viewOrderTable.style.display = "none";
        manageOrder.style.display = "flex";
      });
    });

    viewOrderTableButton.addEventListener("click", function() {
      manageOrder.style.display = "none";
      viewOrderTable.style.display = "flex";
    });
</script>
@endpush