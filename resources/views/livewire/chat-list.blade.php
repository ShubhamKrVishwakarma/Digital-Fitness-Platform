<div class="col-md-4 pr-0 d-none d-md-block" id="side-1">
    <div class="card h-100">
        <div class="card-header">
            {{-- <div class="row">
              <div class="col-1 col-sm-1 col-md-1 d-md-none">
                <i class="fas fa-arrow-left d-md-none" style="font-size:20px;cursor:pointer;"
                  onclick="hideChatList()"></i>
              </div>
              <div class="col-7 col-sm-7 col-md-7">
                <img id="imgProfile" src="images/pp.png" class="rounded-circle profile-pic" />
              </div>
            </div> --}}
            <ul class="list-group  list-group-flush">
                <li class="list-group-item list-group-item-action" style="background-color:#f8f8f8;">
                  <input type="text" placeholder="Search or new chat" class="form-control rounded-pill" />
                </li>
                @foreach ($Users as $user)
                    
                <li wire:key="{{ $user->id }}" wire:click.prevent="message" class="list-group-item list-group-item-action" onclick="StartChat(1)">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-2 col-md-2">
                            <img src="{{ $user->getProfileUrl() }}" class="friend-pic" />
                        </div>
                        
                        <div class="col-10 col-md-10 d-md-block" style="cursor:pointer;">
                            <div class="name">{{ $user->name }}</div>
                            <div class="under-name">This is some message text...</div>
                        </div>
                    </div>
                </li>

                @endforeach
            </ul>
        </div>
    </div>
</div>