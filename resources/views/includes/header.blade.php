<header class="header py-1" style="background-color: #1b1b1f">
    <nav class="navbar navbar-expand-lg w-100 navbar-clone fixed">
        <div class="container p-0 px-3 px-sm-0">
            <a class="navbar-brand m-0" href="{{ route('home') }}" id="main-logo">
                <img src="{{ asset('images/logo/logo-3.png') }}">
            </a>
            <button class="navbar-toggler offcanvas-nav-btn text-light" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar" type="button">
                <i class="bi bi-list"></i>
            </button>
            <div class="offcanvas offcanvas-start offcanvas-nav bg-dark" id="offcanvasNavbar" style="width: 100%">
                <div class="offcanvas-header">
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <h3 class="text-light m-0">eFitLab</h3>
                    </a>
                    <button type="button" class="btn-close bg-light" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body pt-0 align-items-center">
                    <ul class="navbar-nav mx-auto align-items-lg-center gap-2">
                        <!-- After Login -->
                        @auth
                        <li class="nav-item d-block d-lg-none">
                            <a href="{{ route('user.show', ['id' => Auth::user()->id]) }}"
                                class="d-flex text-light align-items-center link-body-emphasis text-decoration-none">
                                <img src="https://github.com/mdo.png" alt="User" width="40" height="40"
                                    class="rounded-circle">
                                <h3 class="m-0 ms-2">Username</h3>
                            </a>
                        </li>
                        <li class="nav-item d-block d-lg-none">
                            <a class="nav-link text-light" href="{{ route('message') }}">Messages</a>
                        </li>
                        <li class="nav-item d-block d-lg-none">
                            <a class="nav-link text-light" href="{{ route('cart') }}">My Cart</a>
                        </li>
                        <li class="nav-item d-block d-lg-none">
                            <a class="nav-link text-light" href="{{ route('orders') }}">My Orders</a>
                        </li>
                        <li class="nav-item d-block d-lg-none">
                            <a class="nav-link text-light" href="{{ route('logout') }}">Log out</a>
                        </li>
                        <li>
                            <hr class="hr m-0">
                        </li>
                        <li class="nav-item d-block d-lg-none text-light">
                            <h3>Nav Links</h3>
                        </li>
                        @endauth
                        <!-- Guest -->
                        <li class="nav-item">
                            <a class="nav-link text-light fw-medium {{ Route::is('home') ? 'active' : '' }}"
                                href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light fw-medium {{ Route::is('shop') ? 'active' : '' }}"
                                href="{{ route('shop') }}">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light fw-medium {{ Route::is('community') ? 'active' : '' }}"
                                href="{{ route('community') }}">Community</a>
                        </li>
                        <!-- Workout Dropdown -->
                        <li class="nav-item">
                            <a class="nav-link text-light fw-medium {{ Route::is('workout.plans') ? 'active' : '' }}"
                                href="{{ route('workout.plans') }}">Workouts</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light fw-medium {{ Route::is('trainers') ? 'active' : '' }}"
                                href="{{ route('trainers') }}">Trainers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light fw-medium {{ Route::is('contact') ? 'active' : '' }}"
                                href="{{ route('contact') }}">Contact</a>
                        </li>
                    </ul>

                    @guest
                    <div class="d-flex flex-column flex-lg-row gap-2 mt-2 mt-lg-0">
                        <a href="{{ route('login') }}"
                            class="btn btn-outline-light d-flex justify-content-center align-items-center">Login</a>
                        <button class="bttn bttn-primary" data-bs-toggle="modal"
                            data-bs-target="#registerModal">Join Us</button>
                    </div>
                    @endguest

                    @auth
                    <div class="dropdown text-end d-none d-lg-block">
                        <a class="d-block link-body-emphasis text-decoration-none dropdown-toggle"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ auth()->user()->getProfileUrl() }}" alt="User" width="40" height="40"
                                class="rounded-circle">
                        </a>
                        <ul class="dropdown-menu text-small me-4">
                            @can('admin')
                            <li><a class="dropdown-item" href="{{ route('admin.dashboard') }}" target="_blank">Admin
                                    Panel</a></li>
                            @endcan
                            <li><a class="dropdown-item" href="{{ route('user.show', auth()->user()->id )}}">Profile</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('message') }}">Messages</a></li>
                            <li><a class="dropdown-item" href="{{ route('cart') }}">My Cart</a></li>
                            <li><a class="dropdown-item" href="{{ route('orders') }}">My Orders</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="{{ route('logout') }}">Log out</a></li>
                        </ul>
                    </div>
                    @endauth
                </div>
            </div>
        </div>
    </nav>
    <!-- Modal -->
    <div class="modal fade" id="registerModal">
        <div class="modal-dialog">
            <div class="modal-content bg-dark">
                <div class="modal-header">
                    <h1 class="modal-title text-light fs-5" id="exampleModalLabel">Create New Account</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="background-color: white"></button>
                </div>
                <div class="modal-body">
                    <div class="row mb-3">
                        <div class="col-md-12" style="height: 200px">
                            <a href="{{ route('signup') }}" class="card b-h-box position-relative font-14 border-0 mb-4 h-100 w-100">
                                <img class="card-img"
                                    src="{{ asset('images/trainer.jpg') }}"
                                    alt="Card image">
                                <div class="card-img-overlay overflow-hidden">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <span class="bg-danger-gradiant badge overflow-hidden text-white px-3 py-1 fs-6 font-weight-normal">Fitness HUB</span>
                                    </div>
                                    <h2 class="card-title my-3 fs-3 font-weight-normal">Join as a Member</h2>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12" style="height: 200px">
                            <a href="{{ route('register') }}" class="card b-h-box position-relative font-14 border-0 mb-4 h-100 w-100">
                                <img class="card-img"
                                    src="{{ asset('images/member.jpg') }}"
                                    alt="Card image">
                                <div class="card-img-overlay overflow-hidden">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <span class="bg-danger-gradiant badge overflow-hidden text-white px-3 py-1 fs-6 font-weight-normal">Fitness HUB</span>
                                    </div>
                                    <h2 class="card-title my-3 fs-3 font-weight-normal">Join as a Trainer</h2>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>