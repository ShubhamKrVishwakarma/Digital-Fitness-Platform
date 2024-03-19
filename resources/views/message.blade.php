@extends('layouts.mainLayout')

@section('title', 'Messages')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/message.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
@endpush

@section('content')
    <div class="container-fluid bg-white chatbox shadow-lg rounded">
        <div class="row h-100 p-2 p-md-4" style="min-height: 600px">
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

                            <li class="list-group-item list-group-item-action" onclick="StartChat(1)">
                                <div class="row justify-content-center align-items-center">
                                    <div class="col-2 col-md-2">
                                        <img src="{{ asset('admin.jpg') }}" class="friend-pic" />
                                    </div>
                                    <div class="col-10 col-md-10 d-md-block" style="cursor:pointer;">
                                        <div class="name">Username</div>
                                        <div class="under-name">This is some message text...</div>
                                    </div>
                                </div>
                            </li>

                            <li class="list-group-item list-group-item-action" onclick="StartChat(1)">
                                <div class="row justify-content-center align-items-center">
                                    <div class="col-2 col-md-2">
                                        <img src="{{ asset('admin.jpg') }}" class="friend-pic" />
                                    </div>
                                    <div class="col-10 col-md-10 d-md-block" style="cursor:pointer;">
                                        <div class="name">Username</div>
                                        <div class="under-name">This is some message text...</div>
                                    </div>
                                </div>
                            </li>

                            <li class="list-group-item list-group-item-action" onclick="StartChat(1)">
                                <div class="row justify-content-center align-items-center">
                                    <div class="col-2 col-md-2">
                                        <img src="{{ asset('admin.jpg') }}" class="friend-pic" />
                                    </div>
                                    <div class="col-10 col-md-10 d-md-block" style="cursor:pointer;">
                                        <div class="name">Username</div>
                                        <div class="under-name">This is some message text...</div>
                                    </div>
                                </div>
                            </li>

                            <li class="list-group-item list-group-item-action" onclick="StartChat(1)">
                                <div class="row justify-content-center align-items-center">
                                    <div class="col-2 col-md-2">
                                        <img src="{{ asset('admin.jpg') }}" class="friend-pic" />
                                    </div>
                                    <div class="col-10 col-md-10 d-md-block" style="cursor:pointer;">
                                        <div class="name">Username</div>
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
                                <img src="{{ asset('admin.jpg') }}" class="friend-pic" />
                            </div>
                            <div class="col-6 col-sm-6 col-md-6 col-lg-7">
                                <div class="name">Any Name</div>
                                <div class="under-name">This is some message text...</div>
                            </div>
                            <div class="col-4 col-sm-4 d-md-none col-lg-4 d-flex justify-content-end align-items-center" style="cursor: pointer;"
                                onclick="showChatList()">
                                <i class="bi bi-list"></i>
                            </div>
                        </div>
                    </div>

                    {{-- User Message --}}
                    <div class="card-body"></div>

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
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('js/message.js') }}"></script>
@endpush
