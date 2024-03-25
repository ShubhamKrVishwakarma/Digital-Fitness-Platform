<div x-show="addExercise" style="display: none;">
    <form wire:submit='store'>
        <div class="row">
            <div class="col-12 d-flex justify-content-between align-items-center mb-2">
                <h3 class="text-light ms-2 font-weight-bolder">Add New Exercise</h3>
                <button class="btn btn-sm btn-dark mb-0 me-4" x-on:click="addExercise = false, exercisesTable = true">View
                    All Exercises</button>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body mb-3">
                        <div class="row">
                            <h6>Exercise Information</h6>
                            <div class="col-md-12 mb-3">
                                <label for="" class="form-label-control">Exercise Name</label>
                                <input type="text" wire:model='name' class="form-control" placeholder="Exercise Name"
                                    required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label-control">Exercise Type</label>
                                <select wire:model='type' class="form-control" required>
                                    <option value="" selected>Select Exercise Type</option>
                                    <option value="chest">Chest</option>
                                    <option value="back">Back</option>
                                    <option value="shoulder">Shoulder</option>
                                    <option value="bicep">Bicep</option>
                                    <option value="tricep">Tricep</option>
                                    <option value="leg">Leg</option>
                                    <option value="abs">Abs</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label-control">Equipment</label>
                                <input type="text" wire:model='equipment' class="form-control"
                                    placeholder="Equipment" required>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label class="form-label-control">Image</label>
                                <input type="file" wire:model='image' class="form-control" required>
                            </div>
                            @if ($image)
                                <div class="col-12 mb-2">
                                    <p class="mt-2">Preview:</p>
                                    <img src="{{ $image->temporaryUrl() }}" alt="Product Image" class="rounded h-20 w-20">
                                </div>
                            @endif
                            <div class="col-md-12">
                                <button class="btn btn-sm btn-dark m-0">Add Exercise</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
