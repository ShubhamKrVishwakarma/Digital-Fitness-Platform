<div class="row" x-show="ordersTable">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-0">
                <h6>Orders table</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                        @if ($orders->count() < 1)
                            <h4 class="ms-4 mt-1">No Orders Found</h4>
                        @else
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        User Info</th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Phone Number
                                    </th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Status
                                    </th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Ordered Date</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                    <tr wire:key='{{ $order->id }}'>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    <img src="{{ $order->user->getProfileUrl() }}" class="avatar avatar-sm me-3" alt="{{ $order->user->name }}">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">{{ $order->user->name }}</h6>
                                                    <p class="text-xs text-secondary mb-0">{{ $order->user->email }}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">+91 {{ $order->user->phone }}</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span class="badge badge-sm bg-gradient-secondary">{{ $order->status }}</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold">{{ $order->created_at->format('d-m-Y') }}</span>
                                        </td>
                                        <td class="align-middle">
                                            <button @click="$dispatch('manage-order', { id: {{ $order->id }} })" class="btn btn-xs btn-dark m-0" x-on:click="ordersTable = true, manageOrder = false">Manage</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        @endif
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
