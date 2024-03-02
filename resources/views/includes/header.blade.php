<header class="header py-2" style="background-color: #000">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg w-100 navbar-clone fixed">
        <div class="container px-3">
            <a class="navbar-brand" href="{{ route('home') }}" id="logo-image">
                <!-- <h3 class="text-light m-0">eFitLab</h3> -->
                <img id="logo" src="./images/logo2.jpeg" alt="">
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
                            <a class="nav-link text-light" href="#">Log out</a>
                        </li>
                        <li>
                            <hr class="hr m-0">
                        </li>
                        <li class="nav-item d-block d-lg-none text-light">
                            <h3>Nav Links</h3>
                        </li>
                        <!-- Guest -->
                        <li class="nav-item">
                            <a class="nav-link text-light" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="{{ route('shop') }}">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="{{ route('community') }}">Community</a>
                        </li>
                        <!-- Workout Dropdown -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-light" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown">Workout</a>
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
                            <a class="nav-link text-light" href="{{ route('about') }}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="{{ route('contact') }}">Contact</a>
                        </li>
                    </ul>

                    <!-- Action Buttons -->
                    <!-- <div class="d-flex flex-column flex-lg-row gap-2 mt-2 mt-lg-0">
                            <a href="./login.html" class="btn btn-outline-light">Login</a>
                            <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#registerModal">Register</button>
                        </div> -->

                    <!-- User Profile -->
                    <div class="dropdown text-end d-none d-lg-block">
                        <a
                            class="d-block link-body-emphasis text-decoration-none dropdown-toggle"
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
                            <li><a class="dropdown-item" href="#">Log out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- Modal -->
    <div class="modal fade" id="registerModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Create New Account</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row mb-3">
                        <a href="#" class="modal-member">
                            <img src="https://images.startups.co.uk/wp-content/uploads/2017/06/Job-offer-new-employee-1.jpg?width=709&height=460&fit=crop"
                                alt="">
                            <div class="modal-member-title">
                                <h4>Join as Member</h4>
                            </div>
                        </a>
                    </div>
                    <div class="row">
                        <a href="#" class="modal-trainer">
                            <img src="https://as1.ftcdn.net/v2/jpg/02/64/23/78/1000_F_264237813_6Yn9JJkBZkuGP9gEgebCA5xVqhqz76v3.jpg"
                                alt="">
                            <div class="modal-trainer-title">
                                <h4>Join as Trainer</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-center align-items-center">
                    <a href="">Login as Admin</a>
                </div>
            </div>
        </div>
    </div>
</header>