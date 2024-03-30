@extends('layouts.mainLayout')

@section('title', 'Community')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/community.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<style>
    .bg-grey {
        background-color: rgba(238, 240, 242, 1)
    }
</style>
@endpush

@section('content')
<main style="background-color: #eff2f6">
    <div class="container py-4" >
        <div class="row">
            {{-- Left Sidebar --}}
            <div class="d-none d-lg-block col-lg-3">
                <!-- Advanced filter responsive toggler START -->
                    <div class="d-flex align-items-center d-lg-none">
                        <button class="border-0 bg-transparent" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSideNavbar" aria-controls="offcanvasSideNavbar">
                            <span class="btn btn-primary"><i class="fa-solid fa-sliders-h"></i></span>
                            <span class="h6 mb-0 fw-bold d-lg-none ms-2">My profile</span>
                        </button>
                    </div>
                    <!-- Advanced filter responsive toggler END -->
                    
                    <!-- Navbar START-->
                    <nav class="navbar navbar-expand-lg mx-0 pt-0"> 
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasSideNavbar">
                            <!-- Offcanvas header -->
                            <div class="offcanvas-header">
                                <button type="button" class="btn-close text-reset ms-auto" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
    
                            <!-- Offcanvas body -->
                            <div class="offcanvas-body d-block px-2 px-lg-0">
                                <!-- Card START -->
                                <div class="card overflow-hidden">
                                    <!-- Cover image -->
                                    {{-- <div class="h-50px" style="background-image:url(assets/images/bg/01.jpg); background-position: center; background-size: cover; background-repeat: no-repeat;"></div> --}}
                                    {{-- <div class="w-100" style="background-image:url({{ asset('images/bg-profile.jpg') }}); background-position: center; background-size: cover; background-repeat: no-repeat;height: 50px;"></div> --}}
                                        <!-- Card body START -->
                                        <div class="card-body pt-2">
                                            <div class="text-center">
                                            <!-- Avatar -->
                                            <div class="avatar avatar-lg mt-n5 mb-3">
                                                <a href="#">
                                                    <img class="avatar-img rounded border border-white border-3" src="{{ asset('images/profile-9.jpg') }}" alt="Profile Pic" width="72" >
                                                </a>
                                            </div>
                                            <!-- Info -->
                                            <h5 class="mb-0"> Sam Lanson </h5>
                                            <small>Web Developer at Webestica</small>
                                            <p class="mt-3">I'd love to change the world, but they won’t give me the source code.</p>
    
                                            <!-- User stat START -->
                                            <div class="hstack gap-2 gap-xl-3 justify-content-center">
                                                <!-- User stat item -->
                                                <div>
                                                    <h6 class="mb-0">256</h6>
                                                    <small>Post</small>
                                                </div>
                                                <!-- Divider -->
                                                <div class="vr"></div>
                                                <!-- User stat item -->
                                                <div>
                                                    <h6 class="mb-0">2.5K</h6>
                                                    <small>Followers</small>
                                                </div>
                                                <!-- Divider -->
                                                <div class="vr"></div>
                                                <!-- User stat item -->
                                                <div>
                                                    <h6 class="mb-0">365</h6>
                                                    <small>Following</small>
                                                </div>
                                            </div>
                                            <!-- User stat END -->
                                        </div>
    
                                        <!-- Divider -->
                                        {{-- <hr> --}}
    
                                        <!-- Side Nav START -->
                                        {{-- <ul class="nav nav-link-secondary flex-column fw-bold gap-2">
                                            <li class="nav-item">
                                                <a class="nav-link" href="my-profile.html"> <img class="me-2 h-20px fa-fw" src="assets/images/icon/home-outline-filled.svg" alt=""><span>Feed </span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="my-profile-connections.html"> <img class="me-2 h-20px fa-fw" src="assets/images/icon/person-outline-filled.svg" alt=""><span>Connections </span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="blog.html"> <img class="me-2 h-20px fa-fw" src="assets/images/icon/earth-outline-filled.svg" alt=""><span>Latest News </span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="events.html"> <img class="me-2 h-20px fa-fw" src="assets/images/icon/calendar-outline-filled.svg" alt=""><span>Events </span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="groups.html"> <img class="me-2 h-20px fa-fw" src="assets/images/icon/chat-outline-filled.svg" alt=""><span>Groups </span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="notifications.html"> <img class="me-2 h-20px fa-fw" src="assets/images/icon/notification-outlined-filled.svg" alt=""><span>Notifications </span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="settings.html"> <img class="me-2 h-20px fa-fw" src="assets/images/icon/cog-outline-filled.svg" alt=""><span>Settings </span></a>
                                            </li>
                                        </ul> --}}
                                        <!-- Side Nav END -->
                                    </div>
                                    <!-- Card body END -->
                                    <!-- Card footer -->
                                    <div class="card-footer text-center py-2">
                                        <a class="link-primary text-decoration-none" href="#">View Profile </a>
                                    </div>
                                </div>
                                <!-- Card END -->
                            </div>
                        </div>
                    </nav>
                    <!-- Navbar END-->
    
                {{-- <div class="card overflow-hidden">
                    <div class="card-body pt-3">
                        <ul class="nav nav-link-secondary flex-column fw-bold gap-2">
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="#">
                                    <span>Home</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span>Explore</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span>Feed</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span>Terms</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span>Support</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span>Settings</span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-footer text-center py-2">
                        <a class="btn btn-link btn-sm" href="#">View Profile </a>
                    </div>
                </div> --}}
            </div>
            {{-- Middle Section --}}
            <div class="col-lg-6">
                {{-- <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Idea created Successfully
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div> --}}
                {{-- <h4> Share yours ideas </h4> --}}
                {{-- <div class="row">
                    <div class="mb-3">
                        <textarea class="form-control" id="idea" rows="3"></textarea>
                    </div>
                    <div class="">
                        <button class="btn btn-dark"> Share </button>
                    </div>
                </div> --}}
                {{-- Share your Thoughts --}}
                <div class="card card-body">
                    <div class="d-flex mb-3">
                        <!-- Avatar -->
                        <div class="me-2">
                            <a href="#"> <img class="avatar-sm rounded-circle" src="{{ asset('images/profile-9.jpg') }}" alt="" width="50px"> </a>
                        </div>
                        <!-- Post input -->
                        <form class="w-100">
                            <textarea class="form-control" rows="3" placeholder="Share your thoughts..."></textarea>
                        </form>
                    </div>
                    <!-- Share feed toolbar START -->
                    <ul class="nav nav-pills nav-stack small fw-normal gap-2">
                        <li class="nav-item">
                            <a class="nav-link bg-grey py-1 px-2 mb-0" href="#!" data-bs-toggle="modal" data-bs-target="#feedActionPhoto"> <i class="bi bi-image-fill text-success pe-2"></i>Photo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link bg-grey py-1 px-2 mb-0" href="#!" data-bs-toggle="modal" data-bs-target="#feedActionVideo"> <i class="bi bi-camera-reels-fill text-info pe-2"></i>Video</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link bg-grey py-1 px-2 mb-0" data-bs-toggle="modal" data-bs-target="#modalCreateEvents"> <i class="bi bi-calendar2-event-fill text-danger pe-2"></i>Event </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link bg-grey py-1 px-2 mb-0" href="#!" data-bs-toggle="modal" data-bs-target="#modalCreateFeed"> <i class="bi bi-emoji-smile-fill text-warning pe-2"></i>Feeling /Activity</a>
                        </li>
                        <li class="nav-item dropdown ms-lg-auto">
                            <a class="nav-link bg-light py-1 px-2 mb-0" href="#" id="feedActionShare" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-three-dots"></i>
                            </a>
                            <!-- Dropdown menu -->
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="feedActionShare">
                                <li><a class="dropdown-item" href="#"> <i class="bi bi-envelope fa-fw pe-2"></i>Create a poll</a></li>
                                <li><a class="dropdown-item" href="#"> <i class="bi bi-bookmark-check fa-fw pe-2"></i>Ask a question </a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#"> <i class="bi bi-pencil-square fa-fw pe-2"></i>Help</a></li>
                            </ul>
                        </li>
                    </ul>
                    <!-- Share feed toolbar END -->
                </div>
                <hr>
                <div class="mt-3">
                    <div class="card">
                        <div class="px-3 pt-4 pb-2">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex justify-content-center align-items-center">
                                    <img style="width:50px" class="me-2 avatar-sm rounded-circle"
                                        src="https://api.dicebear.com/6.x/fun-emoji/svg?seed=Mario" alt="Mario Avatar">
                                    <div class="">
                                        <h5 class="card-title mb-0"><a href="#">Mario</a></h5>
                                        <p class="m-0">test@email.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            {{-- <p class="fs-6 fw-light text-muted">
                                comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes
                                of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of
                                ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum
                                dolor sit amet..", comes from a line in section 1.10.32.
                            </p> --}}
    
                            <div class="d-flex justify-content-between">
                                <div>
                                    <a href="#" class="fw-light nav-link fs-6"> <i class="bi bi-heart-fill"></i> 100 </a>
                                </div>
                                <div>
                                    <span class="fs-6 fw-light text-muted"> <i class="bi bi-clock"></i>
                                        3-5-2023 </span>
                                </div>
                            </div>
                            <div>
                                <div class="mb-3">
                                    <textarea class="fs-6 form-control" rows="1"></textarea>
                                </div>
                                <div>
                                    <button class="btn btn-primary btn-sm"> Post Comment </button>
                                </div>
    
                                <hr>
                                <div class="d-flex align-items-start">
                                    <img style="width:35px" class="me-2 avatar-sm rounded-circle"
                                        src="https://api.dicebear.com/6.x/fun-emoji/svg?seed=Luigi" alt="Luigi Avatar">
                                    <div class="w-100">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <h6 class="m-0">Luigi</h6>
                                                <p class="m-0">Member</p>
                                            </div>
                                            <small class="fs-6 fw-light text-muted"> 3 hour
                                                ago</small>
                                        </div>
                                        <p class="fs-6 mt-3 fw-light">
                                            and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and
                                            Evil)
                                            by
                                            Cicero, written in 45 BC. This book is a treatise on the theory of ethics,
                                            very
                                            popular during the Renaissan
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Right Section --}}
            <div class="d-none d-lg-block col-lg-3">
                <div class="card">
                    <div class="card-header pb-0 border-0">
                        <h5 class="">Search</h5>
                    </div>
                    <div class="card-body">
                        <input placeholder="Search People here.." class="form-control w-100" type="text" id="search">
                        <button class="btn btn-dark mt-2"> Search</button>
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-header pb-0 border-0">
                        <h5 class="">Friend Requests</h5>
                    </div>
                    <div class="card-body">
                        <div class="hstack gap-2 mb-3">
                            <div class="avatar">
                                <a href="#!"><img class="avatar-img rounded-circle" src="{{ asset('images/profile-12.jpg') }}" alt="" width="50px"></a>
                            </div>
                            <div class="overflow-hidden">
                                <a class="h6 mb-0" href="#!">Mario Brother</a>
                                <p class="mb-0 small text-truncate">@Mario</p>
                            </div>
                            <a class="btn btn-primary-soft rounded-circle icon-md ms-auto" href="#"><i
                                    class="fa-solid fa-plus"> </i></a>
                        </div>
                        <div class="hstack gap-2 mb-3">
                            <div class="avatar">
                                <a href="#!"><img class="avatar-img rounded-circle"
                                        src="{{ asset('images/profile-15.jpg') }}" alt="" width="50px"></a>
                            </div>
                            <div class="overflow-hidden">
                                <a class="h6 mb-0" href="#!">Mario Brother</a>
                                <p class="mb-0 small text-truncate">@Mario</p>
                            </div>
                            <a class="btn btn-primary-soft rounded-circle icon-md ms-auto" href="#"><i
                                    class="fa-solid fa-plus"> </i></a>
                        </div>
                        <div class="d-grid mt-3">
                            <a class="btn btn-sm btn-primary-soft" href="#!">Show More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection