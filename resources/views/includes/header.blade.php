<header class="header py-1" style="background-color: #000">
    <nav class="navbar navbar-expand-lg w-100 navbar-clone fixed">
        <div class="container p-0 px-3 px-sm-0">
            <a class="navbar-brand m-0" href="{{ route('home') }}" id="main-logo">
                {{-- <h3 class="text-light m-0">eFitLab</h3> --}}
                <img src="{{ asset('images/logo/logo.png') }}">
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
                                <a href="{{ route('profile') }}"
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
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-light fw-medium {{ Route::is('') ? 'active' : '' }}"
                                id="navbarDropdown" role="button" data-bs-toggle="dropdown">Workout</a>
                            <div class="dropdown-menu dropdown-menu-md m-0 p-0">
                                <!-- Begineer -->
                                <a class="dropdown-item text-body py-3" href="">
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-file-text fs-4 text-primary"></i>
                                        <div class="ms-3 lh-1">
                                            <h6 class="mb-1">Beginner</h6>
                                            <p class="mb-0 fs-6">No workout Experience</p>
                                        </div>
                                    </div>
                                </a>
                                <hr class="m-0">
                                <!-- Intermediate -->
                                <a class="dropdown-item text-body py-3" href="">
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-clipboard fs-4 text-primary"></i>
                                        <div class="ms-3 lh-1">
                                            <h6 class="mb-1">
                                                Intermediate
                                                <span class="text-primary ms-1" id="changelog"></span>
                                            </h6>
                                            <p class="mb-0 fs-6">Some workout Experience</p>
                                        </div>
                                    </div>
                                </a>
                                <hr class="m-0">
                                <!-- Advanced -->
                                <a class="dropdown-item text-body py-3" href="">
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-clipboard fs-4 text-primary"></i>
                                        <div class="ms-3 lh-1">
                                            <h6 class="mb-1">
                                                Advanced
                                                <span class="text-primary ms-1" id="changelog"></span>
                                            </h6>
                                            <p class="mb-0 fs-6">Works out Daily</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light fw-medium {{ Route::is('about') ? 'active' : '' }}"
                                href="{{ route('about') }}">About</a>
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
                                data-bs-target="#registerModal">Register</button>
                        </div>
                    @endguest

                    @auth
                        <div class="dropdown text-end d-none d-lg-block">
                            <a class="d-block link-body-emphasis text-decoration-none dropdown-toggle"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="https://github.com/mdo.png" alt="User" width="40" height="40"
                                    class="rounded-circle">
                            </a>
                            <ul class="dropdown-menu text-small me-4">
                                <li><a class="dropdown-item" href="{{ route('profile') }}">Profile</a></li>
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
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row mb-3">
                        <a href="{{ route('signup') }}">
                            Join as Member
                        </a>
                    </div>
                    <div class="row">
                        <a href="{{ route('register') }}">
                            Join as Trainer
                        </a>
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-center align-items-center">
                    <a>Login as Admin</a>
                </div>
            </div>
        </div>
    </div>
</header>
