<div x-show="showMessages" class="col-xl-8 col-lg-8 col-md-8 col-sm-9 col-9" style="display: none;">
    <div class="selected-user">
        <span class="name">{{ $name }}</span>
    </div>
    <div class="chat-container">
        <ul class="chat-box chatContainerScroll">
            @foreach ($messages as $message)
                @if (auth()->user()->id === $message->sender_id)
                    <li class="chat-left">
                        <div class="chat-avatar">
                            <img src="https://www.bootdey.com/img/Content/avatar/avatar3.png" alt="Retail Admin">
                            <div class="chat-name">Russell</div>
                        </div>
                        <div class="chat-text">{{ $message->message }}</div>
                        <div class="chat-hour">08:55 <span class="bi bi-check-all fs-4"></span></div>
                    </li>
                @else
                    <li class="chat-right">
                        <div class="chat-hour">08:56 <span class="fa fa-check-circle"></span></div>
                        <div class="chat-text">{{ $message->message }}</div>
                        <div class="chat-avatar">
                            <img src="https://www.bootdey.com/img/Content/avatar/avatar3.png" alt="Retail Admin">
                            <div class="chat-name">Sam</div>
                        </div>
                    </li>
                @endif
            @endforeach
        </ul>
        <div class="form-group mt-3 mb-0">
            <form>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2">
                        <i class="bi bi-send"></i>
                    </button>
                  </div>
            </form>
        </div>
    </div>
</div>