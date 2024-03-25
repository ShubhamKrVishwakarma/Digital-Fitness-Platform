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
                                <img src="../images/team-3.jpg" class="w-100 rounded" alt="Product">
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-between align-items-center flex-wrap">
                            <h6>Exercise ID : {{ $id }}</h6>
                            <a class="btn btn-sm btn-danger my-2">Delete</a>
                        </div>
                        <div class="col-12 mb-3">
                            <label class="form-label-control">Exercise Name</label>
                            <input type="text" wire:model='name' class="form-control" placeholder="Exercise Name" required>
                        </div>
                        <div class="col-12">
                            <label class="form-label-control">Image</label>
                            <input type="file" wire:model='new_image' class="form-control" required>
                        </div>
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
                            <button type="submit" class="btn btn-sm btn-success m-0 mt-2">Update</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
