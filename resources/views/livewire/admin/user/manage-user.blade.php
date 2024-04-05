<div x-show="manageUser" class="main-content position-relative border-radius-lg" style="display: none">
    <div class="card shadow-lg mx-4 mt-4">
        <div class="card-body p-3">
            <div class="row gx-4">
                <div class="col-auto">
                    @if ($profile_pic)
                        <div class="avatar avatar-xl position-relative">
                            <img src="{{ url('storage/user') . '/' . $profile_pic }}" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
                        </div>
                    @else
                        <div class="avatar avatar-xl position-relative">
                            <img src="{{ asset('images/profile/profile.jpg') }}" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
                        </div>
                    @endif
                </div>
                <div class="col-auto my-auto">
                    <div class="h-100">
                        <h5 class="mb-1">{{ $name }}</h5>
                        <p class="mb-0 font-weight-bold text-sm">{{ $role }}</p>
                    </div>
                </div>
                <div class="col-auto ms-auto my-auto">
                    <button wire:click.prevent='resetAll' x-on:click="manageUser = false, usersTable = true" class="btn btn-sm btn-dark m-0">View All Users</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-4">
        <form wire:submit='update' enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center flex-wrap my-2">
                                <p class="text-uppercase text-sm">Personal Information</p>
                                <button class="btn btn-sm btn-danger" wire:confirm.prompt='Are you sure? \nEnter password to "DELETE" |aaaa' wire:click.prevent='delete' x-on:click="manageUser = false, usersTable = true">Delete Account</button>
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
                                    <input type="text" wire:model='state' class="form-control">
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
                                    <label class="form-control-label">New Profile Picture</label>
                                    <input type="file" accept="image/png, image/jpeg" wire:model='new_profile_pic' class="form-control">
                                    @error('new_profile_pic')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                @if ($new_profile_pic)
                                    <div class="col-md-12 mb-3">
                                        <p class="mt-2">Preview:</p>
                                        <img src="{{ $new_profile_pic->temporaryUrl() }}" class="rounded h-20 w-20">
                                    </div>
                                @endif
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
                            @if ($role === "pending" || $role === "trainer")
                                <div class="row mt-2">
                                    <hr class="horizontal bg-dark">
                                    <div class="col-md-12">
                                        <p class="text-uppercase text-sm">Professional Information</p>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-control-label">Occupation</label>
                                        <input type="text" wire:model='occupation' class="form-control" placeholder="Occupation">
                                        @error('occupation')
                                            <div class="text-danger d-block mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-control-label">Certificate ID</label>
                                        <input type="text" wire:model='certificate_id' class="form-control" placeholder="Certificate ID" >
                                        @error('certificate_id')
                                            <div class="text-danger d-block mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-control-label">Issue Date</label>
                                        <input type="date" wire:model='issue_date' class="form-control" placeholder="Issue Date" >
                                        @error('issue_date')
                                            <div class="text-danger d-block mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-control-label">Expiry Date</label>
                                        <input type="date" wire:model='expiry_date' class="form-control" placeholder="Expiry Date" >
                                        @error('expiry_date')
                                            <div class="text-danger d-block mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label class="form-control-label">Issued Authority</label>
                                        <input type="text" wire:model='issued_authority' class="form-control" placeholder="Issued Authority" >
                                        @error('issued_authority')
                                            <div class="text-danger d-block mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            @endif
                            <div class="d-flex align-items-center">
                                <button class="btn btn-primary btn-sm" wire:click='$refresh' type="submit">Save Changes</button>
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
                                    @if ($profile_pic)
                                        <a>
                                            <img src="{{ url('storage/user') . '/' . $profile_pic }}"
                                                class="rounded-circle img-fluid border border-2 border-white">
                                        </a>
                                    @else
                                        <a>
                                            <img src="{{ asset('images/profile/profile.jpg') }}"
                                                class="rounded-circle img-fluid border border-2 border-white">
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="card-header text-center border-0 pt-0 pt-lg-2 pb-4 pb-lg-3">
                            @if ($role === "pending")
                                <div class="d-flex justify-content-center align-items-center">
                                    <button wire:click.prevent='confirmVerification' class="btn btn-sm btn-success m-0 w-100">Confirm Verification</button>
                                </div>
                            @else
                            <div class="d-flex justify-content-center align-items-center">
                                <span class="badge badge-sm {{ ($role === 'admin') ? 'bg-gradient-success' : (($role === 'member') ? 'bg-gradient-info' : 'bg-gradient-warning') }}">{{ $role }}</span>
                            </div>
                            @endif
                        </div>
                        <div class="card-body pt-0">
                            <div class="row">
                                <div class="col">
                                    <div class="d-flex justify-content-center">
                                        <div class="d-grid text-center">
                                            <span class="text-lg font-weight-bolder">{{ $posts }}</span>
                                            <span class="text-sm opacity-8">Posts</span>
                                        </div>
                                        <div class="d-grid text-center mx-4">
                                            <span class="text-lg font-weight-bolder">{{ $followers }}</span>
                                            <span class="text-sm opacity-8">Followers</span>
                                        </div>
                                        <div class="d-grid text-center">
                                            <span class="text-lg font-weight-bolder">{{ $followings }}</span>
                                            <span class="text-sm opacity-8">Followings</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center mt-4">
                                <h5>
                                    {{ $name }}<span class="font-weight-light">, 35</span>
                                </h5>
                                <div class="h6 font-weight-300">
                                    <i class="ni location_pin mr-2"></i>{{ $email }}
                                </div>
                                <div class="h6 mt-4">
                                    Profile Bio 
                                </div>
                                <div>
                                    {{ $bio }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>