<div x-show="manageUser" class="main-content position-relative border-radius-lg" style="display: none">
    <div class="card shadow-lg mx-4 mt-4">
        <div class="card-body p-3">
            <div class="row gx-4">
                <div class="col-auto">
                    <div class="avatar avatar-xl position-relative">
                        <img src="../images/team-1.jpg" alt="profile_image"
                            class="w-100 border-radius-lg shadow-sm">
                    </div>
                </div>
                <div class="col-auto my-auto">
                    <div class="h-100">
                        <h5 class="mb-1">Username</h5>
                        <p class="mb-0 font-weight-bold text-sm">User Role</p>
                    </div>
                </div>
                <div class="col-auto ms-auto my-auto">
                    <button x-on:click="manageUser = false, usersTable = true" class="btn btn-sm btn-dark m-0" data-view-users>View All Users</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-4">
        <form wire:submit='update'>
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center flex-wrap my-2">
                                <p class="text-uppercase text-sm">Personal Information</p>
                                <button class="btn btn-sm btn-danger">Delete Account</button>
                            </div>
                            <div class="row">
                                <input type="hidden" id="update-user-id">
                                <div class="col-md-6 mb-3">
                                    <label class="form-control-label">Name</label>
                                    <input type="text" wire:model='name' class="form-control">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-control-label">Email</label>
                                    <input class="form-control" wire:model='email' type="email" readonly>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-control-label">Gender</label>
                                    <select wire:model='gender' class="form-control" required>
                                        <option value="" selected>Select Gender</option>
                                        <option value="M">Male</option>
                                        <option value="F">Female</option>
                                        <option value="O">Others</option>
                                    </select>
                                    @error('gender')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-control-label">Date of Birth</label>
                                    <input type="date" wire:model='dob' class="form-control" required>
                                    @error('dob')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-control-label">Phone Number</label>
                                    <input type="number" wire:model='phone' class="form-control" placeholder="Phone Number">
                                    @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-control-label">Role</label>
                                    <input type="text" wire:model='role' class="form-control" readonly>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label class="form-control-label">Address</label>
                                    <textarea cols="30" rows="4" wire:model='address' class="form-control" placeholder="Your Address..."></textarea>
                                    @error('address')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label class="form-control-label">City</label>
                                    <input type="text" wire:model='city' class="form-control" placeholder="City">
                                    @error('city')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label class="form-control-label">Zip Code</label>
                                    <input type="text" wire:model='zip_code' class="form-control" placeholder="Zip Code">
                                    @error('zip_code')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label class="form-control-label">State</label>
                                    <select wire:model='state' class="form-control">
                                        <option value="" selected>Select State</option>
                                        <option value=""></option>
                                    </select>
                                    @error('state')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label class="form-control-label">Profile Bio</label>
                                    <textarea cols="30" rows="3" wire:model='bio' class="form-control" placeholder="Bio.."></textarea>
                                    @error('bio')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label class="form-control-label">Profile Picture</label>
                                    <input type="file" wire:model='profile_pic' class="form-control">
                                    @error('profile_pic')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label class="form-control-label">New Password</label>
                                    <input type="password" wire:model='password' class="form-control" placeholder="New Password">
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label class="form-control-label">Confirm Password</label>
                                    <input type="password" wire:model='confirm_password' class="form-control" placeholder="Confirm Password">
                                    @error('confirm_password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            {{-- <div class="row" id="trainer-details" style="display: none">
                                <hr class="horizontal bg-dark">
                                <div class="col-md-12">
                                    <p class="text-uppercase text-sm">Professional Information</p>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="update-occupation" class="form-control-label">Occupation</label>
                                    <input type="text" id="update-occupation" class="form-control" placeholder="Occupation" >
                                    <span class="text-danger errors" id="update-occupation-error"></span>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="update-certificate-id" class="form-control-label">Certificate ID</label>
                                    <input type="text" id="update-certificate-id" class="form-control" placeholder="Certificate ID" >
                                    <span class="text-danger errors" id="update-certificate-id-error"></span>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="update-issue-date" class="form-control-label">Issue Date</label>
                                    <input type="date" id="update-issue-date" class="form-control" placeholder="Issue Date" >
                                    <span class="text-danger errors" id="update-issue-date-error"></span>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="update-expiry-date" class="form-control-label">Expiry Date</label>
                                    <input type="date" id="update-expiry-date" class="form-control" placeholder="Expiry Date" >
                                    <span class="text-danger errors" id="update-expiry-date-error"></span>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="update-issued-authority" class="form-control-label">Issued Authority</label>
                                    <input type="text" id="update-issued-authority" class="form-control" placeholder="Issued Authority" >
                                    <span class="text-danger errors" id="update-issued-authority-error"></span>
                                </div>
                            </div> --}}
                            <div class="d-flex align-items-center">
                                <button class="btn btn-primary btn-sm" type="submit">Save Changes</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-profile">
                        <img src="../assets/img/bg-profile.jpg" alt="Image placeholder" class="card-img-top">
                        <div class="row justify-content-center">
                            <div class="col-4 col-lg-4 order-lg-2">
                                <div class="mt-n4 mt-lg-n6 mb-4 mb-lg-0">
                                    <a href="javascript:;">
                                        <img src="../assets/img/team-2.jpg"
                                            class="rounded-circle img-fluid border border-2 border-white">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-header text-center border-0 pt-0 pt-lg-2 pb-4 pb-lg-3">
                            <div class="d-flex justify-content-center align-items-center">
                                <button wire:click='confirm' class="btn btn-sm btn-success m-0 w-100">Confirm Verification</button>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="row">
                                <div class="col">
                                    <div class="d-flex justify-content-center">
                                        <div class="d-grid text-center">
                                            <span class="text-lg font-weight-bolder">22</span>
                                            <span class="text-sm opacity-8">Friends</span>
                                        </div>
                                        <div class="d-grid text-center mx-4">
                                            <span class="text-lg font-weight-bolder">10</span>
                                            <span class="text-sm opacity-8">Photos</span>
                                        </div>
                                        <div class="d-grid text-center">
                                            <span class="text-lg font-weight-bolder">89</span>
                                            <span class="text-sm opacity-8">Comments</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center mt-4">
                                <h5>
                                    Mark Davis<span class="font-weight-light">, 35</span>
                                </h5>
                                <div class="h6 font-weight-300">
                                    <i class="ni location_pin mr-2"></i>Bucharest, Romania
                                </div>
                                <div class="h6 mt-4">
                                    <i class="ni business_briefcase-24 mr-2"></i>Solution Manager - Creative Tim
                                    Officer
                                </div>
                                <div>
                                    <i class="ni education_hat mr-2"></i>University of Computer Science
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>