<div x-show="addSubscription" style="display: none;">
    <form wire:submit='addSubscription'>
        <div class="row">
            <div class="col-12 d-flex justify-content-between align-items-center mb-2">
                <h3 class="text-light ms-2 font-weight-bolder">Add New Subscription</h3>
                <button class="btn btn-sm btn-dark mb-0 me-4" x-on:click.prevent="addSubscription = false, subscriptionsTable = true">View
                    All Subscriptions</button>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body mb-3">
                        <div class="row">
                            <h6>Add New Subscription</h6>
                            <div class="col-md-12 mb-3">
                                <label for="" class="form-label-control">Select User</label>
                                <select wire:model='user_id' class="form-control" required>
                                    <option value="" selected>Select User</option>
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}">
                                            <div>
                                                <h6 class="mb-0 text-sm">{{ $user->id }} - {{ $user->name }} - {{ $user->email }}</h6>
                                            </div>
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="" class="form-label-control">Select Trainer</label>
                                <select wire:model='trainer_id' class="form-control" required>
                                    <option value="" selected>Select Trainer</option>
                                    @foreach ($trainers as $trainer)
                                        <option value="{{ $trainer->id }}">
                                            <div>
                                                <h6 class="mb-0 text-sm">{{ $trainer->id }} - {{ $trainer->name }} - {{ $trainer->email }}</h6>
                                            </div>
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label class="form-label-control">Subscription Type</label>
                                <select wire:model='type' class="form-control" required>
                                    <option value="">Select Type</option>
                                    <option value="monthly">Monthly</option>
                                    <option value="yearly">Yearly</option>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-sm btn-dark m-0">Add Subscription</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>