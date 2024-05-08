<div x-show="manageSubscription" style="display: none;">
    <form wire:submit='update'>
        <div class="row">
            <div class="col-12 d-flex justify-content-between align-items-center mb-3">
                <h3 class="text-light ms-2 font-weight-bolder">Manage Exercise</h3>
                <button class="btn btn-sm btn-dark mb-0 me-4" wire:click.prevent='resetAll' x-on:click="manageSubscription = false, subscriptionsTable = true">All Subscriptions</button>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body mb-3">
                        <div class="col-12 d-flex justify-content-between align-items-center flex-wrap">
                            <h6>Subscription ID : {{ $id }}</h6>
                            <button wire:confirm.prompt='Are u sure?\nEnter password to "DELETE"|aaaa' wire:click.prevent='delete({{ $id }})' class="btn btn-xs btn-danger mb-0" x-on:click="manageSubscription = false, subscriptionsTable = true">Delete</button>
                        </div>
                        <div class="col-12 mb-3">
                            <div class="d-flex px-2">
                                <div>
                                    <img src="{{ $user_pic }}" class="avatar me-3">
                                </div>
                                <div class="my-auto">
                                    <h6 class="mb-0 text-sm">{{ $user_name }}</h6>
                                    <p class="text-xs text-secondary mb-0">{{ $user_email }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mb-3">
                            <div class="d-flex px-2">
                                <div>
                                    <img src="{{ $trainer_pic }}" class="avatar me-3">
                                </div>
                                <div class="my-auto">
                                    <h6 class="mb-0 text-sm">{{ $trainer_name }}</h6>
                                    <p class="text-xs text-secondary mb-0">{{ $trainer_email }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mb-3">
                            <label class="form-label-control">Subscription Type</label>
                            <select wire:model='type' class="form-control" required>
                                <option value="" selected>Select Type</option>
                                <option value="monthly">Monthly</option>
                                <option value="yearly">Yearly</option>
                            </select>
                            @error('type')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12 mb-3">
                            <button class="btn btn-sm btn-success m-0">Update</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>