@extends("layouts.mainLayout")

@section("title") Fitness Hub - Profile @endsection

@push("styles")
<link rel="stylesheet" href="css/profile.css">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="{{ asset('css/global.css') }}">
@endpush

@section('content')
<div class="container-fluid" id="profile-body">
    <div class="container-fluid" id="upper-container">
        <div class="profile">
            <div class="inner-profile">
                <div class="img-container">
                    <div class="image">
                        <img src="./images/profile.jpg" alt="Profile image" />
                        <span></span>
                    </div>
                </div>
                <div class="name-container">
                    <h3>Roshan Kumar Singh</h3>
                    <span>Trainer</span>
                </div>
            </div>
            <div class="follow-details">
                <div>
                    <h6>Followers</h6>
                    <span>224</span>
                </div>
                <div>
                    <h6>Following</h6>
                    <span>33</span>
                </div>
                <div>
                    <h6>Posts</h6>
                    <span>10</span>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mb-4" id="lower-container">
        <div class="profile-nav">
            <div class="buttons-for-user">
                <button type="button" class="btn btn-primary" id="chat-button">Chat</button>
                <button type="button" class="btn btn-primary">Follow</button>
            </div>
            <div class="buttons-for-self">
                <button type="button" id="edit" class="btn btn-primary">Edit</button>
            </div>
            <div class="profile-nav-items">
                <a href="#" class="nav-item-links is-active" id="about" active-color="black">About</a>
                <a href="#" class="nav-item-links" id="posts" active-color="black">Posts</a>
                <span class="nav-indicator"></span>
            </div>
        </div>
        <div class="content">
            <div class="about" id="about-section">
                <div class="about-content">
                    <ul>
                        <li><b>Bio</b>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore provident voluptatibus
                                numquam eveniet atque vitae explicabo quam ipsam tempore debitis voluptatem deserunt
                                harum quasi velit voluptas, cupiditate omnis beatae minus.</p>
                        </li>
                        <li><i class="bi bi-person-circle"></i> Male</li>
                        <li><i class="bi bi-geo-alt-fill"></i> Lives in <b>Kolkata</b></li>
                        <li><i class="bi bi-clock-fill"></i> Joined on <b>February 2024</b></li>
                        <li><i class="bi bi-telephone-fill"></i> +918420535002</li>
                        <li><i class="bi bi-chat-left-fill"></i> roshansingh4384@gmail.com</li>
                    </ul>
                </div>
            </div>
            <div class="post" id="post-section">
                <section class="grid">
                    <a href="" class="grid-photo"
                        style="background-image: url('https://images.unsplash.com/photo-1548032885-b5e38734688a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60');"></a>
                    <a href="" class="grid-photo"
                        style="background-image: url('https://images.unsplash.com/photo-1508138221679-760a23a2285b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60');"></a>
                    <a href="" class="grid-photo"
                        style="background-image: url('https://images.unsplash.com/photo-1494253109108-2e30c049369b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60');"></a>
                    <a href="" class="grid-photo"
                        style="background-image: url('https://images.unsplash.com/photo-1501426026826-31c667bdf23d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60');"></a>
                    <a href="" class="grid-photo"
                        style="background-image: url('https://images.unsplash.com/photo-1448375240586-882707db888b?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60');"></a>
                    <a href="" class="grid-photo"
                        style="background-image: url('https://images.unsplash.com/photo-1507041957456-9c397ce39c97?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60');"></a>
                    <a href="" class="grid-photo"
                        style="background-image: url('https://images.unsplash.com/photo-1519821172144-4f87d85de2a1?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60');"></a>
                    <a href="" class="grid-photo"
                        style="background-image: url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60');"></a>
                    <a href="" class="grid-photo"
                        style="background-image: url('https://images.unsplash.com/photo-1509233725247-49e657c54213?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60');"></a>
                    <a href="" class="grid-photo"
                        style="background-image: url('https://images.unsplash.com/photo-1505142468610-359e7d316be0?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60');"></a>
                </section>
            </div>
            <div class="edit" id="edit-section">
                <div class="card border-0 bg-transparent mb-0">
                    <div class="card-body p-lg-5">
                        <div class="mb-5">
                            <h4 class="mb-1">Account Information</h4>
                            <p class="mb-0 fs-6">Edit your personal information and address.</p>
                        </div>
                        <form class="row g-3 needs-validation" novalidate>
                            <div class="col-lg-7 col-md-7">
                                <label for="profileImageInput" class="form-label">Update Profile Image</label>
                                <input type="file" class="form-control" id="profileImageInput" value="" />
                                <div class="invalid-feedback">Please provide an image.</div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <label for="profileBioInput" class="form-label">Update Bio</label>
                                <textarea type="textarea" class="form-control" id="profileBioInput" value=""
                                    required>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, debitis.</textarea>
                                <div class="invalid-feedback">Please enter bio.</div>
                            </div>
                            <div class="col-lg-7 col-md-12">
                                <label for="profileNameInput" class="form-label">Name</label>
                                <input type="text" class="form-control" id="profileNameInput" value="" required />
                                <div class="invalid-feedback">Please enter firstname.</div>
                            </div>
                            <div class="col-lg-4">
                                <label for="profileGenderInput" class="form-label">Gender</label>
                                <select class="form-select" id="profileGenderInput" required>
                                    <option selected disabled value="">Choose...</option>
                                    <option value="Male" selected="">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other">Other</option>
                                </select>
                                <div class="invalid-feedback">Please select a valid gender.</div>
                            </div>
                            <div class="col-lg-6">
                                <label for="profilePhoneInput" class="form-label">Phone</label>
                                <input type="text" class="form-control input-phone" id="profilePhoneInput"
                                    placeholder="+91 XXXXX XXXXX" required />
                                <div class="invalid-feedback">Please enter phone.</div>
                            </div>
                            <div class="col-lg-6">
                                <label for="profileBirthdayInput" class="form-label">Birthday</label>
                                <input type="date" class="form-control input-date" id="profileBirthdayInput"
                                    placeholder="dd/mm/yyyy" required />
                                <div class="invalid-feedback">Please enter birthday.</div>
                            </div>
                            <div class="col-lg-12">
                                <label for="profileAddress1Input" class="form-label">Address</label>
                                <input type="text" class="form-control" id="profileAddress1Input" required />
                                <div class="invalid-feedback">Please enter address.</div>
                            </div>
                            <div class="col-lg-4">
                                <label for="profileStateInput" class="form-label">State</label>
                                <input type="text" class="form-control" id="profileStateInput" required />
                                <div class="invalid-feedback">Please provide a State.</div>
                            </div>
                            <div class="col-lg-4">
                                <label for="profileCityInput" class="form-label">City</label>
                                <input type="text" class="form-control" id="profileCityInput" required />
                                <div class="invalid-feedback">Please provide a City.</div>
                            </div>
                            <div class="col-lg-4">
                                <label for="profileZipInput" class="form-label">Zip/Code</label>
                                <input type="text" class="form-control" id="profileZipInput" required />
                                <div class="invalid-feedback">Please provide a Zip.</div>
                            </div>
                            <div class="col-12 mt-4">
                                <button class="btn btn-primary me-2" type="submit">Update Profile</button>
                                <button class="btn btn-light" type="reset">Reset</button>
                            </div>

                        </form>
                    </div>
                </div>
                <div class="card border-0 bg-transparent mb-4">
                    <div class="card-body p-lg-5">
                        <div class="mb-5">
                            <h4 class="mb-0">Change Password</h4>
                        </div>
                        <form class="row g-3 needs-validation" novalidate>
                            <div class="col-lg-4 position-relative px-40">
                                <label for="profileOldPassInput" class="form-label">Old Password</label>
                                <input type="password" class="form-control password" id="profileOldPassInput"
                                    maxlength="16" required />
                                <i class="bi bi-eye-slash text-dark togglePassword" id="oldPassToggle"></i>
                                <div class="invalid-feedback">Enter your old password.</div>
                            </div>
                            <div class="col-lg-4 position-relative px-40">
                                <label for="profileNewPassInput" class="form-label">New Password</label>
                                <input type="password" class="form-control password" id="profileNewPassInput"
                                    maxlength="16" required />
                                <i class="bi bi-eye-slash text-dark togglePassword" id="newPassToggle"></i>
                                <div class="invalid-feedback">Enter your new password.</div>
                            </div>
                            <div class="col-lg-4 position-relative px-40">
                                <label for="profileRePassInput" class="form-label">Re-Enter New Password</label>
                                <input type="password" class="form-control password" id="profileRePassInput"
                                    maxlength="16" required />
                                <i class="bi bi-eye-slash text-dark togglePassword" id="rePassToggle"></i>
                                <div class="invalid-feedback">Re-Enter password.</div>
                            </div>
                            <div class="col-12 mt-4">
                                <button class="btn btn-primary me-2" type="submit">Update Password</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push("scripts")
<script src="js/profile.js"></script>
<script src="./js/bootstrap.js"></script>
@endpush