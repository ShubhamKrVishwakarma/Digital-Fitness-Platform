@extends('layouts.adminLayout')

@section('title') Admin - Community @endsection

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
                    <li class="breadcrumb-item text-sm text-white active" aria-current="page">Community</li>
                </ol>
                <h6 class="font-weight-bolder text-white mb-0">Community</h6>
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
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Posts</p>
                                    <h5 class="font-weight-bolder">
                                        2300
                                    </h5>
                                    <p class="mb-0">
                                        <span class="text-success text-sm font-weight-bolder">+55%</span>
                                        since yesterday
                                    </p>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div
                                    class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                                    <i class="fa-solid fa-rss text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Todal Likes</p>
                                    <h5 class="font-weight-bolder">
                                        23,300
                                    </h5>
                                    <p class="mb-0">
                                        <span class="text-success text-sm font-weight-bolder">+3%</span>
                                        since last week
                                    </p>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div
                                    class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                                    <i class="fa-solid fa-heart text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Comments</p>
                                    <h5 class="font-weight-bolder">
                                        +3,462
                                    </h5>
                                    <p class="mb-0">
                                        <span class="text-danger text-sm font-weight-bolder">+2%</span>
                                        than last month
                                    </p>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div
                                    class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                                    <i class="fa-solid fa-comment text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Shares</p>
                                    <h5 class="font-weight-bolder">
                                        34
                                    </h5>
                                    <p class="mb-0">
                                        <span class="text-success text-sm font-weight-bolder">+5%</span> than last month
                                    </p>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div
                                    class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                                    <i class="fa-solid fa-share-nodes text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <!-- Post Section -->
            <div class="col-lg-5 mb-4">
                <div class="card">
                    <div class="posts">
                        <div class="post">
                            <!-- User Info -->
                            <div class="post-head">
                                <div class="user-info">
                                    <a href="./profile.html" class="nav-link text-white font-weight-bold px-0">
                                        <div class="icon icon-shape shadow-primary text-center rounded-circle">
                                            <img src="../images/team-3.jpg" alt="Admin"
                                                class="icon icon-shape shadow-primary rounded-circle">
                                        </div>
                                    </a>
                                    <div class="info">
                                        <h6 class="mb-0">John Cena</h6>
                                        <small>Kolkata, 15 Minutes Ago</small>
                                    </div>
                                </div>
                                <div class="manage-post">
                                    <button class="btn btn-sm btn-danger mb-0">Delete</button>
                                </div>
                            </div>
                            <div class="post-bio">
                                <p class="text-sm mb-0 text-secondary pt-2 px-3">
                                    #What's Your Thoughts ?
                                </p>
                            </div>
                            <!-- Main Post -->
                            <div class="post-body">
                                <!-- <img src="../images/feed-3.jpg"> -->
                                <video controls>
                                    <source src="../videos/demo-7.mp4" type="video/mp4">
                                </video>
                                <!-- <p class="mb-0 py-1 px-2">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima cupiditate cum possimus qui quisquam? Assumenda asperiores doloribus et quasi corrupti.
                    </p> -->
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Post Comments -->
            <div class="col-lg-7 mb-4">
                <div class="card" id="comment-card">
                    <div class="comment-head p-3">
                        <div class="user-info">
                            <a href="./profile.html" class="nav-link text-white font-weight-bold px-0">
                                <div class="icon icon-shape shadow-primary text-center rounded-circle">
                                    <img src="../images/team-3.jpg" alt="Admin"
                                        class="icon icon-shape shadow-primary rounded-circle">
                                </div>
                            </a>
                            <div class="info">
                                <h6 class="mb-0">John Cena</h6>
                                <small>Kolkata, 15 Minutes Ago</small>
                            </div>
                        </div>
                        <div class="manage-post">
                            <button class="btn btn-sm btn-dark mb-0">Don't Allow Comments</button>
                        </div>
                    </div>
                    <div class="comment-body p-3">
                        <div class="comment-body-header">
                            <div class="comment-user-info">
                                <a href="./profile.html" class="nav-link text-white font-weight-bold px-0">
                                    <div class="icon icon-shape shadow-primary text-center rounded-circle">
                                        <img src="../images/team-3.jpg" alt="Admin"
                                            class="icon icon-shape shadow-primary rounded-circle">
                                    </div>
                                </a>
                                <div class="info">
                                    <h6 class="mb-0">John Cena</h6>
                                    <small>Kolkata, 15 Minutes Ago</small>
                                </div>
                            </div>
                            <div class="manage-comments">
                                <a href="" class="btn btn-sm btn-danger py-2 px-3">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </div>
                        </div>
                        <div class="comment-user-message p-1">
                            <p class="text-sm text-secondary mb-0">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, sapiente. Nulla doloremque
                                alias corrupti beatae aliquam, a eos neque! Minima iure qui, necessitatibus distinctio
                                soluta eius veritatis architecto, nobis itaque, autem dolore quia. Vel dolorem aperiam
                                inventore repudiandae modi aut.
                            </p>
                        </div>
                    </div>
                    <div class="comment-body p-3">
                        <div class="comment-body-header">
                            <div class="comment-user-info">
                                <a href="./profile.html" class="nav-link text-white font-weight-bold px-0">
                                    <div class="icon icon-shape shadow-primary text-center rounded-circle">
                                        <img src="../images/team-3.jpg" alt="Admin"
                                            class="icon icon-shape shadow-primary rounded-circle">
                                    </div>
                                </a>
                                <div class="info">
                                    <h6 class="mb-0">John Cena</h6>
                                    <small>Kolkata, 15 Minutes Ago</small>
                                </div>
                            </div>
                            <div class="manage-comments">
                                <a href="" class="btn btn-sm btn-danger py-2 px-3">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </div>
                        </div>
                        <div class="comment-user-message p-1">
                            <p class="text-sm text-secondary mb-0">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, sapiente. Nulla doloremque
                                alias corrupti beatae aliquam, a eos neque! Minima iure qui, necessitatibus distinctio
                                soluta eius veritatis architecto, nobis itaque, autem dolore quia. Vel dolorem aperiam
                                inventore repudiandae modi aut.
                            </p>
                        </div>
                    </div>
                    <div class="comment-body p-3">
                        <div class="comment-body-header">
                            <div class="comment-user-info">
                                <a href="./profile.html" class="nav-link text-white font-weight-bold px-0">
                                    <div class="icon icon-shape shadow-primary text-center rounded-circle">
                                        <img src="../images/team-3.jpg" alt="Admin"
                                            class="icon icon-shape shadow-primary rounded-circle">
                                    </div>
                                </a>
                                <div class="info">
                                    <h6 class="mb-0">John Cena</h6>
                                    <small>Kolkata, 15 Minutes Ago</small>
                                </div>
                            </div>
                            <div class="manage-comments">
                                <a href="" class="btn btn-sm btn-danger py-2 px-3">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </div>
                        </div>
                        <div class="comment-user-message p-1">
                            <p class="text-sm text-secondary mb-0">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, sapiente. Nulla doloremque
                                alias corrupti beatae aliquam, a eos neque! Minima iure qui, necessitatibus distinctio
                                soluta eius veritatis architecto, nobis itaque, autem dolore quia. Vel dolorem aperiam
                                inventore repudiandae modi aut.
                            </p>
                        </div>
                    </div>
                    <div class="comment-body p-3">
                        <div class="comment-body-header">
                            <div class="comment-user-info">
                                <a href="./profile.html" class="nav-link text-white font-weight-bold px-0">
                                    <div class="icon icon-shape shadow-primary text-center rounded-circle">
                                        <img src="../images/team-3.jpg" alt="Admin"
                                            class="icon icon-shape shadow-primary rounded-circle">
                                    </div>
                                </a>
                                <div class="info">
                                    <h6 class="mb-0">John Cena</h6>
                                    <small>Kolkata, 15 Minutes Ago</small>
                                </div>
                            </div>
                            <div class="manage-comments">
                                <a href="" class="btn btn-sm btn-danger py-2 px-3">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </div>
                        </div>
                        <div class="comment-user-message p-1">
                            <p class="text-sm text-secondary mb-0">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, sapiente. Nulla doloremque
                                alias corrupti beatae aliquam, a eos neque! Minima iure qui, necessitatibus distinctio
                                soluta eius veritatis architecto, nobis itaque, autem dolore quia. Vel dolorem aperiam
                                inventore repudiandae modi aut.
                            </p>
                        </div>
                    </div>
                    <div class="comment-body p-3">
                        <div class="comment-body-header">
                            <div class="comment-user-info">
                                <a href="./profile.html" class="nav-link text-white font-weight-bold px-0">
                                    <div class="icon icon-shape shadow-primary text-center rounded-circle">
                                        <img src="../images/team-3.jpg" alt="Admin"
                                            class="icon icon-shape shadow-primary rounded-circle">
                                    </div>
                                </a>
                                <div class="info">
                                    <h6 class="mb-0">John Cena</h6>
                                    <small>Kolkata, 15 Minutes Ago</small>
                                </div>
                            </div>
                            <div class="manage-comments">
                                <a href="" class="btn btn-sm btn-danger py-2 px-3">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </div>
                        </div>
                        <div class="comment-user-message p-1">
                            <p class="text-sm text-secondary mb-0">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, sapiente. Nulla doloremque
                                alias corrupti beatae aliquam, a eos neque! Minima iure qui, necessitatibus distinctio
                                soluta eius veritatis architecto, nobis itaque, autem dolore quia. Vel dolorem aperiam
                                inventore repudiandae modi aut.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Post Section -->
            <div class="col-lg-5 mb-4">
                <div class="card">
                    <div class="posts">
                        <div class="post">
                            <!-- User Info -->
                            <div class="post-head">
                                <div class="user-info">
                                    <a href="./profile.html" class="nav-link text-white font-weight-bold px-0">
                                        <div class="icon icon-shape shadow-primary text-center rounded-circle">
                                            <img src="../images/team-3.jpg" alt="Admin"
                                                class="icon icon-shape shadow-primary rounded-circle">
                                        </div>
                                    </a>
                                    <div class="info">
                                        <h6 class="mb-0">John Cena</h6>
                                        <small>Kolkata, 15 Minutes Ago</small>
                                    </div>
                                </div>
                                <div class="manage-post">
                                    <button class="btn btn-sm btn-danger mb-0">Delete</button>
                                </div>
                            </div>
                            <div class="post-bio">
                                <p class="text-sm mb-0 pt-2 px-3">
                                    <!-- #Luffy <br>
                          #One Piece -->
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, nulla? Cumque
                                    sequi error qui cum placeat tenetur nisi fugit cupiditate!
                                </p>
                            </div>
                            <!-- Main Post -->
                            <div class="post-body">
                                <img src="../images/feed-3.jpg">
                                <!-- <video controls>
                      <source src="" type="video/mp4">
                      Your browser does not support the video tag.
                  </video> -->
                                <!-- <p class="text-sm text-secondary mb-0 py-1 px-2">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima cupiditate cum possimus qui quisquam? Assumenda asperiores doloribus et quasi corrupti?
                    </p> -->
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Post Comments -->
            <div class="col-lg-7 mb-4">
                <div class="card" id="comment-card">
                    <div class="comment-head p-3">
                        <div class="user-info">
                            <a href="./profile.html" class="nav-link text-white font-weight-bold px-0">
                                <div class="icon icon-shape shadow-primary text-center rounded-circle">
                                    <img src="../images/team-3.jpg" alt="Admin"
                                        class="icon icon-shape shadow-primary rounded-circle">
                                </div>
                            </a>
                            <div class="info">
                                <h6 class="mb-0">John Cena</h6>
                                <small>Kolkata, 15 Minutes Ago</small>
                            </div>
                        </div>
                        <div class="manage-post">
                            <button class="btn btn-sm btn-dark mb-0">Don't Allow Comments</button>
                        </div>
                    </div>
                    <div class="comment-body p-3">
                        <div class="comment-body-header">
                            <div class="comment-user-info">
                                <a href="./profile.html" class="nav-link text-white font-weight-bold px-0">
                                    <div class="icon icon-shape shadow-primary text-center rounded-circle">
                                        <img src="../images/team-3.jpg" alt="Admin"
                                            class="icon icon-shape shadow-primary rounded-circle">
                                    </div>
                                </a>
                                <div class="info">
                                    <h6 class="mb-0">John Cena</h6>
                                    <small>Kolkata, 15 Minutes Ago</small>
                                </div>
                            </div>
                            <div class="manage-comments">
                                <a href="" class="btn btn-sm btn-danger py-2 px-3">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </div>
                        </div>
                        <div class="comment-user-message p-1">
                            <p class="text-sm text-secondary mb-0">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, sapiente. Nulla doloremque
                                alias corrupti beatae aliquam, a eos neque! Minima iure qui, necessitatibus distinctio
                                soluta eius veritatis architecto, nobis itaque, autem dolore quia. Vel dolorem aperiam
                                inventore repudiandae modi aut.
                            </p>
                        </div>
                    </div>
                    <div class="comment-body p-3">
                        <div class="comment-body-header">
                            <div class="comment-user-info">
                                <a href="./profile.html" class="nav-link text-white font-weight-bold px-0">
                                    <div class="icon icon-shape shadow-primary text-center rounded-circle">
                                        <img src="../images/team-3.jpg" alt="Admin"
                                            class="icon icon-shape shadow-primary rounded-circle">
                                    </div>
                                </a>
                                <div class="info">
                                    <h6 class="mb-0">John Cena</h6>
                                    <small>Kolkata, 15 Minutes Ago</small>
                                </div>
                            </div>
                            <div class="manage-comments">
                                <a href="" class="btn btn-sm btn-danger py-2 px-3">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </div>
                        </div>
                        <div class="comment-user-message p-1">
                            <p class="text-sm text-secondary mb-0">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, sapiente. Nulla doloremque
                                alias corrupti beatae aliquam, a eos neque! Minima iure qui, necessitatibus distinctio
                                soluta eius veritatis architecto, nobis itaque, autem dolore quia. Vel dolorem aperiam
                                inventore repudiandae modi aut.
                            </p>
                        </div>
                    </div>
                    <div class="comment-body p-3">
                        <div class="comment-body-header">
                            <div class="comment-user-info">
                                <a href="./profile.html" class="nav-link text-white font-weight-bold px-0">
                                    <div class="icon icon-shape shadow-primary text-center rounded-circle">
                                        <img src="../images/team-3.jpg" alt="Admin"
                                            class="icon icon-shape shadow-primary rounded-circle">
                                    </div>
                                </a>
                                <div class="info">
                                    <h6 class="mb-0">John Cena</h6>
                                    <small>Kolkata, 15 Minutes Ago</small>
                                </div>
                            </div>
                            <div class="manage-comments">
                                <a href="" class="btn btn-sm btn-danger py-2 px-3">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </div>
                        </div>
                        <div class="comment-user-message p-1">
                            <p class="text-sm text-secondary mb-0">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, sapiente. Nulla doloremque
                                alias corrupti beatae aliquam, a eos neque! Minima iure qui, necessitatibus distinctio
                                soluta eius veritatis architecto, nobis itaque, autem dolore quia. Vel dolorem aperiam
                                inventore repudiandae modi aut.
                            </p>
                        </div>
                    </div>
                    <div class="comment-body p-3">
                        <div class="comment-body-header">
                            <div class="comment-user-info">
                                <a href="./profile.html" class="nav-link text-white font-weight-bold px-0">
                                    <div class="icon icon-shape shadow-primary text-center rounded-circle">
                                        <img src="../images/team-3.jpg" alt="Admin"
                                            class="icon icon-shape shadow-primary rounded-circle">
                                    </div>
                                </a>
                                <div class="info">
                                    <h6 class="mb-0">John Cena</h6>
                                    <small>Kolkata, 15 Minutes Ago</small>
                                </div>
                            </div>
                            <div class="manage-comments">
                                <a href="" class="btn btn-sm btn-danger py-2 px-3">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </div>
                        </div>
                        <div class="comment-user-message p-1">
                            <p class="text-sm text-secondary mb-0">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, sapiente. Nulla doloremque
                                alias corrupti beatae aliquam, a eos neque! Minima iure qui, necessitatibus distinctio
                                soluta eius veritatis architecto, nobis itaque, autem dolore quia. Vel dolorem aperiam
                                inventore repudiandae modi aut.
                            </p>
                        </div>
                    </div>
                    <div class="comment-body p-3">
                        <div class="comment-body-header">
                            <div class="comment-user-info">
                                <a href="./profile.html" class="nav-link text-white font-weight-bold px-0">
                                    <div class="icon icon-shape shadow-primary text-center rounded-circle">
                                        <img src="../images/team-3.jpg" alt="Admin"
                                            class="icon icon-shape shadow-primary rounded-circle">
                                    </div>
                                </a>
                                <div class="info">
                                    <h6 class="mb-0">John Cena</h6>
                                    <small>Kolkata, 15 Minutes Ago</small>
                                </div>
                            </div>
                            <div class="manage-comments">
                                <a href="" class="btn btn-sm btn-danger py-2 px-3">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </div>
                        </div>
                        <div class="comment-user-message p-1">
                            <p class="text-sm text-secondary mb-0">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, sapiente. Nulla doloremque
                                alias corrupti beatae aliquam, a eos neque! Minima iure qui, necessitatibus distinctio
                                soluta eius veritatis architecto, nobis itaque, autem dolore quia. Vel dolorem aperiam
                                inventore repudiandae modi aut.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Post Section -->
            <div class="col-lg-5 mb-4">
                <div class="card">
                    <div class="posts">
                        <div class="post">
                            <!-- User Info -->
                            <div class="post-head">
                                <div class="user-info">
                                    <a href="./profile.html" class="nav-link text-white font-weight-bold px-0">
                                        <div class="icon icon-shape shadow-primary text-center rounded-circle">
                                            <img src="../images/team-3.jpg" alt="Admin"
                                                class="icon icon-shape shadow-primary rounded-circle">
                                        </div>
                                    </a>
                                    <div class="info">
                                        <h6 class="mb-0">John Cena</h6>
                                        <small>Kolkata, 15 Minutes Ago</small>
                                    </div>
                                </div>
                                <div class="manage-post">
                                    <button class="btn btn-sm btn-danger mb-0">Delete</button>
                                </div>
                            </div>
                            <div class="post-bio">
                                <p class="text-sm mb-0 pt-2 px-3">
                                    <!-- #Luffy <br>
                        #One Piece -->
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, nulla? Cumque
                                    sequi error qui cum placeat tenetur nisi fugit cupiditate!
                                </p>
                            </div>
                            <!-- Main Post -->
                            <div class="post-body">
                                <!-- <img src="../images/feed-2.jpg"> -->
                                <video controls>
                                    <source src="../videos/demo-4.mp4" type="video/mp4">
                                </video>
                                <!-- <p class="text-sm text-secondary mb-0 py-1 px-2">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima cupiditate cum possimus qui quisquam? Assumenda asperiores doloribus et quasi corrupti?
                </p> -->
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Post Comments -->
            <div class="col-lg-7 mb-4">
                <div class="card" id="comment-card">
                    <div class="comment-head p-3">
                        <div class="user-info">
                            <a href="./profile.html" class="nav-link text-white font-weight-bold px-0">
                                <div class="icon icon-shape shadow-primary text-center rounded-circle">
                                    <img src="../images/team-3.jpg" alt="Admin"
                                        class="icon icon-shape shadow-primary rounded-circle">
                                </div>
                            </a>
                            <div class="info">
                                <h6 class="mb-0">John Cena</h6>
                                <small>Kolkata, 15 Minutes Ago</small>
                            </div>
                        </div>
                        <div class="manage-post">
                            <button class="btn btn-sm btn-dark mb-0">Don't Allow Comments</button>
                        </div>
                    </div>
                    <div class="comment-body p-3">
                        <div class="comment-body-header">
                            <div class="comment-user-info">
                                <a href="./profile.html" class="nav-link text-white font-weight-bold px-0">
                                    <div class="icon icon-shape shadow-primary text-center rounded-circle">
                                        <img src="../images/team-3.jpg" alt="Admin"
                                            class="icon icon-shape shadow-primary rounded-circle">
                                    </div>
                                </a>
                                <div class="info">
                                    <h6 class="mb-0">John Cena</h6>
                                    <small>Kolkata, 15 Minutes Ago</small>
                                </div>
                            </div>
                            <div class="manage-comments">
                                <a href="" class="btn btn-sm btn-danger py-2 px-3">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </div>
                        </div>
                        <div class="comment-user-message p-1">
                            <p class="text-sm text-secondary mb-0">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, sapiente. Nulla doloremque
                                alias corrupti beatae aliquam, a eos neque! Minima iure qui, necessitatibus distinctio
                                soluta eius veritatis architecto, nobis itaque, autem dolore quia. Vel dolorem aperiam
                                inventore repudiandae modi aut.
                            </p>
                        </div>
                    </div>
                    <div class="comment-body p-3">
                        <div class="comment-body-header">
                            <div class="comment-user-info">
                                <a href="./profile.html" class="nav-link text-white font-weight-bold px-0">
                                    <div class="icon icon-shape shadow-primary text-center rounded-circle">
                                        <img src="../images/team-3.jpg" alt="Admin"
                                            class="icon icon-shape shadow-primary rounded-circle">
                                    </div>
                                </a>
                                <div class="info">
                                    <h6 class="mb-0">John Cena</h6>
                                    <small>Kolkata, 15 Minutes Ago</small>
                                </div>
                            </div>
                            <div class="manage-comments">
                                <a href="" class="btn btn-sm btn-danger py-2 px-3">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </div>
                        </div>
                        <div class="comment-user-message p-1">
                            <p class="text-sm text-secondary mb-0">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, sapiente. Nulla doloremque
                                alias corrupti beatae aliquam, a eos neque! Minima iure qui, necessitatibus distinctio
                                soluta eius veritatis architecto, nobis itaque, autem dolore quia. Vel dolorem aperiam
                                inventore repudiandae modi aut.
                            </p>
                        </div>
                    </div>
                    <div class="comment-body p-3">
                        <div class="comment-body-header">
                            <div class="comment-user-info">
                                <a href="./profile.html" class="nav-link text-white font-weight-bold px-0">
                                    <div class="icon icon-shape shadow-primary text-center rounded-circle">
                                        <img src="../images/team-3.jpg" alt="Admin"
                                            class="icon icon-shape shadow-primary rounded-circle">
                                    </div>
                                </a>
                                <div class="info">
                                    <h6 class="mb-0">John Cena</h6>
                                    <small>Kolkata, 15 Minutes Ago</small>
                                </div>
                            </div>
                            <div class="manage-comments">
                                <a href="" class="btn btn-sm btn-danger py-2 px-3">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </div>
                        </div>
                        <div class="comment-user-message p-1">
                            <p class="text-sm text-secondary mb-0">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, sapiente. Nulla doloremque
                                alias corrupti beatae aliquam, a eos neque! Minima iure qui, necessitatibus distinctio
                                soluta eius veritatis architecto, nobis itaque, autem dolore quia. Vel dolorem aperiam
                                inventore repudiandae modi aut.
                            </p>
                        </div>
                    </div>
                    <div class="comment-body p-3">
                        <div class="comment-body-header">
                            <div class="comment-user-info">
                                <a href="./profile.html" class="nav-link text-white font-weight-bold px-0">
                                    <div class="icon icon-shape shadow-primary text-center rounded-circle">
                                        <img src="../images/team-3.jpg" alt="Admin"
                                            class="icon icon-shape shadow-primary rounded-circle">
                                    </div>
                                </a>
                                <div class="info">
                                    <h6 class="mb-0">John Cena</h6>
                                    <small>Kolkata, 15 Minutes Ago</small>
                                </div>
                            </div>
                            <div class="manage-comments">
                                <a href="" class="btn btn-sm btn-danger py-2 px-3">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </div>
                        </div>
                        <div class="comment-user-message p-1">
                            <p class="text-sm text-secondary mb-0">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, sapiente. Nulla doloremque
                                alias corrupti beatae aliquam, a eos neque! Minima iure qui, necessitatibus distinctio
                                soluta eius veritatis architecto, nobis itaque, autem dolore quia. Vel dolorem aperiam
                                inventore repudiandae modi aut.
                            </p>
                        </div>
                    </div>
                    <div class="comment-body p-3">
                        <div class="comment-body-header">
                            <div class="comment-user-info">
                                <a href="./profile.html" class="nav-link text-white font-weight-bold px-0">
                                    <div class="icon icon-shape shadow-primary text-center rounded-circle">
                                        <img src="../images/team-3.jpg" alt="Admin"
                                            class="icon icon-shape shadow-primary rounded-circle">
                                    </div>
                                </a>
                                <div class="info">
                                    <h6 class="mb-0">John Cena</h6>
                                    <small>Kolkata, 15 Minutes Ago</small>
                                </div>
                            </div>
                            <div class="manage-comments">
                                <a href="" class="btn btn-sm btn-danger py-2 px-3">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </div>
                        </div>
                        <div class="comment-user-message p-1">
                            <p class="text-sm text-secondary mb-0">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, sapiente. Nulla doloremque
                                alias corrupti beatae aliquam, a eos neque! Minima iure qui, necessitatibus distinctio
                                soluta eius veritatis architecto, nobis itaque, autem dolore quia. Vel dolorem aperiam
                                inventore repudiandae modi aut.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Post Section -->
            <div class="col-lg-5 mb-4">
                <div class="card">
                    <div class="posts">
                        <div class="post">
                            <!-- User Info -->
                            <div class="post-head">
                                <div class="user-info">
                                    <a href="./profile.html" class="nav-link text-white font-weight-bold px-0">
                                        <div class="icon icon-shape shadow-primary text-center rounded-circle">
                                            <img src="../images/team-3.jpg" alt="Admin"
                                                class="icon icon-shape shadow-primary rounded-circle">
                                        </div>
                                    </a>
                                    <div class="info">
                                        <h6 class="mb-0">John Cena</h6>
                                        <small>Kolkata, 15 Minutes Ago</small>
                                    </div>
                                </div>
                                <div class="manage-post">
                                    <button class="btn btn-sm btn-danger mb-0">Delete</button>
                                </div>
                            </div>
                            <div class="post-bio">
                                <p class="text-sm mb-0 pt-2 px-3">
                                    <!-- #Luffy <br>
                        #One Piece -->
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, nulla? Cumque
                                    sequi error qui cum placeat tenetur nisi fugit cupiditate!
                                </p>
                            </div>
                            <!-- Main Post -->
                            <div class="post-body">
                                <!-- <img src="../images/feed-2.jpg"> -->
                                <video controls>
                                    <source src="../videos/demo-2.mp4" type="video/mp4">
                                </video>
                                <!-- <p class="text-sm text-secondary mb-0 py-1 px-2">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima cupiditate cum possimus qui quisquam? Assumenda asperiores doloribus et quasi corrupti?
                </p> -->
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Post Comments -->
            <div class="col-lg-7 mb-4">
                <div class="card" id="comment-card">
                    <div class="comment-head p-3">
                        <div class="user-info">
                            <a href="./profile.html" class="nav-link text-white font-weight-bold px-0">
                                <div class="icon icon-shape shadow-primary text-center rounded-circle">
                                    <img src="../images/team-3.jpg" alt="Admin"
                                        class="icon icon-shape shadow-primary rounded-circle">
                                </div>
                            </a>
                            <div class="info">
                                <h6 class="mb-0">John Cena</h6>
                                <small>Kolkata, 15 Minutes Ago</small>
                            </div>
                        </div>
                        <div class="manage-post">
                            <button class="btn btn-sm btn-dark mb-0">Don't Allow Comments</button>
                        </div>
                    </div>
                    <div class="comment-body p-3">
                        <div class="comment-body-header">
                            <div class="comment-user-info">
                                <a href="./profile.html" class="nav-link text-white font-weight-bold px-0">
                                    <div class="icon icon-shape shadow-primary text-center rounded-circle">
                                        <img src="../images/team-3.jpg" alt="Admin"
                                            class="icon icon-shape shadow-primary rounded-circle">
                                    </div>
                                </a>
                                <div class="info">
                                    <h6 class="mb-0">John Cena</h6>
                                    <small>Kolkata, 15 Minutes Ago</small>
                                </div>
                            </div>
                            <div class="manage-comments">
                                <a href="" class="btn btn-sm btn-danger py-2 px-3">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </div>
                        </div>
                        <div class="comment-user-message p-1">
                            <p class="text-sm text-secondary mb-0">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, sapiente. Nulla doloremque
                                alias corrupti beatae aliquam, a eos neque! Minima iure qui, necessitatibus distinctio
                                soluta eius veritatis architecto, nobis itaque, autem dolore quia. Vel dolorem aperiam
                                inventore repudiandae modi aut.
                            </p>
                        </div>
                    </div>
                    <div class="comment-body p-3">
                        <div class="comment-body-header">
                            <div class="comment-user-info">
                                <a href="./profile.html" class="nav-link text-white font-weight-bold px-0">
                                    <div class="icon icon-shape shadow-primary text-center rounded-circle">
                                        <img src="../images/team-3.jpg" alt="Admin"
                                            class="icon icon-shape shadow-primary rounded-circle">
                                    </div>
                                </a>
                                <div class="info">
                                    <h6 class="mb-0">John Cena</h6>
                                    <small>Kolkata, 15 Minutes Ago</small>
                                </div>
                            </div>
                            <div class="manage-comments">
                                <a href="" class="btn btn-sm btn-danger py-2 px-3">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </div>
                        </div>
                        <div class="comment-user-message p-1">
                            <p class="text-sm text-secondary mb-0">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, sapiente. Nulla doloremque
                                alias corrupti beatae aliquam, a eos neque! Minima iure qui, necessitatibus distinctio
                                soluta eius veritatis architecto, nobis itaque, autem dolore quia. Vel dolorem aperiam
                                inventore repudiandae modi aut.
                            </p>
                        </div>
                    </div>
                    <div class="comment-body p-3">
                        <div class="comment-body-header">
                            <div class="comment-user-info">
                                <a href="./profile.html" class="nav-link text-white font-weight-bold px-0">
                                    <div class="icon icon-shape shadow-primary text-center rounded-circle">
                                        <img src="../images/team-3.jpg" alt="Admin"
                                            class="icon icon-shape shadow-primary rounded-circle">
                                    </div>
                                </a>
                                <div class="info">
                                    <h6 class="mb-0">John Cena</h6>
                                    <small>Kolkata, 15 Minutes Ago</small>
                                </div>
                            </div>
                            <div class="manage-comments">
                                <a href="" class="btn btn-sm btn-danger py-2 px-3">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </div>
                        </div>
                        <div class="comment-user-message p-1">
                            <p class="text-sm text-secondary mb-0">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, sapiente. Nulla doloremque
                                alias corrupti beatae aliquam, a eos neque! Minima iure qui, necessitatibus distinctio
                                soluta eius veritatis architecto, nobis itaque, autem dolore quia. Vel dolorem aperiam
                                inventore repudiandae modi aut.
                            </p>
                        </div>
                    </div>
                    <div class="comment-body p-3">
                        <div class="comment-body-header">
                            <div class="comment-user-info">
                                <a href="./profile.html" class="nav-link text-white font-weight-bold px-0">
                                    <div class="icon icon-shape shadow-primary text-center rounded-circle">
                                        <img src="../images/team-3.jpg" alt="Admin"
                                            class="icon icon-shape shadow-primary rounded-circle">
                                    </div>
                                </a>
                                <div class="info">
                                    <h6 class="mb-0">John Cena</h6>
                                    <small>Kolkata, 15 Minutes Ago</small>
                                </div>
                            </div>
                            <div class="manage-comments">
                                <a href="" class="btn btn-sm btn-danger py-2 px-3">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </div>
                        </div>
                        <div class="comment-user-message p-1">
                            <p class="text-sm text-secondary mb-0">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, sapiente. Nulla doloremque
                                alias corrupti beatae aliquam, a eos neque! Minima iure qui, necessitatibus distinctio
                                soluta eius veritatis architecto, nobis itaque, autem dolore quia. Vel dolorem aperiam
                                inventore repudiandae modi aut.
                            </p>
                        </div>
                    </div>
                    <div class="comment-body p-3">
                        <div class="comment-body-header">
                            <div class="comment-user-info">
                                <a href="./profile.html" class="nav-link text-white font-weight-bold px-0">
                                    <div class="icon icon-shape shadow-primary text-center rounded-circle">
                                        <img src="../images/team-3.jpg" alt="Admin"
                                            class="icon icon-shape shadow-primary rounded-circle">
                                    </div>
                                </a>
                                <div class="info">
                                    <h6 class="mb-0">John Cena</h6>
                                    <small>Kolkata, 15 Minutes Ago</small>
                                </div>
                            </div>
                            <div class="manage-comments">
                                <a href="" class="btn btn-sm btn-danger py-2 px-3">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </div>
                        </div>
                        <div class="comment-user-message p-1">
                            <p class="text-sm text-secondary mb-0">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, sapiente. Nulla doloremque
                                alias corrupti beatae aliquam, a eos neque! Minima iure qui, necessitatibus distinctio
                                soluta eius veritatis architecto, nobis itaque, autem dolore quia. Vel dolorem aperiam
                                inventore repudiandae modi aut.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection