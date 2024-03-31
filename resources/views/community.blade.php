@extends('layouts.mainLayout')

@section('title', 'Community')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/community.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<style>
    .bg-grey {
        background-color: rgba(238, 240, 242, 1)
    }

    .post {
        max-height: 500px;
    }

    .post img {
        height: 100%;
        width: 100%;
        object-fit: contain;
        object-position: center;
    }
</style>
@endpush

@section('content')
<main style="background-color: #eff2f6">
    <div class="container py-4">
        <div class="row">
            {{-- Left Sidebar --}}
            <div class="d-none d-lg-block col-lg-3">
                <!-- Navbar START-->
                <nav class="navbar navbar-expand-lg mx-0 pt-0">
                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasSideNavbar">
                        <!-- Offcanvas header -->
                        <div class="offcanvas-header">
                            <button type="button" class="btn-close text-reset ms-auto" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>

                        <!-- Offcanvas body -->
                        <div class="offcanvas-body d-block px-2 px-lg-0">
                            <!-- Card START -->
                            <div class="card overflow-hidden">
                                <!-- Cover image -->
                                {{-- <div class="h-50px"
                                    style="background-image:url(assets/images/bg/01.jpg); background-position: center; background-size: cover; background-repeat: no-repeat;">
                                </div> --}}
                                {{-- <div class="w-100"
                                    style="background-image:url({{ asset('images/bg-profile.jpg') }}); background-position: center; background-size: cover; background-repeat: no-repeat;height: 50px;">
                                </div> --}}
                                <!-- Card body START -->
                                <div class="card-body pt-2">
                                    <div class="text-center">
                                        <!-- Avatar -->
                                        <div class="avatar avatar-lg mt-n5 mb-3">
                                            <a href="#">
                                                <img class="avatar-img rounded border border-white border-3"
                                                    src="{{ auth()->user()->getProfileUrl() }}" alt="Profile Pic"
                                                    width="72">
                                            </a>
                                        </div>
                                        <!-- Info -->
                                        <h5 class="mb-0">{{ auth()->user()->name }}</h5>
                                        <small>{{ auth()->user()->email }}</small>
                                        <p class="mt-3">{{ auth()->user()->bio ?? 'Bio is Empty'}}</p>

                                        <!-- User stat START -->
                                        <div class="hstack gap-2 gap-xl-3 justify-content-center">
                                            <!-- User stat item -->
                                            <div>
                                                <h6 class="mb-0">{{ auth()->user()->posts->count() }}</h6>
                                                <small>Post</small>
                                            </div>
                                            <!-- Divider -->
                                            <div class="vr"></div>
                                            <!-- User stat item -->
                                            <div>
                                                <h6 class="mb-0">{{ auth()->user()->followers }}</h6>
                                                <small>Followers</small>
                                            </div>
                                            <!-- Divider -->
                                            <div class="vr"></div>
                                            <!-- User stat item -->
                                            <div>
                                                <h6 class="mb-0">{{ auth()->user()->following }}</h6>
                                                <small>Following</small>
                                            </div>
                                        </div>
                                        <!-- User stat END -->
                                    </div>
                                </div>
                                <!-- Card body END -->
                                <!-- Card footer -->
                                <div class="card-footer text-center py-2">
                                    <a class="link-primary text-decoration-none"
                                        href="{{ route('user.show', auth()->user()->id )}}">View Profile </a>
                                </div>
                            </div>
                            <!-- Card END -->
                        </div>
                    </div>
                </nav>
                <!-- Navbar END-->
            </div>
            {{-- Middle Section --}}
            <div class="col-lg-6">
                {{-- Share your Thoughts --}}
                <div class="card card-body">
                    <div class="d-flex mb-3">
                        <!-- Avatar -->
                        <div class="me-2">
                            <a href="#"> <img class="avatar-sm rounded-circle"
                                    src="{{ auth()->user()->getProfileUrl() }}" alt="" width="50px"> </a>
                        </div>
                        <!-- Post input -->
                        <form class="w-100">
                            <textarea class="form-control" id="post-message" rows="3"
                                placeholder="Share your thoughts..." required></textarea>
                        </form>
                    </div>
                    <!-- Share feed toolbar START -->
                    <ul class="nav nav-pills nav-stack small fw-normal gap-2">
                        <li class="nav-item">
                            <a class="nav-link bg-grey py-1 px-2 mb-0" href="#!" data-bs-toggle="modal"
                                data-bs-target="#feedActionPhoto"> <i
                                    class="bi bi-image-fill text-success pe-2"></i>Photo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link bg-grey py-1 px-2 mb-0" href="#!" data-bs-toggle="modal"
                                data-bs-target="#feedActionVideo"> <i
                                    class="bi bi-camera-reels-fill text-info pe-2"></i>Video</a>
                        </li>
                        <li class="nav-item dropdown ms-lg-auto">
                            <button id="sharePostBtn" class="btn btn-sm btn-dark">Post</button>
                            <!-- Dropdown menu -->
                            {{-- <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="feedActionShare">
                                <li><a class="dropdown-item" href="#"> <i class="bi bi-envelope fa-fw pe-2"></i>Create a
                                        poll</a></li>
                                <li><a class="dropdown-item" href="#"> <i
                                            class="bi bi-bookmark-check fa-fw pe-2"></i>Ask a question </a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#"> <i
                                            class="bi bi-pencil-square fa-fw pe-2"></i>Help</a></li>
                            </ul> --}}
                        </li>
                    </ul>
                    <!-- Share feed toolbar END -->
                </div>
                <hr>
                <div class="mt-3">
                    {{-- Single Post --}}
                    @foreach ($posts as $post)
                        <div class="card mb-3">
                            <div class="px-3 pt-4 pb-2">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <img style="width:50px" class="me-2 avatar-sm rounded-circle"
                                            src="{{ $post->user->getProfileUrl() }}" alt="{{ $post->user->name }}">
                                        <div class="">
                                            <h5 class="card-title mb-0"><a href="{{ route('user.show', $post->user->id) }}"
                                                    class="text-decoration-none text-dark">{{ $post->user->name }}</a></h5>
                                            <p class="text-muted m-0">{{ $post->user->email }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <h5># {{ $post->title }}</h5>
                                @if ($post->type === "message")
                                    <p class="fs-6 fw-light text-muted">
                                        {{ $post->content }}
                                    </p>
                                @elseif ($post->type === "image")
                                    <div class="post">
                                        <img class="rounded" src="{{ asset('images/feed-1.jpg') }}" alt="Post">
                                    </div>
                                @elseif ($post->type === "video")
                                    <div class="post">
                                        <video src=""></video>
                                    </div>
                                @endif
                                <div class="d-flex justify-content-between my-3">
                                    <div>
                                        <form id="likePost">
                                            <input type="hidden" id="post-id" value="{{ $post->id }}">
                                            <button type="submit" class="fw-light nav-link text-danger fs-6"> <i
                                                    class="bi bi-heart-fill"></i> {{ $post->likes }} </button>
                                        </form>
                                    </div>
                                    <div>
                                        <span class="fs-6 fw-light text-muted"> <i class="bi bi-clock"></i> {{
                                            $post->created_at->diffForHumans() }} </span>
                                    </div>
                                </div>
                                {{-- Comments Section --}}
                                {{-- <div>
                                    <div class="mb-3">
                                        <textarea class="fs-6 form-control" rows="1"></textarea>
                                    </div>
                                    <div>
                                        <button class="btn btn-dark btn-sm"> Post Comment </button>
                                    </div>

                                    <hr>
                                    <div class="d-flex align-items-start">
                                        <img style="width:35px" class="me-2 avatar-sm rounded-circle"
                                            src="{{ asset('images/profile-6.jpg') }}" alt="Luigi Avatar">
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
                                </div> --}}
                            </div>
                        </div>
                    @endforeach
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
                        <h5 class="">Trainers to Follow</h5>
                    </div>
                    <div class="card-body">
                        @foreach ($trainers as $trainer)
                        <div class="hstack gap-2 mb-3 flex-wrap">
                            <div class="avatar">
                                <a href="{{ route('user.show', $trainer->id) }}">
                                    <img class="avatar-img rounded-circle" src="{{ $trainer->getProfileUrl() }}" alt=""
                                        width="50px">
                                </a>
                            </div>
                            <div class="d-flex flex-column justify-content-center align-items-start">
                                <a class="h6 mb-0 text-decoration-none" href="{{ route('user.show', $trainer->id) }}">{{
                                    substr($trainer->name, 0, 16) }}..</a>
                                <a class="mb-0 small text-muted text-decoration-none"
                                    href="{{ route('user.show', $trainer->id) }}">{{ substr($trainer->email, 0, 16)
                                    }}..</a>
                            </div>
                            <a class="btn btn-primary-soft rounded-circle icon-md ms-auto" href="#"><i
                                    class="bi bi-plus-lg"></i></a>
                        </div>
                        @endforeach
                        <div class="d-grid mt-3">
                            <a class="btn btn-sm btn-primary-soft" href="{{ route('trainers') }}">Show More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

@push('scripts')
<script src="{{ asset('plugins/jquery.js') }}"></script>
<script src="{{ asset('plugins/axios.js') }}"></script>
<script src="{{ asset('plugins/alert.js') }}"></script>
<script src="{{ asset('js/community.js') }}"></script>
@endpush