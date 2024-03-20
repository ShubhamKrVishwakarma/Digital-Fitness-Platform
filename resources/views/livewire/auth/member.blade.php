<div class="container">
    <div class="row mt-n12 justify-content-center">
        <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
            <div class="card z-index-0">
                <div class="card-header text-center pt-4 pb-0">
                    <h5>Create New Account</h5>
                </div>
                <div class="card-body">
                    <form wire:submit='create'>
                        @csrf
                        <div class="mb-3">
                            <input type="text" class="form-control" wire:model='name' placeholder="Name" required>
                            @error('name')
                                <span class="text-danger d-block ms-1 mt-1">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" wire:model='email' placeholder="Email" required>
                            @error('email')
                                <span class="text-danger d-block ms-1 mt-1">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label class="form-label-control-control">Gender</label>
                            <select class="form-control" wire:model='gender' required>
                                <option value="" selected>Select Gender</option>
                                <option value="M">Male</option>
                                <option value="F">Female</option>
                                <option value="O">Others</option>
                            </select>
                            @error('gender')
                                <span class="text-danger d-block ms-1 mt-1">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label-control">Date of Birth</label>
                            <input type="date" class="form-control" wire:model='dob' required>
                            @error('dob')
                                <span class="text-danger d-block ms-1 mt-1">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" wire:model='password' placeholder="Password" required>
                            @error('password')
                                <span class="text-danger d-block ms-1 mt-1">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" wire:model='confirm_password' placeholder="Confirm Password" required>
                            @error('confirm_password')
                                <span class="text-danger d-block ms-1 mt-1">{{ $message }}</span>
                            @enderror
                        </div>
                        <div  wire:loading.block>
                            <button class="btn bg-success text-white w-100">Processing....</button>
                        </div>
                        <div wire:loading.remove class="text-center">
                            <button type="submit" class="btn bg-gradient-dark w-100">Create Account</button>
                        </div>
                        <p class="text-sm text-center mt-1 mb-0">Already have an account? <a href="{{ route('login') }}"
                                class="text-dark font-weight-bolder">Login</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>