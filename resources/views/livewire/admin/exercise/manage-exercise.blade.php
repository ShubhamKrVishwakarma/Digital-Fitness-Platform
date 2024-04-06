<div x-show="manageExercise" style="display: none;">
    <form wire:submit='update' enctype="multipart/form-data">
        <div class="row">
            <div class="col-12 d-flex justify-content-between align-items-center mb-3">
                <h3 class="text-light ms-2 font-weight-bolder">Manage Exercise</h3>
                <button class="btn btn-sm btn-dark mb-0 me-4" wire:click.prevent='resetAll' x-on:click="manageExercise = false, exercisesTable = true">View All Products</button>
            </div>
            <div class="col-md-12">
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
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12 mb-3">
                            <label class="form-label-control">Type</label>
                            <select wire:model='type' class="form-control" required>
                                <option value="" selected>Change Exercise Type</option>
                                <option value="chest">Chest</option>
                                <option value="back">Back</option>
                                <option value="shoulder">Shoulder</option>
                                <option value="bicep">Bicep</option>
                                <option value="tricep">Tricep</option>
                                <option value="leg">Leg</option>
                                <option value="abs">Abs</option>
                            </select>
                            @error('type')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12 mb-3">
                            <label class="form-label-control">Equipment</label>
                            <input type="text" wire:model='equipment' class="form-control">
                            @error('equipment')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12 mb-3">
                            <label class="form-label-control">Image</label>
                            <input type="file" accept="image/png, image/gif, image/jpeg" wire:model='new_image' class="form-control">
                            @error('image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        @if ($new_image)
                            <div class="col-12 mb-3">
                                <p class="mt-2">Preview:</p>
                                <img src="{{ $new_image->temporaryUrl() }}" alt="Product Image" class="rounded h-20 w-20">
                            </div>
                        @endif
                        <div class="col-12 mb-3">
                            <button class="btn btn-sm btn-success m-0">Update</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
