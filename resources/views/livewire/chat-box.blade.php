<div class="col-md-8 pl-0 " id="side-2">
    <div x-show="chatBox" id="chatPanel" class="card h-100" style="display: none;">
        <div class="card-header">
            <div class="row ">
                <div class="col-2 col-sm-2 col-md-2 col-lg-1">
                    <img src="{{ asset('admin.jpg') }}" class="friend-pic" />
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-7">
                    <div class="name">Any Name</div>
                    <div class="under-name">This is some message text...</div>
                </div>
                <div class="col-4 col-sm-4 d-md-none col-lg-4 d-flex justify-content-end align-items-center"
                    style="cursor: pointer;" onclick="showChatList()">
                    <i class="bi bi-list"></i>
                </div>
            </div>
        </div>

        {{-- User Message --}}
        <div class="card-body">
            @foreach ($messages as $message)
                {{-- <div class="col-2 col-sm-1 col-md-1">
                    <img src="" alt="">
                </div> --}}
                {{-- <div class="col-4 col-sm-5 col-md-5"> --}}
                @if (auth()->user()->id === $message->sender_id)
                    <div class="row text-end my-2" style="widt:100px">
                        <div class="col-md-3"></div>
                        <div class="col-2 col-sm-1 col-md-1">
                            <img src="" alt="">
                        </div>
                        <div class="col-md-7 text-end">
                            <p>
                                {{ $message->message }}
                                {{-- <span>{{ $message->created_at->format('H:i A') }}</span> --}}
                            </p>
                        </div>
                    </div>
                @else
                    <div class="row my-2">
                        <div class="col-md-7">
                            <p>
                                {{ $message->message }}
                                {{-- <span>{{ $message->created_at->format('h:i A') }}</span> --}}
                            </p>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                @endif
            @endforeach
        </div>


        <div class="card-footer  d-flex justify-content-between">
            {{-- Dhanraj --}}
            {{-- <div class="col-md-10">
                <input type="text" placeholder="Type here" class="form-control rounded-pill">
            </div>
            <div class="col-md-1">
                <button class="btn btn-primary">Send</button>
                <input type="button" value="Send" class="rounded-pill "
                    style="background-color:#3f51aa; color: #f8f8f8;">
            </div> --}}
            <div class="input-group my-2">
                <input type="text" class="form-control" placeholder="Type here">
                <button class="btn btn-primary" type="button" id="button-addon2">Send</button>
            </div>
        </div>
    </div>

    <div id="divStart" class="text-center">
        <i class="bi bi-chat-dots-fill" style="font-size: 200px"></i>
        <h2 class="mt-2">Start chating.</h2>
        <a onclick="showChatList()" class="d-md-none text-decoration-none fw-bold">New Chat</a>
    </div>
</div>
