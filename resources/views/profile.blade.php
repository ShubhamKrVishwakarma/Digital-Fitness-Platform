@extends('layouts.mainLayout')

@section('title', 'Profile')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/community.css') }}">
@endpush

@section('content')
    @auth
        @if (session('alert'))
            <div id="success-message" class="alert alert-success mb-0">
                {{ session('alert') }}
            </div>
            <script>
                setTimeout(function() {
                    document.getElementById('success-message').style.opacity = '0';
                    setTimeout(function() {
                        document.getElementById('success-message').style.display = 'none';
                    }, 0);
                }, 3000);
            </script>
        @endif

        <div class="container-fluid" id="profile-body">
            <div class="container-fluid" id="upper-container">
                <div class="profile">
                    <div class="inner-profile">
                        <div class="img-container">
                            <div class="image">
                                <img src="{{ $user->getProfileUrl() }}" alt="Profile image" />
                                <span></span>
                            </div>
                        </div>
                        <div class="name-container">
                            <h3 class="text-capitalize">{{ $user->name }}</h3>
                            <span>{{ $user->role }}</span>
                        </div>
                    </div>
                    <div class="follow-details">
                        <div>
                            <h6>Followers</h6>
                            <span class="d-block text-center">{{ $user->followers }}</span>
                        </div>
                        <div>
                            <h6>Following</h6>
                            <span class="d-block text-center">{{ $user->following }}</span>
                        </div>
                        <div>
                            @if ($user->role === 'trainer')
                                <h6>Rating</h6>
                                <span class="d-block text-center">{{ $user->rating }}</span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid mb-4" id="lower-container">
                <div class="profile-nav">
                    @if (auth()->user()->id !== $user->id)
                        <div class="buttons-for-user">
                            @if (auth()->user()->hasSubscribed($user->id)|| $user->hasSubscribed(auth()->user()->id))
                                <button type="button" class="btn btn-primary" id="chat-button">Chat</button>
                            @else
                                @if ($user->role==="trainer" && auth()->user()->role!=="trainer")
                                    <a href="{{ route('pricing', $user->id) }}">
                                        <button type="button" class="btn btn-primary" id="chat-button">Subscribe</button>
                                    </a>
                                @endif
                            @endif
                            @if (auth()->user()->follows($user->id))
                                <form action="{{ route('user.unfollow') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="user-id" value="{{ $user->id }}">
                                    <button type="submit" class="btn btn-primary">Unfollow</button>
                                </form>
                            @else
                                <form action="{{ route('user.follow') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="user-id" value="{{ $user->id }}">
                                    <button type="submit" class="btn btn-primary">Follow</button>
                                </form>
                            @endif
                        </div>
                    @else
                        <div class="buttons-for-self">
                            <a href="{{ route('user.profile_edit', $user->id) }}">
                                <button type="button" id="edit" class="bttn bttn-primary">Edit</button>
                            </a>
                        </div>
                    @endif
                    <div class="profile-nav-items">
                        <a class="nav-item-links is-active" id="about" active-color="black">About</a>
                        @if ($user->hasPost($user->id))
                            <a class="nav-item-links" id="posts" active-color="black">Posts</a>
                        @endif
                        <span class="nav-indicator"></span>
                    </div>
                </div>
                <div class="content">
                    <div class="about" id="about-section">
                        <div class="about-content">
                            <ul>
                                <li>
                                    <b>Bio</b>
                                    @if ($user->bio != null)
                                        <p>{{ $user->bio }}</p>
                                    @else
                                        <p>Add a bio for your profile.</p>
                                    @endif
                                </li>
                                <li><i class="bi bi-person-circle"></i>
                                    @if ($user->gender == 'M')
                                        Male
                                    @elseif ($user->gender == 'F')
                                        Female
                                    @else
                                        Other
                                    @endif
                                </li>
                                @if ($user->city != null)
                                    <li><i class="bi bi-geo-alt-fill"></i> Lives in <b>{{ $user->city }}</b></li>
                                @endif
                                <li><i class="bi bi-clock-fill"></i> Joined on <b>{{ $user->created_at->format('d-m-Y') }}</b>
                                </li>
                                @if ($user->phone != null)
                                    <li><i class="bi bi-telephone-fill"></i> {{ $user->phone }}</li>
                                @endif
                                <li><i class="bi bi-chat-left-fill"></i> {{ $user->email }}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="post-container" id="post-section">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-md-7 py-4">
                                @forelse ($posts as $post)
                                    <div class="card mb-5">
                                        <div class="px-3 pt-4 pb-2">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="d-flex justify-content-center align-items-center">
                                                    <img style="width:50px" class="me-2 avatar-sm rounded-circle"
                                                        src="{{ $post->user->getProfileUrl() }}"
                                                        alt="{{ $post->user->name }}">
                                                    <div class="">
                                                        <h5 class="card-title mb-0"><a
                                                                href="{{ route('user.show', $post->user->id) }}"
                                                                class="text-decoration-none text-dark">{{ $post->user->name }}</a>
                                                        </h5>
                                                        <p class="text-muted m-0">{{ $post->user->email }}</p>
                                                    </div>
                                                </div>
                                                <!-- Post dropdown -->
                                                <div class="dropdown">
                                                    <a class="text-dark btn btn-secondary-soft-hover py-1 px-2"
                                                        id="cardFeedAction" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="bi bi-three-dots-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end"
                                                        aria-labelledby="cardFeedAction">
                                                        <li><a class="dropdown-item" href="{{ route('post', $post->id) }}">View
                                                                Post</a></li>
                                                        @if (auth()->user()->id === $post->user_id)
                                                            <li>
                                                                <form action="{{ route('post.delete', $post->id) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button class="dropdown-item" type="submit">Delete
                                                                        Post</button>
                                                                </form>
                                                            </li>
                                                        @endif
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h6 class="text-dark">{{ $post->title }}</h6>
                                            @if ($post->type === 'message')
                                                <p class="fs-6 fw-light text-muted">
                                                    {{ $post->content }}
                                                </p>
                                            @elseif ($post->type === 'image')
                                                <div class="post">
                                                    <img class="rounded" src="{{ $post->getPostUrl() }}" alt="Post">
                                                </div>
                                            @elseif ($post->type === 'video')
                                                <div class="post">
                                                    <video controls>
                                                        <source src="{{ $post->getPostUrl() }}" type="video/mp4">
                                                    </video>
                                                </div>
                                            @endif
                                            {{-- Post Like --}}
                                            <div class="d-flex justify-content-between my-3">
                                                <div>
                                                    @if ($post->postLiked($post))
                                                        <form action="{{ route('post.unlike', $post->id) }}" method="POST">
                                                            @csrf
                                                            <button type="submit"
                                                                class="fw-light text-danger nav-link fs-6"><i
                                                                    class="bi bi-heart-fill"></i>
                                                                {{ $post->totalLikes($post->id) }}</button>
                                                        </form>
                                                    @else
                                                        <form action="{{ route('post.like', $post->id) }}" method="POST">
                                                            @csrf
                                                            <button type="submit"
                                                                class="fw-light text-danger nav-link fs-6"><i
                                                                    class="bi bi-heart"></i>
                                                                {{ $post->totalLikes($post->id) }}</button>
                                                        </form>
                                                    @endif
                                                    {{-- @guest
                                                        <a href="{{ route('login') }}" class="fw-light text-danger nav-link fs-6"><i
                                                                class="bi bi-heart"></i> {{ $post->likes->count() }}</a>
                                                    @endguest --}}
                                                </div>
                                                <div>
                                                    <span class="fs-6 fw-light text-muted"> <i class="bi bi-clock"></i>
                                                        {{ $post->created_at->diffForHumans() }} </span>
                                                </div>
                                            </div>
                                            {{-- Comments Section --}}
                                            <div>
                                                @if (!$post->commentExists($post->id, auth()->user()->id))
                                                    <form action="{{ route('post.comment') }}" method="POST">
                                                        @csrf
                                                        <div class="mb-3">
                                                            <input type="hidden" name="post-id"
                                                                value="{{ $post->id }}">
                                                            <textarea class="fs-6 form-control mb-3" rows="1" name="post-comment" required></textarea>
                                                            @error('post-comment')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                            <button class="btn btn-dark btn-sm">Add Comment</button>
                                                        </div>
                                                    </form>
                                                @endif
                                                @foreach ($post->comments()->orderBy('created_at', 'DESC')->take(2)->get() as $comment)
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
                                                                <small
                                                                    class="fs-6 fw-light text-muted">{{ $comment->created_at->diffForHumans() }}</small>
                                                            </div>
                                                            <div class="d-flex">
                                                                <p class="fs-6 mt-3 fw-light text-dark">
                                                                    {{ $comment->comment }}
                                                                </p>
                                                                {{-- @auth --}}
                                                                @if ($comment->user_id === auth()->user()->id)
                                                                    <div class="ms-auto my-auto">
                                                                        <form action="{{ route('post.uncomment') }}"
                                                                            method="POST">
                                                                            @method('DELETE')
                                                                            @csrf
                                                                            <input type="hidden" name="post-id"
                                                                                value="{{ $post->id }}" />
                                                                            <button class="btn btn-sm btn-danger m-0"><i
                                                                                    class="bi bi-trash3-fill"></i></button>
                                                                        </form>
                                                                    </div>
                                                                @endif
                                                                {{-- @endauth --}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                                @if ($post->comments->count() > 2)
                                                    <hr>
                                                    <div class="d-grid">
                                                        <a class="btn btn-sm btn-primary-soft text-primary fw-medium"
                                                            href="{{ route('post', $post->id) }}">View All Comments</a>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <div class="d-flex flex-column align-items-center justify-content-center">
                                        <div>No posts yet</div>
                                    </div>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endauth
    @guest
        <div class="container-fluid" id="profile-body">
            <div class="container-fluid" id="upper-container">
                <div class="profile">
                    <div class="inner-profile">
                        <div class="img-container">
                            <div class="image">
                                <img src="{{ $user->getProfileUrl() }}" alt="Profile image" />
                                <span></span>
                            </div>
                        </div>
                        <div class="name-container">
                            <h3 class="text-capitalize">{{ $user->name }}</h3>
                            <span>{{ $user->role }}</span>
                        </div>
                    </div>
                    <div class="follow-details">
                        <div>
                            <h6>Followers</h6>
                            <span>{{ $user->followers }}</span>
                        </div>
                        <div>
                            <h6>Following</h6>
                            <span>{{ $user->following }}</span>
                        </div>
                        <div>
                            @if ($user->role == 'member')
                                <h6>Posts</h6>
                                <span>0</span>
                            @else
                                @if ($user->rating != null)
                                    <h6>Rating</h6>
                                    <span>{{ $user->rating }}</span>
                                @else
                                    <h6>Rating</h6>
                                    <span>0</span>
                                @endif
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid mb-4" id="lower-container">
                <div class="profile-nav">
                    <div class="buttons-for-user"></div>{{-- for-design --}}
                    <div class="profile-nav-items">
                        <a class="nav-item-links is-active " id="about" active-color="black">About</a>
                        @if ($user->hasPost($user->id))
                            <a class="nav-item-links " id="posts" active-color="black">Posts</a>
                        @endif
                        <span class="nav-indicator"></span>
                    </div>
                </div>
                <div class="content">
                    <div class="about" id="about-section">
                        <div class="about-content">
                            <ul>
                                <li>
                                    <b>Bio</b>
                                    @if ($user->bio != null)
                                        <p></p>
                                    @else
                                        <p>Add a bio for your profile.</p>
                                    @endif
                                </li>
                                <li><i class="bi bi-person-circle"></i>
                                    @if ($user->gender == 'M')
                                        Male
                                    @elseif ($user->gender == 'F')
                                        Female
                                    @else
                                        Other
                                    @endif
                                </li>
                                @if ($user->city != null)
                                    <li><i class="bi bi-geo-alt-fill"></i> Lives in <b>{{ $user->city }}</b></li>
                                @endif
                                <li><i class="bi bi-clock-fill"></i> Joined on <b>{{ $user->created_at }}</b></li>
                                @if ($user->phone != null)
                                    <li><i class="bi bi-telephone-fill"></i> {{ $user->phone }}</li>
                                @endif
                                <li><i class="bi bi-chat-left-fill"></i> {{ $user->email }}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="post-container" id="post-section">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-md-7 py-4">
                                @forelse ($posts as $post)
                                    <div class="card mb-5">
                                        <div class="px-3 pt-4 pb-2">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="d-flex justify-content-center align-items-center">
                                                    <img style="width:50px" class="me-2 avatar-sm rounded-circle"
                                                        src="{{ $post->user->getProfileUrl() }}"
                                                        alt="{{ $post->user->name }}">
                                                    <div class="">
                                                        <h5 class="card-title mb-0"><a
                                                                href="{{ route('user.show', $post->user->id) }}"
                                                                class="text-decoration-none text-dark">{{ $post->user->name }}</a>
                                                        </h5>
                                                        <p class="text-muted m-0">{{ $post->user->email }}</p>
                                                    </div>
                                                </div>
                                                <!-- Post dropdown -->
                                                <div class="dropdown">
                                                    <a class="text-dark btn btn-secondary-soft-hover py-1 px-2"
                                                        id="cardFeedAction" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="bi bi-three-dots-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end"
                                                        aria-labelledby="cardFeedAction">
                                                        <li><a class="dropdown-item"
                                                                href="{{ route('post', $post->id) }}">View
                                                                Post</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h6 class="text-dark">{{ $post->title }}</h6>
                                            @if ($post->type === 'message')
                                                <p class="fs-6 fw-light text-muted">
                                                    {{ $post->content }}
                                                </p>
                                            @elseif ($post->type === 'image')
                                                <div class="post">
                                                    <img class="rounded" src="{{ $post->getPostUrl() }}" alt="Post">
                                                </div>
                                            @elseif ($post->type === 'video')
                                                <div class="post">
                                                    <video controls>
                                                        <source src="{{ $post->getPostUrl() }}" type="video/mp4">
                                                    </video>
                                                </div>
                                            @endif
                                            {{-- Post Like --}}
                                            <div class="d-flex justify-content-between my-3">
                                                <div>
                                                    {{-- @guest --}}
                                                    <a href="{{ route('login') }}"
                                                        class="fw-light text-danger nav-link fs-6"><i class="bi bi-heart"></i>
                                                        {{ $post->likes->count() }}</a>
                                                    {{-- @endguest --}}
                                                </div>
                                                <div>
                                                    <span class="fs-6 fw-light text-muted"> <i class="bi bi-clock"></i>
                                                        {{ $post->created_at->diffForHumans() }} </span>
                                                </div>
                                            </div>
                                            {{-- Comments Section --}}
                                            <div>
                                                @foreach ($post->comments()->orderBy('created_at', 'DESC')->take(2)->get() as $comment)
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
                                                                <small
                                                                    class="fs-6 fw-light text-muted">{{ $comment->created_at->diffForHumans() }}</small>
                                                            </div>
                                                            <div class="d-flex">
                                                                <p class="fs-6 mt-3 fw-light text-dark">
                                                                    {{ $comment->comment }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                                @if ($post->comments->count() > 2)
                                                    <hr>
                                                    <div class="d-grid">
                                                        <a class="btn btn-sm btn-primary-soft text-primary fw-medium"
                                                            href="{{ route('post', $post->id) }}">View All Comments</a>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <div class="d-flex flex-column align-items-center justify-content-center">
                                        <div>No posts yet</div>
                                    </div>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endguest
@endsection

@push('scripts')
    <script src="{{ asset('js/profile.js') }}"></script>
@endpush
