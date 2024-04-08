<div x-show="manageReviews" class="row mt-4" style="display: none;">
    <div class="col-md-12 d-flex justify-content-end">
        <button wire:click.prevent='resetAll' class="btn btn-sm btn-dark" x-on:click="manageReviews = false, reviewsTable = true">View All Reviews</button>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header text-center py-2">
                <div class="avatar avatar-xxl position-relative">
                    <img src="http://127.0.0.1:8000/storage/products/product-1.jpg" class="w-100 border-radius-lg shadow-sm">
                </div>
                {{-- <div class="d-flex justify-content-center">
                    <span class="btn btn-sm btn-info mb-0 d-none d-lg-block my-2">Trainer</span>
                </div> --}}
            </div>
            <div class="card-body pt-0">
                {{-- <div class="row">
                    <div class="col">
                        <div class="d-flex justify-content-center">
                            <div class="d-grid text-center">
                                <span class="text-lg font-weight-bolder">22</span>
                                <span class="text-sm opacity-8">Posts</span>
                            </div>
                            <div class="d-grid text-center mx-4">
                                <span class="text-lg font-weight-bolder">10</span>
                                <span class="text-sm opacity-8">Followers</span>
                            </div>
                            <div class="d-grid text-center">
                                <span class="text-lg font-weight-bolder">89</span>
                                <span class="text-sm opacity-8">Following</span>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="text-center">
                    <h5>
                        Mark Davis
                    </h5>
                    <div class="h6 font-weight-300">
                        Category
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- User Review --}}
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-column flex-md-row justify-content-start align-items-center flex-wrap gap-3">
                    <div class="d-flex justify-content-between align-items-center flex-wrap w-100">
                        <div class="d-flex px-2 py-1">
                            <div>
                                <img src="{{ $pic }}" class="avatar avatar-sm me-3" alt="{{ $name }}">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-sm">{{ $name }}</h6>
                                <p class="text-xs text-secondary mb-0">{{ $email }}</p>
                            </div>
                        </div>
                        <div>
                            <button wire:confirm.prompt='Are u Sure?\nEnter password to "DELETE"|aaaa' wire:click.prevent='delete' class="btn btn-xs btn-danger mb-0" x-on:click="manageReviews = false, reviewsTable = true"><i class="fa-solid fa-trash"></i></button>
                        </div>
                    </div>
                    <!-- Product Details -->
                    <div class="d-flex flex-column justify-content-center ps-3">
                        <span class="mb-2"><i class="fa-solid fa-star text-success"></i> {{ $rating }}</span>
                        <span class="mb-1 text-xs">{{ $review }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>