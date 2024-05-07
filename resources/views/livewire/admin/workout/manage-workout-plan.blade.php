<div x-show="manageWorkoutPlan" style="display: none;">
    <form wire:submit='update'>
        <div class="row">
            <div class="col-12 d-flex justify-content-between align-items-center flex-wrap mb-2">
                <h3 class="text-light ms-2 font-weight-bolder">Manage Workout Plan</h3>
                <button type="button" class="btn btn-sm btn-dark mb-0 me-4" wire:click.prevent='resetAll' x-on:click="manageWorkoutPlan = false, workoutPlansTable = true">View All Workout Plans</button>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body mb-3">
                        <div class="col-12 d-flex justify-content-between align-items-center flex-wrap">
                            <h6>Workout Plan ID : {{ $id }}</h6>
                            <button wire:confirm.prompt='Are u Sure?\nEnter password to "DELETE"|aaaa' wire:click='delete' type="button" class="btn btn-sm btn-danger my-2" x-on:click="manageWorkoutPlan = false, workoutPlansTable = true">Delete</button>
                        </div>
                        <div class="col-12 mb-3">
                            <label class="form-label-control">Plan Name</label>
                            <input type="text" wire:model='name' class="form-control" placeholder="Workout Plan Name" required>
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12 mb-3">
                            <label class="form-label-control">Strength Level</label>
                            <select wire:model='level' class="form-control" required>
                                <option value="" selected>Select Strength Level</option>
                                <option value="beginner">Begineer</option>
                                <option value="intermediate">Intermediate</option>
                                <option value="advanced">Advanced</option>
                            </select>
                            @error('level')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12 mb-3">
                            <label class="form-label-control">Duration (in minutes)</label>
                            <input type="number" wire:model='duration' class="form-control" placeholder="Plan Duration in Minutes" required>
                            @error('duration')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12 mb-3">
                            <label class="form-label-control">Calories</label>
                            <input type="number" wire:model='calories' class="form-control" placeholder="Calories" required>
                            @error('calories')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <h6>Exercises Information</h6>
                        </div>
                        <div class="table-responsive p-0">
                            <table class="table align-items-center justify-content-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Exercise</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                            Type</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($exerciseDetails as $index => $exercise)
                                        <tr wire:key="{{ $index }}">
                                            <td>
                                                <div>
                                                    <div class="d-flex px-2 mb-2">
                                                        <div>
                                                            <img src="{{ $exercise->getExerciseGif() }}" class="avatar me-3"
                                                                alt="Product">
                                                        </div>
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-sm">{{ $exercise->name }}</h6>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <input type="number" wire:model='sets.{{ $exercise->id }}' min="1" class="form-control" placeholder="Sets" required>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <input type="number" wire:model='reps.{{ $exercise->id }}' min="1" class="form-control" placeholder="Reps" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <span class="text-xs font-weight-bold">{{ $exercise->type }}</span>
                                            </td>
                                            <td class="text-center">
                                                <button wire:click.prevent='removeExercise({{ $index }})' class="me-2 btn btn-xs btn-danger mb-0"><i class="fa-solid fa-xmark"></i></button>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="3" class="text-center">
                                                <span class="text-md font-weight-bold">No Exercise Added</span>
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        <div class="input-group mt-3">
                            <button type="submit" class="btn btn-sm btn-primary m-0">Update</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="input-group">
                            <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                            <input type="text" wire:model.live.debounce.300ms='search' class="form-control" placeholder="Search Exercises here...">
                        </div>
                        <div class="p-3">
                            <ul class="list-group">
                                @forelse ($exercises as $exercise)
                                    <li wire:key='{{ $exercise->id }}'
                                        class="list-group-item border-0 d-flex justify-content-between flex-wrap ps-0 mb-2 border-radius-lg">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <img src="{{ $exercise->getExerciseGif() }}"
                                                    class="avatar-xxl rounded me-3" alt="Exercise">
                                            </div>
                                            <div class="d-flex flex-column">
                                                <h6 class="mb-1 text-dark text-sm">{{ $exercise->name }}</h6>
                                                <span class="text-xs">{{ $exercise->type }}</span>
                                            </div>
                                        </div>
                                        <div class="d-flex mt-3">
                                            <button wire:click.prevent='addExercise({{ $exercise->id }})'
                                                class="btn btn-sm btn-primary my-auto">Add</button>
                                        </div>
                                    </li>
                                @empty
                                    <div class="d-flex justify-content-center align-items-center">
                                        <h6 class="text-dark text-md">No Exercises Available</h6>
                                    </div>
                                @endforelse
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
