<div class="container">
    <div class="row mt-n12 justify-content-center">
        <div class="col-xl-8 col-lg-9 col-md-10 mx-auto">
            <div class="card z-index-0">
                <div class="card-header text-center pt-3 pb-0">
                    <h4 class="m-0">Join as a Trainer</h4>
                </div>
                <div class="card-body">
                    <form wire:submit='store'>
                        <div id="trainer-first-form">
                            <div class="row">
                                <div class="col-md-12">
                                    <h6>Personal Details</h6>
                                </div>
                                <div class="col-md-4 mb-2">
                                    <label class="form-label-control">Full Name</label>
                                    <input type="text" wire:model='name' class="form-control" placeholder="Full Name" required>
                                    @error('name')
                                        <span class="text-danger d-block ms-1 mt-1">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-4 mb-2">
                                    <label class="form-label-control">Email Address</label>
                                    <input type="email" wire:model='email' class="form-control" placeholder="Email Address" required>
                                    @error('email')
                                        <span class="text-danger d-block ms-1 mt-1">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-4 mb-2">
                                    <label class="form-label-control">Date of Birth</label>
                                    <input type="date" wire:model='dob' class="form-control" placeholder="Date Of Birth" required>
                                    @error('dob')
                                        <span class="text-danger d-block ms-1 mt-1">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-4 mb-2">
                                    <label class="form-label-control">Phone Number</label>
                                    <input type="text" wire:model='phone' class="form-control" placeholder="Phone Number" required>
                                    @error('phone')
                                        <span class="text-danger d-block ms-1 mt-1">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-4 mb-2">
                                    <label class="form-label-control">Gender</label>
                                    <select  wire:model='gender' class="form-control" required>
                                        <option value="" selected>Select Gender</option>
                                        <option value="M">Male</option>
                                        <option value="F">Female</option>
                                        <option value="O">Others</option>
                                    </select>
                                    @error('gender')
                                        <span class="text-danger d-block ms-1 mt-1">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-4 mb-2">
                                    <label class="form-label-control">Occupation</label>
                                    <input type="text" wire:model='occupation' class="form-control" placeholder="Enter Occupation" required>
                                    @error('occupation')
                                        <span class="text-danger d-block ms-1 mt-1">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <h6>Professional Information</h6>
                                </div>
                                <div class="col-md-4 mb-2">
                                    <label class="form-label-control">Certificate ID</label>
                                    <input type="text" wire:model='certificate_id' class="form-control" placeholder="Certificate ID" required>
                                    @error('certificate_id')
                                        <span class="text-danger d-block ms-1 mt-1">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-4 mb-2">
                                    <label class="form-label-control">Issued Date</label>
                                    <input type="date" wire:model='issue_date' class="form-control" placeholder="Issued Date" required>
                                    @error('issue_date')
                                        <span class="text-danger d-block ms-1 mt-1">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-4 mb-2">
                                    <label class="form-label-control">Expiry Date</label>
                                    <input type="date" wire:model='expiry_date' class="form-control" placeholder="Expiry Date" required>
                                    @error('expiry_date')
                                        <span class="text-danger d-block ms-1 mt-1">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-4 mb-2">
                                    <label class="form-label-control">Issued Authority</label>
                                    <input type="text" wire:model='issued_authority' class="form-control" placeholder="Issued Authority" required>
                                    @error('issued_authority')
                                        <span class="text-danger d-block ms-1 mt-1">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-4 mb-2">
                                    <label class="form-label-control">Password</label>
                                    <input type="password" wire:model='password' class="form-control" placeholder="Password" required>
                                    @error('password')
                                        <span class="text-danger d-block ms-1 mt-1">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-4 mb-2">
                                    <label class="form-label-control">Confirm Password</label>
                                    <input type="password" wire:model='confirm_password' class="form-control" placeholder="Confirm Password" required>
                                    @error('confirm_password')
                                        <span class="text-danger d-block ms-1 mt-1">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-12">
                                    <button class="btn btn-sm btn-dark m-0">Register as Trainer</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
