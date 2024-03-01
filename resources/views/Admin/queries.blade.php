@extends('layouts.adminLayout')

@section('title') Admin - Query @endsection

@push('css')
<link rel="stylesheet" href="{{ asset('assets/css/post.css') }}">
@endpush

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
                    <li class="breadcrumb-item text-sm text-white active" aria-current="page">Queries</li>
                </ol>
                <h6 class="font-weight-bolder text-white mb-0">Queries</h6>
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
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12 query-table" id="queryTable">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Queries Table</h6>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive p-0">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            USER</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Query</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Date</th>
                                        <th class="text-secondary opacity-7"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm fs-6">John Michael</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-sm fs-5 text-secondary mb-0">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet placeat
                                                nostrum ut aspernatur! Ex unde dolores consectetur voluptatibus alias
                                                architecto?
                                            </p>
                                        </td>
                                        <td class="text-center">
                                            <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                                        </td>
                                        <td>
                                            <button class="btn btn-xs btn-dark" data-manage-query>Reply</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">John Michael</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-sm fs-5 text-secondary mb-0">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet placeat
                                                nostrum ut aspernatur! Ex unde dolores consectetur voluptatibus alias
                                                architecto?
                                            </p>
                                        </td>
                                        <td class="text-center">
                                            <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                                        </td>
                                        <td>
                                            <button class="btn btn-xs btn-dark" data-manage-query>Reply</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">John Michael</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-sm fs-5 text-secondary mb-0">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet placeat
                                                nostrum ut aspernatur! Ex unde dolores consectetur voluptatibus alias
                                                architecto?
                                            </p>
                                        </td>
                                        <td class="text-center">
                                            <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                                        </td>
                                        <td>
                                            <button class="btn btn-xs btn-dark" data-manage-query>Reply</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">John Michael</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-sm fs-5 text-secondary mb-0">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet placeat
                                                nostrum ut aspernatur! Ex unde dolores consectetur voluptatibus alias
                                                architecto?
                                            </p>
                                        </td>
                                        <td class="text-center">
                                            <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                                        </td>
                                        <td>
                                            <button class="btn btn-xs btn-dark" data-manage-query>Reply</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">John Michael</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-sm fs-5 text-secondary mb-0">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet placeat
                                                nostrum ut aspernatur! Ex unde dolores consectetur voluptatibus alias
                                                architecto?
                                            </p>
                                        </td>
                                        <td class="text-center">
                                            <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                                        </td>
                                        <td>
                                            <button class="btn btn-xs btn-dark" data-manage-query>Reply</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">John Michael</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-sm fs-5 text-secondary mb-0">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet placeat
                                                nostrum ut aspernatur! Ex unde dolores consectetur voluptatibus alias
                                                architecto?
                                            </p>
                                        </td>
                                        <td class="text-center">
                                            <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                                        </td>
                                        <td>
                                            <button class="btn btn-xs btn-dark" data-manage-query>Reply</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">John Michael</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-sm fs-5 text-secondary mb-0">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet placeat
                                                nostrum ut aspernatur! Ex unde dolores consectetur voluptatibus alias
                                                architecto?
                                            </p>
                                        </td>
                                        <td class="text-center">
                                            <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                                        </td>
                                        <td>
                                            <button class="btn btn-xs btn-dark" data-manage-query>Reply</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Reply To Query -->
        <div class="row" id="replyQuery" style="display: none;">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center flex-wrap pb-3">
                        <h5>Query Reply</h5>
                        <button class="btn btn-sm btn-dark m-0" id="queryTableButton">View All Queries</button>
                    </div>
                    <hr class="m-0 bg-dark">
                    <div class="card-body">
                        <h6>To: test@gmail.com</h6>
                        <p class="text-sm"><b>Name: </b>User Name</p>
                        <p class="text-sm"><b>Email: </b>test@gmail.com</p>
                        <p class="text-sm"><b>Phone Number: </b>+91 9087678900</p>
                        <p class="text-sm"><b>Query: </b>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Nostrum cupiditate quia ad, vitae ab dicta et pariatur, nam ratione, quam eveniet debitis
                            hic deserunt aperiam.</p>
                        <p></p>
                        <form action="">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control" cols="30" rows="5"
                                            placeholder="Reply..."></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <button class="btn btn-sm btn-success">
                                        Send Reply
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

@push('scripts')
<script>
    let queryTableButton = document.querySelector("#queryTableButton");
    let queryTable = document.querySelector("#queryTable");
    let replyQueryButton = document.querySelectorAll("[data-manage-query]");
    let replyQuery = document.querySelector("#replyQuery");

    replyQueryButton.forEach(item => {
      item.addEventListener("click", function() {
        queryTable.style.display = "none";
        replyQuery.style.display = "flex";
      });
    });

    queryTableButton.addEventListener("click", function() {
      replyQuery.style.display = "none";
      queryTable.style.display = "flex";
    });
</script>
@endpush