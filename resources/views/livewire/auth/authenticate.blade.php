<div class="card card-plain">
    <div class="card-header pb-0 text-start">
        <h4 class="font-weight-bolder">Welcome Back!</h4>
        <p class="mb-0">Enter your email and password to Login in</p>
    </div>
    <div class="card-body">
        <form wire:submit='authenticate'>
            <div class="mb-3">
                <input type="email" wire:model='email' class="form-control form-control-lg" placeholder="Email" required>
                @error('email')
                    <span class="text-danger d-block ms-1 mt-1">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <input type="password" wire:model='password' class="form-control form-control-lg" placeholder="Password" required>
                @error('password')
                    <span class="text-danger d-block ms-1 mt-1">{{ $message }}</span>
                @enderror
            </div>
            <div wire:loading.block>
                <button class="btn btn-lg btn-success btn-lg w-100 mt-4 mb-0 text-white">Processing....</button>
            </div>
            <div wire:loading.remove class="text-center">
                <button type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Log in</button>
            </div>
        </form>
    </div>
    <div class="card-footer text-center pt-0 px-lg-2 px-1">
        <p class="mb-4 text-sm mx-auto">
            Don't have an account?
            <a href="{{ route('signup') }}" class="text-primary text-gradient font-weight-bold">Sign
                up</a>
        </p>
    </div>
</div>