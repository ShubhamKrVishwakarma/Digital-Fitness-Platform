@extends('layouts.mainLayout')

@section('title', 'Messages')

@push('styles')
<link rel="stylesheet" href="{{ asset("css/message.css") }}">
{{-- <link rel="stylesheet" href=/> --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush

@section('content')
    {{-- <h1>Message Box</h1> --}}
        <span class="top"></span>
      
        <div class="container-fluid bg-white chatbox shadow-lg rounded">
          <div class="row h-100">
            <div class="col-md-4 pr-0 d-none d-md-block" id="side-1">
              <div class="card h-100">
                <div class="card-header">
                  <div class="row">
                    <!-- <div class="col-1 col-sm-1 col-md-1 d-md-none">
                      <i class="fas fa-arrow-left d-md-none" style="font-size:20px;cursor:pointer;"
                        onclick="hideChatList()"></i>
                    </div> -->
                    <!-- <div class="col-7 col-sm-7 col-md-7">
                      <img id="imgProfile" src="images/pp.png" class="rounded-circle profile-pic" />
                    </div> -->
                    <div class="col-md-5"> </div>
                  </div>
                  <ul class="list-group  list-group-flush">
                    <li class="list-group-item list-group-item-action" style="background-color:#f8f8f8;">
                      <input type="text" placeholder="Search or new chat" class="form-control rounded-pill" />
                    </li>
      
                    <li class="list-group-item list-group-item-action" onclick="StartChat(1)">
                      <div class="row">
                          <div class="col-md-2">
                              <img src="images/pp.png" class="friend-pic" />
                          </div>
                          <div class="col-md-10 d-none d-md-block" style="cursor:pointer;">
                              <div class="name">Any Name</div>
                              <div class="under-name">This is some message text...</div>
                          </div>
                      </div>
                  </li>
      
                    <li class="list-group-item list-group-item-action" onclick="StartChat(1)">
                      <div class="row">
                          <div class="col-md-2">
                              <img src="images/pp.png" class="friend-pic" />
                          </div>
                          <div class="col-md-10 d-none d-md-block" style="cursor:pointer;">
                              <div class="name">Any Name</div>
                              <div class="under-name">This is some message text...</div>
                          </div>
                      </div>
                  </li>
      
                    <li class="list-group-item list-group-item-action" onclick="StartChat(1)">
                      <div class="row">
                          <div class="col-md-2">
                              <img src="images/pp.png" class="friend-pic" />
                          </div>
                          <div class="col-md-10 d-none d-md-block" style="cursor:pointer;">
                              <div class="name">Any Name</div>
                              <div class="under-name">This is some message text...</div>
                          </div>
                      </div>
                  </li>
                    <li class="list-group-item list-group-item-action" onclick="StartChat(1)">
                      <div class="row">
                          <div class="col-md-2">
                              <img src="images/pp.png" class="friend-pic" />
                          </div>
                          <div class="col-md-10 d-none d-md-block" style="cursor:pointer;">
                              <div class="name">Any Name</div>
                              <div class="under-name">This is some message text...</div>
                          </div>
                      </div>
                  </li>
      
                  </ul>
                </div>
              </div>
            </div>
            
            <div class="col-md-8 pl-0 " id="side-2">
              <div id="chatPanel" class="card h-100" style="display: none;">
                <div class="card-header">
                  <div class="row ">
                    
                    <div class="col-2 col-sm-2 col-md-2 col-lg-1">
                      <img src="images/pp.png" class="friend-pic" />
                    </div>
                    <div class="col-6 col-sm-6 col-md-6 col-lg-7">
                      <div class="name">Any Name</div>
                              <div class="under-name">This is some message text...</div>
                    </div>
                    <div class="col-4 col-sm-4 d-md-none col-lg-4" style="cursor: pointer;" onclick="showChatList()">
                        <i class="fa-solid fa-bars"></i>
                    </div>
                    <!-- <div class="col-md-4">
                      <i></i>
                    </div> -->
                  </div>
                </div>
      
                <div class="card-body"></div>
      
                <div class="card-footer  d-flex justify-content-between">
                  <!-- <div class="row"> -->
      
                    <div class="col-md-10">
                      <input type="text" placeholder="Type here" class="form-control rounded-pill" >
                    </div>
                    <div class="col-md-1" >
                    <input type="button" value="Send" class="rounded-pill " style="background-color:#3f51aa; color: #f8f8f8;">
                  </div>
                  </div>
                </div>
      
                <div id="divStart" class="text-center" >
                    <i class="fa-solid fa-comments" style="font-size:200px;"></i>
                  {{-- <i class="fa fa-comment mt-5" "></i> --}}
                  <h2 class="mt-5">Start chating.</h2>
                  <a href="#" onclick="showChatList()" class="d-md-none">New Chat</a>
              </div>
      
      
              </div>
            </div>
          </div>
        </div>


@endsection

@push('scripts')
        <script src="{{ asset("js/message.js") }}"></script>
        {{-- <script src="bootstrap-4.3.1.min.js"></script> --}}
@endpush