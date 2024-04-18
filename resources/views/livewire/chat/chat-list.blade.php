<div class="col-xl-4 col-lg-4 col-md-4 col-sm-3 col-3">
    <div class="users-container">
        <div class="chat-search-box">
            <div class="input-group">
                <input wire:model.live.debounce='search' class="form-control" placeholder="Search">
                <div class="input-group-btn">
                    <button type="button" class="btn btn-info">
                        <i class="bi bi-search"></i>
                    </button>
                </div>
            </div>
        </div>
        <ul class="users">
            @if ($trainer)
                @foreach ($users as $user)
                    <li wire:key='{{ $user->member->id }}' x-on:click="hideMessages = false, showMessages = true" class="person" @click="$dispatch('messages', { id: {{ $user->id }} })" >
                        <div class="user">
                            <img src="{{ $user->member->getProfileUrl() }}" alt="Retail Admin">
                            <span class="status busy"></span>
                        </div>
                        <p class="name-time">
                            <span class="name">{{ $user->member->name }}</span>
                            {{-- <span class="time">15/02/2019</span> --}}
                        </p>
                    </li>
                @endforeach
            @else
                @foreach ($users as $user)
                    <li wire:key='{{ $user->trainer->id }}' x-on:click="hideMessages = false, showMessages = true" class="person" @click="$dispatch('messages', { id: {{ $user->id }} })" >
                        <div class="user">
                            <img src="{{ $user->trainer->getProfileUrl() }}" alt="Retail Admin">
                            <span class="status busy"></span>
                        </div>
                        <p class="name-time">
                            <span class="name">{{ $user->trainer->name }}</span>
                            {{-- <span class="time">15/02/2019</span> --}}
                        </p>
                    </li>
                @endforeach
            @endif
        </ul>
    </div>
</div>