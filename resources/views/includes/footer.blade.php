<footer class="footer py-4" style="background-color: #1b1b1f">
    <div class="container">
        <div class="row">
            <div class="col-xxl-5 col-lg-5 col-md-7">
                <div class="mb-7 mb-xl-0">
                    <div class="mb-4">
                        <a href="{{ route('home') }}" class="footer-heading">
                            <h3>eFitLab</h3>
                        </a>
                    </div>
                    <p class="mb-5 text-light">Browse a diverse range of workouts tailored to your fitness goals and
                        preferences. Whether you're a beginner or an experienced fitness enthusiast, we've got the
                        perfect routines for you.</p>

                </div>
            </div>
            <div class="offset-xxl-1 col-xxl-6 col-lg-6 offset-md-1 col-md-4 footer-body">
                <div class="row" id="ft-links">
                    <div class="col-lg-4 col-12">
                        <div class="position-relative">
                            <div class="mb-3 pb-2 d-flex justify-content-between border-bottom border-bottom-lg-0">
                                <h5>Links</h5>
                                <a class="d-block d-lg-none stretched-link text-inherit" data-bs-toggle="collapse"
                                    href="#collapseLanding" role="button" aria-expanded="false"
                                    aria-controls="collapseLanding">
                                    <i class="bi bi-chevron-down"></i>
                                </a>
                            </div>
                            <div class="collapse d-lg-block" id="collapseLanding" data-bs-parent="#ft-links">
                                <ul class="list-unstyled mb-0 py-3 py-lg-0">
                                    <li class="mb-2">
                                        <a href="{{ route('home') }}" class="text-decoration-none text-light">Home</a>
                                    </li>
                                    <li class="mb-2">
                                        <a href="{{ route('shop') }}" class="text-decoration-none text-light">Shop</a>
                                    </li>
                                    <li class="mb-2">
                                        <a href="{{ route('community') }}" class="text-decoration-none text-light">Community</a>
                                    </li>
                                    <li class="mb-2">
                                        <a href="{{ route('trainers') }}" class="text-decoration-none text-light">Trainers</a>
                                    </li>
                                    <li class="mb-2">
                                        <a href="{{ route('contact') }}" class="text-decoration-none text-light">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div
                            class="mb-3 pb-2 d-flex justify-content-between border-bottom border-bottom-lg-0 position-relative">
                            <h5>Accounts</h5>
                            <a class="d-block d-lg-none stretched-link text-inherit" data-bs-toggle="collapse"
                                href="#collapseAccounts" role="button" aria-expanded="false"
                                aria-controls="collapseAccounts">
                                <i class="bi bi-chevron-down"></i>
                            </a>
                        </div>
                        <div class="collapse d-lg-block" id="collapseAccounts" data-bs-parent="#ft-links">
                            <ul class="list-unstyled mb-0 py-3 py-lg-0">
                                @guest
                                    <li class="mb-2">
                                        <a href="{{ route('signup') }}" class="text-decoration-none text-light">Signup</a>
                                    </li>
                                    <li class="mb-2">
                                        <a href="{{ route('login') }}" class="text-decoration-none text-light">Login</a>
                                    </li>
                                @endguest
                                @auth
                                    <li class="mb-2">
                                        <a href="{{ route('user.show', auth()->user()->id) }}" class="text-decoration-none text-light">Profile</a>
                                    </li>
                                    <li class="mb-2">
                                        <a href="{{ route('message') }}" class="text-decoration-none text-light">Messages</a>
                                    </li>
                                    <li class="mb-2">
                                        <a href="{{ route('cart') }}" class="text-decoration-none text-light">Cart</a>
                                    </li>
                                    <li class="mb-2">
                                        <a href="{{ route('orders') }}" class="text-decoration-none text-light">Orders</a>
                                    </li>
                                    <li class="mb-2">
                                        <a href="{{ route('logout') }}" class="text-decoration-none text-light">Log out</a>
                                    </li>
                                @endauth
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div
                            class="mb-3 pb-2 d-flex justify-content-between border-bottom border-bottom-lg-0 position-relative">
                            <h5>Products</h5>
                            <a class="d-block d-lg-none stretched-link text-inherit" data-bs-toggle="collapse"
                                href="#collapseResources" role="button" aria-expanded="false"
                                aria-controls="collapseResources">
                                <i class="bi bi-chevron-down"></i>
                            </a>
                        </div>
                        <div class="collapse d-lg-block" id="collapseResources" data-bs-parent="#ft-links">
                            <ul class="list-unstyled mb-0 py-3 py-lg-0">
                                <li class="mb-2">
                                    <a href="http://localhost:8000/shop?search=protiens" class="text-decoration-none text-light">Protiens</a>
                                </li>
                                <li class="mb-2">
                                    <a href="http://localhost:8000/shop?search=dumbbells" class="text-decoration-none text-light">Dumbbells</a>
                                </li>
                                <li class="mb-2">
                                    <a href="http://localhost:8000/shop?search=tshirts" class="text-decoration-none text-light">T-shirts</a>
                                </li>
                                <li class="mb-2">
                                    <a href="http://localhost:8000/shop?search=bottles" class="text-decoration-none text-light">Bottles</a>
                                </li>
                                <li class="mb-2">
                                    <a href="http://localhost:8000/shop?search=equipments" class="text-decoration-none text-light">Equipments</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-7 mb-3">
        <div class="row align-items-center">
            <div class="col-md-9">
                <div class="small mb-3 mb-md-0 text-light">
                    © {{ date('Y') }} <span class="violet">Digital Fitness Platform</span>
                </div>
            </div>
            <div class="col-md-3">
                <div class="text-md-end d-flex align-items-center justify-content-md-end">
                    <div class="ms-3 d-flex gap-2">
                        <a href="https://www.linkedin.com/in/shubham-kumar-vishwakarma-085735271/" class="text-reset btn btn-icon" target="_blank">
                            <i class="bi bi-linkedin text-light"></i>
                        </a>
                        <a href="https://twitter.com/" class="text-reset btn btn-icon" target="_blank">
                            <i class="bi bi-twitter-x text-light"></i>
                        </a>
                        <a href="https://github.com/ShubhamKrVishwakarma/Digital-Fitness-Platform" class="text-reset btn btn-icon" target="_blank">
                            <i class="bi bi-github text-light"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>