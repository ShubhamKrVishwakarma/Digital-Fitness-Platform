<div x-show="showMessages" class="col-xl-8 col-lg-8 col-md-8 col-sm-9 col-9 p-0" style="display: none;">
    <div class="selected-user" style="background-color: #2c3e50">
        <div class="d-flex">
            <div class="user">
                <img src="{{ $receiver_pic }}" alt="Retail Admin">
                <span class="status busy"></span>
            </div>
            <div>
                @if ($receiver_id ?? false)
                    <a href="{{ route('user.show', $receiver_id) }}" class="text-light text-decoration-none">{{ $name }}</a>
                @endif
            </div>
        </div>
    </div>
    <div x-show="messageDiv" class="chat-container">
        <ul class="chat-box chatContainerScroll" wire:poll.5s='refreshMessage'>
            @forelse ($messages as $message)
            @if (auth()->user()->id === $message->sender_id)
            <li class="chat-right">
                <div class="chat-hour">{{ $message->created_at->format("h:i") }} <span class="bi bi-check-all fs-4"></span></div>
                <div>
                    @if ($message->type === "image")
                        <div class="messageBox">
                            <img class="rounded" src="{{ url('storage/messages/' . $message->content) }}" alt="Post">
                        </div>
                    @elseif ($message->type === "video")
                        <div class="messageBox">
                            <video controls>
                                <source src="{{ url('storage/messages/' . $message->content) }}">
                            </video>
                        </div>
                    @else
                        <div class="chat-text">
                            {{ $message->content }}
                        </div>
                    @endif
                </div>
                <div class="chat-avatar">
                    <img src="{{ auth()->user()->getProfileUrl() }}" alt="{{ auth()->user()->name }}">
                </div>
                <div>
                    <button wire:click.prevent='deleteMessage({{ $message->id }})' class="btn btn-sm btn-danger m-0 ms-3 mt-1" title="Delete Message">
                        <i class="bi bi-trash3"></i>
                    </button>
                </div>
            </li>
            @else
            <li class="chat-left">
                <div class="chat-avatar">
                    <img src="{{ $receiver_pic }}" alt="Retail Admin">
                </div>
                <div>
                    @if ($message->type === "image")
                        <div class="messageBox">
                            <img class="rounded" src="{{ url('storage/messages/' . $message->content) }}" alt="Post">
                        </div>
                    @elseif ($message->type === "video")
                        <div class="messageBox">
                            <video controls>
                                <source src="{{ url('storage/messages/' . $message->content) }}">
                            </video>
                        </div>
                    @else
                        <div class="chat-text">
                            {{ $message->content }}
                        </div>
                    @endif
                </div>
                <div class="chat-hour">{{ $message->created_at->format("h:i") }} <span
                        class="bi bi-check-all fs-4"></span></div>
            </li>
            @endif
            @empty
            <div class="d-flex justify-content-center align-items-center flex-column w-100 h-100">
                <h3>No Messages to display</h3>
                <p>Start your Converstaion</p>
            </div>
            @endforelse
        </ul>
        <div class="form-group mt-3 mb-0">
            <form wire:submit='sendMessage'>
                <div class="input-group mb-3">
                    <div class="btn-group dropup">
                        <button type="button" class="btn btn-secondary" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-share-fill"></i>
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                <button type="button" class="dropdown-item" x-on:click="messageDiv = false, videoForm = false, imageForm = true">Share Image</button>
                            </li>
                            <li>
                                <button type="button" class="dropdown-item" x-on:click="messageDiv = false, imageForm = false, videoForm = true">Share Video</button>
                            </li>
                        </ul>
                    </div>
                    <input type="text" wire:model='message' class="form-control" placeholder="Type Message here..." required>
                    <button class="btn btn-outline-secondary" type="submit">
                        <i class="bi bi-send"></i>
                    </button>
                </div>
                @error('message')
                <div>
                    <span class="text-danger">{{ $message }}</span>
                </div>
                @enderror
            </form>
        </div>
    </div>
    <div x-show="imageForm" class="chat-container" style="height: 520px">
        <div class="row h-100">
            <div class="col-12">
                <button class="btn" x-on:click="imageForm = false, messageDiv = true">
                    <i class="bi bi-x-square-fill fs-3"></i>
                </button>
            </div>
            <div class="col-12">
                @if ($image)
                    <div class="shareDiv">
                        <img src="{{ $image->temporaryUrl() }}">
                    </div>
                @else
                    <div class="shareDiv">
                        <h3>Choose Image</h3>
                    </div>
                @endif
            </div>
            <div class="col-12 align-self-end">
                <form wire:submit='sendImage'>
                    <div class="input-group mb-3">
                        <input type="file" wire:model='image' class="form-control" accept="image/*" required>
                        <button class="btn btn-sm btn-success" type="submit" x-on:click="imageForm = false, messageDiv = true">
                            Send <i class="bi bi-send"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div x-show="videoForm" class="chat-container" style="height: 520px">
        <div class="row h-100">
            <div class="col-12">
                <button class="btn" x-on:click="videoForm = false, messageDiv = true">
                    <i class="bi bi-x-square-fill fs-3"></i>
                </button>
            </div>
            <div class="col-12">
                @if ($video)
                    <div class="shareDiv">
                        <video controls>
                            <source src="{{ $video->temporaryUrl() }}">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                @else
                    <div class="shareDiv">
                        <h3>Choose Video</h3>
                    </div>
                @endif
            </div>
            <div class="col-12 align-self-end">
                <form wire:submit='sendVideo'>
                    <div class="input-group mb-3">
                        <input type="file" wire:model='video' class="form-control" accept="video/*" required>
                        <button class="btn btn-sm btn-success" type="submit" x-on:click="videoForm = false, messageDiv = true">
                            Send <i class="bi bi-send"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>