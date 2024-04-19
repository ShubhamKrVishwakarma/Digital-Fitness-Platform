<div x-show="showMessages" class="col-xl-8 col-lg-8 col-md-8 col-sm-9 col-9" style="display: none;">
    <div class="selected-user">
        <span class="name">{{ $name }}</span>
    </div>
    <div class="chat-container">
        <ul class="chat-box chatContainerScroll">
            @forelse ($messages as $message)
                @if (auth()->user()->id === $message->sender_id)
                    <li class="chat-right">
                        <div class="chat-hour">{{ $message->created_at->format("h:i") }} <span class="bi bi-check-all fs-4"></span></div>
                        <div class="chat-text">{{ $message->message }}</div>
                        <div class="chat-avatar">
                            <img src="{{ auth()->user()->getProfileUrl() }}" alt="{{ auth()->user()->name }}">
                        </div>
                    </li>
                @else
                    <li class="chat-left">
                        <div class="chat-avatar">
                            <img src="{{ $receiver_pic }}" alt="Retail Admin">
                        </div>
                        <div class="chat-text">{{ $message->message }}</div>
                        <div class="chat-hour">{{ $message->created_at->format("h:i") }} <span class="bi bi-check-all fs-4"></span></div>
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
                    <input type="text" wire:model='message' class="form-control" placeholder="Type Message here..."
                        aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2">
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
</div>