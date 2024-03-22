<div class="col-lg-6 mb-4">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center flex-wrap pb-0 p-3">
            <h6 class="mb-0">Categories</h6>
            <label class="btn btn-sm btn-dark my-1" for="add-category" x-on:click='manageCategory = false, addCategory = true'>Add Category</label>
        </div>
        <hr class="bg-dark mb-0">
        <div class="card-body p-3">
            <ul class="list-group">
                @if ($categories->count() < 1)
                    <li class="list-group-item border-0">
                        <p>No Categories Found</p>
                    </li>
                @endif
                @foreach ($categories as $category)
                    <li wire:key='{{ $category->id }}' class="list-group-item border-0 d-flex justify-content-between flex-wrap ps-0 mb-2 border-radius-lg">
                        <div class="d-flex align-items-center">
                            <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                                <i class="fa-solid fa-box-open text-white opacity-10"></i>
                            </div>
                            <div class="d-flex flex-column justify-content-center align-items-center">
                                <h6 class="mb-1 text-dark text-sm">{{ $category->name }}</h6>
                                {{-- <span class="text-xs">250 in stock, <span class="font-weight-bold">346+
                                        sold</span></span> --}}
                            </div>
                        </div>
                        <div class="d-flex">
                            <button @click="$dispatch('edit-category', { id: {{ $category->id }} })" class="btn btn-sm btn-outline-danger my-2" x-on:click="addCategory = false, manageCategory = true">Edit</button>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
