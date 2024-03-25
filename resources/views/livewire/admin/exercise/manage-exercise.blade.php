<div x-show="manageExercise" style="display: none;">
    <form wire:submit='update'>
        <div class="row">
            <div class="col-12 d-flex justify-content-between align-items-center mb-3">
                <h3 class="text-light ms-2 font-weight-bolder">Manage Exercise</h3>
                <a class="btn btn-sm btn-dark mb-0 me-4" x-on:click="manageExercise = false, exercisesTable = true">View All Products</a>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body mb-3">
                        <div class="col-12 mb-3">
                            <div class="px-2" style="width: 300px;">
                                <img src="{{ url('storage') . '/' . $image }}" class="w-100 rounded" alt="Product">
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-between align-items-center flex-wrap">
                            <h6>Exercise ID : {{ $id }}</h6>
                            <button wire:confirm.prompt='Are u Sure?\nEnter Password to "DELETE"|aaaa' wire:click.prevent='delete' x-on:click='manageExercise = false, exercisesTable = true' class="btn btn-sm btn-danger my-2">Delete</button>
                        </div>
                        <div class="col-12 mb-3">
                            <label class="form-label-control">Exercise Name</label>
                            <input type="text" wire:model='name' class="form-control" placeholder="Exercise Name" required>
                        </div>
                        <div class="col-12">
                            <label class="form-label-control">Image</label>
                            <input type="file" wire:model='new_image' class="form-control">
                        </div>
                        @if ($new_image)
                            <div class="col-12 mb-2">
                                <p class="mt-2">Preview:</p>
                                <img src="{{ $new_image->temporaryUrl() }}" alt="Product Image" class="rounded h-20 w-20">
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="col-12 mb-3">
                            <label class="form-label-control">Type</label>
                            <select wire:model='type' class="form-control">
                                <option value="">Chest</option>
                                <option value="">Back</option>
                                <option value="">Shoulder</option>
                                <option value="">Bicep</option>
                                <option value="">Tricep</option>
                                <option value="">Leg</option>
                                <option value="">Abs</option>
                            </select>
                        </div>
                        <div class="col-12 mb-3">
                            <button class="btn btn-sm btn-success m-0 mt-2">Update</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
