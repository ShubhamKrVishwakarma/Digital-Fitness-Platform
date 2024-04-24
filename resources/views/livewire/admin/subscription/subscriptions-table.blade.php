<div x-show="subscriptionsTable">
    <div class="row mb-3">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0 d-flex justify-content-between align-items-center flex-wrap">
                    <h6>Subscriptions Table</h6>
                    <button class="btn btn-sm btn-dark m-0" x-on:click="subscriptionsTable = false, addSubscription = true">Add Subscription</button>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        @if ($subscriptions->count() < 1)
                            <h4 class="ms-2 ms-md-4">No Subscriptions Found</h4>
                        @else
                            <table class="table align-items-center justify-content-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Member</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Trainer</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Type</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($subscriptions as $subscription)
                                        <tr wire:key='{{ $subscription->id }}'>
                                            <td>
                                                <span class="ms-3 text-xs font-weight-bold">{{ $subscription->id }}</span>
                                            </td>
                                            <td>
                                                <div class="d-flex px-2">
                                                    <div>
                                                        <img src="{{ $subscription->member->getProfileUrl() }}" class="avatar me-3">
                                                    </div>
                                                    <div class="my-auto">
                                                        <h6 class="mb-0 text-sm">{{ $subscription->member->name }}</h6>
                                                        <p class="text-xs text-secondary mb-0">{{ $subscription->member->email }}</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex px-2">
                                                    <div>
                                                        <img src="{{ $subscription->trainer->getProfileUrl() }}" class="avatar me-3">
                                                    </div>
                                                    <div class="my-auto">
                                                        <h6 class="mb-0 text-sm">{{ $subscription->trainer->name }}</h6>
                                                        <p class="text-xs text-secondary mb-0">{{ $subscription->trainer->email }}</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-sm">
                                                <span class="badge badge-sm bg-gradient-info">{{ $subscription->type }}</span>
                                            </td>
                                            <td class="text-center">
                                                <button @click="$dispatch('manage-subscription', { id: {{ $subscription->id }} })" class="btn btn-xs btn-primary m-0" x-on:click="subscriptionsTable = false, manageSubscription = true">Manage</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="px-4 pt-2">
                                {{ $subscriptions->links() }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
