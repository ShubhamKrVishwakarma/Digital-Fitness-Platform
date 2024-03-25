<div x-show="addExercise" style="display: none;">
    <form>
        <div class="row">
            <div class="col-12 d-flex justify-content-between align-items-center mb-2">
                <h3 class="text-light ms-2 font-weight-bolder">Add New Exercise</h3>
                <button class="btn btn-sm btn-dark mb-0 me-4" x-on:click="addExercise = false, exercisesTable = true">View All Exercises</button>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body mb-3">
                        <div class="row">
                            <h6>Exercise Information</h6>
                            <div class="col-md-12 mb-3">
                                <label for="" class="form-label-control">Exercise
                                    Name</label>
                                <input type="text" class="form-control" placeholder="Exercise Name" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="" class="form-label-control">Exercise
                                    Type</label>
                                <select class="form-control">
                                    <option value="">Chest</option>
                                    <option value="">Back</option>
                                    <option value="">Shoulder</option>
                                    <option value="">Bicep</option>
                                    <option value="">Tricep</option>
                                    <option value="">Leg</option>
                                    <option value="">Abs</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="" class="form-label-control">Difficulty
                                    Level</label>
                                <select class="form-control">
                                    <option value="">Begineer</option>
                                    <option value="">Intermediate</option>
                                    <option value="">Advanced</option>
                                </select>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="" class="form-label-control">Image</label>
                                <input type="file" class="form-control" required>
                            </div>
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