<div x-show="reviewsTable" class="row mt-4">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-0">
                <h6>Recent Reviews</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    ID
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    User Info
                                </th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Review Type
                                </th>
                                <th
                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Rating
                                </th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Date
                                </th>
                                <th class="text-secondary opacity-7"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($reviews as $review)
                                <tr wire:key='{{ $review->id }}'>
                                    <td>
                                        <p class="ms-3">{{ $review->id }}</p>
                                    </td>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div>
                                                <img src="{{ $review->user->getProfileUrl() }}" class="avatar avatar-sm me-3" alt="{{ $review->user->name }}">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">{{ $review->user->name }}</h6>
                                                <p class="text-xs text-secondary mb-0">{{ $review->user->email }}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class="badge badge-sm bg-gradient-warning">Trainer</span>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0"><i
                                                class="fa-solid fa-star text-success"></i> {{ $review->rating }}</p>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-xs font-weight-bold">{{ $review->created_at->format('d-m-Y') }}</span>
                                    </td>
                                    <td class="align-middle">
                                        <button @click="$dispatch('manage-review', {id: {{ $review->id }}})" class="btn btn-xs btn-primary m-0" x-on:click="reviewsTable = false, manageReviews = true">Manage</button>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center">
                                        <h6>No Reviews Found</h6>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>