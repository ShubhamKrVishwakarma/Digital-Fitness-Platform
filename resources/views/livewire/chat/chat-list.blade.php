<div class="col-xl-4 col-lg-4 col-md-4 col-sm-3 col-3 p-0">
    <div class="users-container" x-data="{ selectedUserId: null }">
        <div class="chat-search-box">
            <div class="input-group">
                <input wire:model.live.debounce='search' class="form-control" placeholder="Search Trainer by Name...">
            </div>
        </div>
        <ul class="users">
            @if ($trainer)
                @foreach ($users as $user)
                    <li wire:key='{{ $user->trainer->id }}' x-on:click="hideMessages = false, showMessages = true; selectedUserId = {{ $user->id }}" :class="{ 'activeChat': selectedUserId === {{ $user->id }} }" class="person" @click="$dispatch('messages', { id: {{ $user->id }} })">
                        <div class="user">
                            <img src="{{ $user->member->getProfileUrl() }}" alt="Retail Admin">
                            {{-- <span class="status busy"></span> --}}
                        </div>
                        <p class="name-time text-center m-0">
                            <span class="name fs-6 my-auto">{{ $user->member->name }}</span>
                        </p>
                    </li>
                @endforeach
            @else
                @foreach ($users as $user)
                    <li wire:key='{{ $user->trainer->id }}' x-on:click="hideMessages = false, showMessages = true; selectedUserId = {{ $user->id }}" :class="{ 'activeChat': selectedUserId === {{ $user->id }} }" class="person" @click="$dispatch('messages', { id: {{ $user->id }} })">
                        <div class="user">
                            <img src="{{ $user->trainer->getProfileUrl() }}" alt="Retail Admin">
                            {{-- <span class="status busy"></span> --}}
                        </div>
                        <p class="name-time text-center m-0">
                            <span class="name fs-6 my-auto">{{ $user->trainer->name }}</span>
                        </p>
                    </li>
                @endforeach
            @endif
        </ul>
    </div>
</div>