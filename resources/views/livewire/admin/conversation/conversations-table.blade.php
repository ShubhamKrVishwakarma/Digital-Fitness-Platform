<div x-show="conversationsTable">
    <div class="row mb-3">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0 d-flex justify-content-between align-items-center flex-wrap">
                    <h6>Conversations Table</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        @if ($conversations->count() < 1)
                            <h4 class="ms-2 ms-md-4">No Conersations Found</h4>
                        @else
                            <table class="table align-items-center justify-content-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Member</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Trainer</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($conversations as $conversation)
                                        <tr wire:key='{{ $conversation->id }}'>
                                            <td>
                                                <span class="ms-3 text-xs font-weight-bold">{{ $conversation->id }}</span>
                                            </td>
                                            <td>
                                                <div class="d-flex px-2">
                                                    <div>
                                                        <img src="http://127.0.0.1:8000/./images/profile/profile.jpg" class="avatar me-3">
                                                    </div>
                                                    <div class="my-auto">
                                                        <h6 class="mb-0 text-sm">{{ $conversation->member->name }}</h6>
                                                        <p class="text-xs text-secondary mb-0">{{ $conversation->member->email }}</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex px-2">
                                                    <div>
                                                        <img src="http://127.0.0.1:8000/./images/profile/profile.jpg" class="avatar me-3">
                                                    </div>
                                                    <div class="my-auto">
                                                        <h6 class="mb-0 text-sm">{{ $conversation->trainer->name }}</h6>
                                                        <p class="text-xs text-secondary mb-0">{{ $conversation->trainer->email }}</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <button wire:confirm.prompt='Are u sure?\nEnter password to "DELETE"|aaaa' wire:click='delete({{ $conversation->id }})' class="btn btn-xs btn-danger mb-0">Delete</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="px-4 pt-2">
                                {{ $conversations->links() }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
