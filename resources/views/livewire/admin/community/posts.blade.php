<div>
    @foreach ($posts as $post)
        <div wire:key='{{ $post->id }}' class="row mt-4">
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
                                            <img src="{{ $post->user->getProfileUrl() }}" alt="{{ $post->name }}"
                                                class="icon icon-shape shadow-primary rounded-circle">
                                        </div>
                                    </a>
                                    <div class="info">
                                        <h6 class="mb-0">{{ $post->user->name }}</h6>
                                        <small>{{ $post->user->email }}</small>
                                    </div>
                                </div>
                                <div class="manage-post">
                                    <button class="btn btn-sm btn-danger mb-0">Delete</button>
                                </div>
                            </div>
                            <div class="post-bio">
                                <p class="text-sm mb-0 text-secondary pt-2 px-3">
                                    {{ $post->title }}
                                </p>
                            </div>
                            <!-- Main Post -->
                            <div class="post-body">
                                @if ($post->type === "image")
                                    <img src="{{ url('storage/posts') . '/' . $post->content }}"> 
                                @elseif ($post->type === "video")
                                    <video controls>
                                        <source src="{{ url('storage/posts') . '/' . $post->content }}" type="video/mp4">
                                    </video>
                                @else
                                    <p class="mb-0 py-1 px-2">
                                        {{ $post->content }}
                                    </p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Post Section End -->

            <!-- Post Comments -->
            <div class="col-lg-7 mb-4">
                <div class="card" id="comment-card">
                    <div class="comment-head p-3">
                        <div class="user-info">
                            <a href="./profile.html" class="nav-link text-white font-weight-bold px-0">
                                <div class="icon icon-shape shadow-primary text-center rounded-circle">
                                    <img src="{{ $post->user->getProfileUrl() }}" alt="{{ $post->user->name }}"
                                        class="icon icon-shape shadow-primary rounded-circle">
                                </div>
                            </a>
                            <div class="info">
                                <h6 class="mb-0">{{ $post->user->name }}</h6>
                                <small>{{ $post->created_at->diffForHumans() }}</small>
                            </div>
                        </div>
                        <div class="manage-post">
                            <button class="btn btn-sm btn-dark mb-0">Delete All Comments</button>
                        </div>
                    </div>
                    <!-- Comment -->
                    @foreach ($post->comments as $comment)
                        <div wire:key='{{ $comment->user_id }}' class="comment-body p-3">
                            <div class="comment-body-header">
                                <div class="comment-user-info">
                                    <a href="./profile.html" class="nav-link text-white font-weight-bold px-0">
                                        <div class="icon icon-shape shadow-primary text-center rounded-circle">
                                            <img src="{{ $comment->user->getProfileUrl() }}" alt="{{ $comment->user->name }}" class="icon icon-shape shadow-primary rounded-circle">
                                        </div>
                                    </a>
                                    <div class="info">
                                        <h6 class="mb-0">{{ $comment->user->name }}</h6>
                                        <small>{{ $comment->created_at->diffForHumans() }}</small>
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
                                    {{ $comment->comment }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <!-- Post Comments End -->
        </div>
    @endforeach
</div>