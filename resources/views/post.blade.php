@extends('layouts.mainLayout')

@section('title', 'Post Info')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/community.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
@endpush

@section('content')

<main style="background-color: #eff2f6">
    <div class="container py-4">
        <div class="row">
            {{-- Left Sidebar --}}
            <div class="col-lg-3">
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
                                <!-- Card body START -->
                                <div class="card-body pt-2">
                                    <div class="text-center">
                                        <!-- Avatar -->
                                        @auth
                                        <div class="avatar avatar-lg mt-n5 mb-3">
                                            <a href="{{ route('user.show', auth()->user()->id) }}">
                                                <img class="avatar-img rounded border border-white border-3"
                                                    src="{{ auth()->user()->getProfileUrl() }}" alt="Profile Pic"
                                                    width="72">
                                            </a>
                                        </div>
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
                                        @endauth
                                        @guest
                                        <div class="avatar avatar-lg mt-n5 mb-3">
                                            <a>
                                                <img class="avatar-img rounded border border-white border-3"
                                                    src="{{ asset('images/profile/profile.jpg') }}" alt="Profile Pic"
                                                    width="72">
                                            </a>
                                        </div>
                                        <h5 class="mb-0">Guest</h5>
                                        @endguest
                                        <!-- Info -->

                                        <!-- User stat END -->
                                    </div>
                                </div>
                                <!-- Card body END -->
                                <!-- Card footer -->
                                @auth
                                <div class="card-footer text-center py-2">
                                    <a class="link-primary text-decoration-none"
                                        href="{{ route('user.show', auth()->user()->id )}}">View Profile </a>
                                </div>
                                @endauth
                                @guest
                                <div class="card-footer text-center py-2">
                                    <a class="link-primary text-decoration-none" href="{{ route('login')}}">Login</a>
                                </div>
                                @endguest
                            </div>
                            <!-- Card END -->
                        </div>
                    </div>
                </nav>
                <!-- Navbar END-->
            </div>
            {{-- Middle Section --}}
            <div class="col-lg-6">
                {{-- Feed Information --}}
                <div>
                    {{-- Single Post --}}
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
                                @auth
                                    @if (auth()->user()->id === $post->user_id)
                                        <div class="dropdown">
                                            <a class="text-dark btn btn-secondary-soft-hover py-1 px-2" id="cardFeedAction"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bi bi-three-dots-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="cardFeedAction">

                                                <li>
                                                    <form action="{{ route('post.delete', $post->id) }}" method="POST">
                                                        @csrf
                                                        @method("DELETE")
                                                        <button class="dropdown-item" type="submit">Delete Post</button>
                                                    </form>
                                                </li>
                                            </ul>
                                        </div>
                                    @endif
                                @endauth
                            </div>
                        </div>
                        <div class="card-body">
                            <h6>{{ $post->title }}</h6>
                            @if ($post->type === "message")
                            <p class="fs-6 fw-light text-muted">
                                {{ $post->content }}
                            </p>
                            @elseif ($post->type === "image")
                            <div class="post">
                                <img class="rounded" src="{{ $post->getPostUrl() }}" alt="Post">
                            </div>
                            @elseif ($post->type === "video")
                            <div class="post">
                                <video controls>
                                    <source src="{{ $post->getPostUrl() }}" type="video/mp4">
                                </video>
                            </div>
                            @endif
                            {{-- Post Like --}}
                            <div class="d-flex justify-content-between my-3">
                                <div>
                                    @auth
                                    @if ($post->postLiked($post))
                                    <form action="{{ route('post.unlike', $post->id) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="fw-light text-danger nav-link fs-6"><i
                                                class="bi bi-heart-fill"></i> {{ $post->totalLikes($post->id)
                                            }}</button>
                                    </form>
                                    @else
                                    <form action="{{ route('post.like', $post->id) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="fw-light text-danger nav-link fs-6"><i
                                                class="bi bi-heart"></i> {{ $post->totalLikes($post->id) }}</button>
                                    </form>
                                    @endif
                                    @endauth
                                    @guest
                                    <a href="{{ route('login') }}" class="fw-light text-danger nav-link fs-6"><i
                                            class="bi bi-heart"></i> {{ $post->likes->count() }}</a>
                                    @endguest
                                </div>
                                <div>
                                    <span class="fs-6 fw-light text-muted"> <i class="bi bi-clock"></i> {{
                                        $post->created_at->diffForHumans() }} </span>
                                </div>
                            </div>
                            {{-- Comments Section --}}
                            <div>
                                @auth
                                @if (!$post->commentExists($post->id, auth()->user()->id))
                                <form action="{{ route('post.comment') }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <input type="hidden" name="post-id" value="{{ $post->id }}">
                                        <textarea class="fs-6 form-control mb-3" rows="1" name="post-comment"
                                            required></textarea>
                                        @error('post-comment')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        <button class="btn btn-dark btn-sm">Add Comment</button>
                                    </div>
                                </form>
                                @endif
                                @endauth
                                {{-- @foreach ($post->comments as $comment) --}}
                                @foreach ($post->comments()->orderBy('created_at', 'DESC')->get() as $comment)
                                <hr>
                                <div class="d-flex align-items-start">
                                    <img style="width:35px" class="me-2 avatar-sm rounded-circle"
                                        src="{{ $comment->user->getProfileUrl() }}" alt="Luigi Avatar">
                                    <div class="w-100">
                                        <div class="d-flex justify-content-between">
                                            <a href="{{ route('user.show', $comment->user->id) }}"
                                                class="mt-2 text-dark text-decoration-none">
                                                <h6 class="m-0">{{ $comment->user->name }}</h6>
                                            </a>
                                            <small class="fs-6 fw-light text-muted">{{
                                                $comment->created_at->diffForHumans() }}</small>
                                        </div>
                                        <div class="d-flex">
                                            <p class="fs-6 mt-3 fw-light">
                                                {{ $comment->comment }}
                                            </p>
                                            @auth
                                            @if ($comment->user_id === auth()->user()->id)
                                            <div class="ms-auto my-auto">
                                                <form action="{{ route('post.uncomment') }}" method="POST">
                                                    @method("DELETE")
                                                    @csrf
                                                    <input type="hidden" name="post-id" value="{{ $post->id }}" />
                                                    <button class="btn btn-sm btn-danger m-0"><i
                                                            class="bi bi-trash3-fill"></i></button>
                                                </form>
                                            </div>
                                            @endif
                                            @endauth
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Right Section --}}
            <div class="d-none d-lg-block col-lg-3">
                <div class="card">
                    <div class="card-header pb-0 border-0">
                        <h5 class="">Liked By ({{ $post->likes->count() }})</h5>
                    </div>
                    <div class="card-body">
                        @foreach ($post->likes as $like)
                        <div class="hstack gap-2 mb-3 flex-wrap">
                            <div class="avatar">
                                <a href="{{ route('user.show', $like->user->id) }}">
                                    <img class="avatar-img rounded-circle" src="{{ $like->user->getProfileUrl() }}"
                                        width="50px">
                                </a>
                            </div>
                            <div class="d-flex flex-column justify-content-center align-items-start">
                                <a class="h6 mb-0 text-decoration-none"
                                    href="{{ route('user.show', $like->user->id) }}">{{
                                    substr($like->user->name, 0, 16) }}..</a>
                                <a class="mb-0 small text-muted text-decoration-none"
                                    href="{{ route('user.show', $like->user->id) }}">{{ substr($like->user->email, 0,
                                    16) }}..</a>
                            </div>
                            <div class="ms-auto me-2">
                                <span class="fw-light text-danger nav-link fs-6"><i class="bi bi-heart-fill"></i></span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

@push('scripts')
@if(session('alert'))
  <script>
      Swal.fire({
        position: "top",
        icon: "success",
        title: "{{ session('alert') }}",
        showConfirmButton: false,
        timer: 1200
      });
  </script>
@endif