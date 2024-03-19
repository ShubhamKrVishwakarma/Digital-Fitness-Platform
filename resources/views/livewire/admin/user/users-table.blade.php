<div x-show="usersTable">
    <div class="row mb-3">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0 d-flex justify-content-between align-items-center flex-wrap">
                    <h6>Products table</h6>
                    <div>
                        <button x-on:click="usersTable = false, addMember = true" class="btn btn-xs btn-warning my-1 me-0 me-md-2">Add Member</button>
                        <button x-on:click="usersTable = false, addTrainer = true" class="btn btn-xs btn-dark my-1">Add Trainer</button>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center justify-content-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        ID</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        User</th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                        Role</th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                        Joined Date</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr wire:key='{{ $user->id }}'>
                                        <td>
                                            <p class="ps-2 text-secondary mb-0">{{ $user->id }}</p>
                                        </td>
                                        <td>
                                            <div class="d-flex px-2">
                                                <div>
                                                    <img src="{{ $user->getProfileUrl() }}" class="avatar me-3" alt="Product">
                                                </div>
                                                <div class="my-auto">
                                                    <h6 class="mb-0 text-sm">{{ $user->name }}</h6>
                                                    <p class="text-xs text-secondary mb-0">{{ $user->email }}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span class="badge badge-sm {{ ($user->role === 'admin') ? 'bg-gradient-success' : (($user->role === 'member') ? 'bg-gradient-primary' : (($user->role === 'trainer') ? 'bg-gradient-warning' : 'bg-gradient-secondary')) }}">{{ $user->role }}</span>
                                        </td>
                                        <td class="text-center">
                                            <span class="text-xs font-weight-bold">{{ $user->created_at->format('d-m-Y') }}</span>
                                        </td>
                                        <td class="text-center">
                                            <button x-on:click="usersTable = false, manageUser = true" class="me-2 btn btn-xs btn-outline-danger mb-0">Manage</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="px-4 pt-2">
                            {{ $users->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
