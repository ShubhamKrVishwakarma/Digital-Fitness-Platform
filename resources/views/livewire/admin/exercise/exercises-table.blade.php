<div x-show="exercisesTable">
    <div class="row mb-3">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0 d-flex justify-content-between align-items-center flex-wrap">
                    <h6>Products table</h6>
                    <button class="btn btn-sm btn-primary my-1" x-on:click="exercisesTable = false, addExercise = true">Add Exercise</button>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        ID</th>
                                    <th
                                        class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">
                                        Exercise</th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                        Name</th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                        Type</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($exercises as $exercise)
                                    <tr wire:key='{{ $exercise->id }}'>
                                        <td>
                                            <span class="ms-3 text-xs font-weight-bold">{{ $exercise->id }}</span>
                                        </td>
                                        <td class="d-flex justify-content-center align-items-center">
                                            <div class="px-2" style="width: 200px;">
                                                <img src="{{ $exercise->getExerciseGif()  }}" class="w-100 rounded" alt="Product">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <span class="">{{ $exercise->name }}</span>
                                        </td>
                                        <td class="text-center">
                                            <span class="badge badge-sm bg-gradient-info">{{ $exercise->type }}</span>
                                        </td>
                                        <td class="text-center">
                                            <button @click="$dispatch('manage-exercise', { id: {{ $exercise->id }} })" class="me-2 btn btn-xs btn-dark mb-0" x-on:click="exercisesTable = false, manageExercise = true">Manage</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="px-4 pt-2">
                            {{ $exercises->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>