<div x-show="addWorkoutPlan" style="display: none;">
    <form>
        <div class="row">
            <div class="col-12 d-flex justify-content-between align-items-center flex-wrap mb-2">
                <h3 class="text-light ms-2 font-weight-bolder">View All Plans</h3>
                <button class="btn btn-sm btn-dark mb-0 me-4" x-on:click="addWorkoutPlan = false, workoutPlansTable = true">View All Workout Plans</button>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body mb-3">
                        <h6>Workout Plan Information</h6>
                        <div class="col-12 mb-3">
                            <label class="form-label-control">Plan Name</label>
                            <input type="text" class="form-control" placeholder="Workout Plan Name" required>
                        </div>
                        <div class="col-12 mb-3">
                            <label class="form-label-control">Strength Level</label>
                            <input type="file" class="form-control" required>
                        </div>
                        <div class="col-12">
                            <h6>Exercises Information</h6>
                        </div>
                        <div class="table-responsive p-0">
                            <table class="table align-items-center justify-content-center mb-0">
                                <thead>
                                    <tr>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Exercise</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                            Type</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2">
                                                <div>
                                                    <img src="../images/team-3.jpg" class="avatar me-3"
                                                        alt="Product">
                                                </div>
                                                <div class="my-auto">
                                                    <h6 class="mb-0 text-sm">DUMBELL PRESS</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <span class="text-xs font-weight-bold">Chest</span>
                                        </td>
                                        <td class="text-center">
                                            <button class="me-2 btn btn-xs btn-danger mb-0"
                                                data-manage-product="12"><i
                                                    class="fa-solid fa-xmark"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="input-group">
                            <span class="input-group-text text-body"><i class="fas fa-search"
                                    aria-hidden="true"></i></span>
                            <input type="text" class="form-control" placeholder="Search Exercises here...">
                        </div>
                        <div class="p-3">
                            <ul class="list-group">
                                <li
                                    class="list-group-item border-0 d-flex justify-content-between flex-wrap ps-0 mb-2 border-radius-lg">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <img src="../images/team-3.jpg" class="avatar-xxl rounded me-3"
                                                alt="Product">
                                        </div>
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-1 text-dark text-sm">DUMBELL INCLINE BENCH PRESS
                                            </h6>
                                            <span class="text-xs">Shoulder</span>
                                        </div>
                                    </div>
                                    <div class="d-flex mt-3">
                                        <button class="btn btn-sm btn-primary my-auto">Add</button>
                                    </div>
                                </li>
                                <li
                                    class="list-group-item border-0 d-flex justify-content-between flex-wrap ps-0 mb-2 border-radius-lg">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <img src="../images/team-3.jpg" class="avatar-xxl rounded me-3"
                                                alt="Product">
                                        </div>
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-1 text-dark text-sm">DUMBELL INCLINE BENCH PRESS
                                            </h6>
                                            <span class="text-xs">Shoulder</span>
                                        </div>
                                    </div>
                                    <div class="d-flex mt-3">
                                        <button class="btn btn-sm btn-primary my-auto">Add</button>
                                    </div>
                                </li>
                                <li
                                    class="list-group-item border-0 d-flex justify-content-between flex-wrap ps-0 mb-2 border-radius-lg">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <img src="../images/team-3.jpg" class="avatar-xxl rounded me-3"
                                                alt="Product">
                                        </div>
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-1 text-dark text-sm">DUMBELL INCLINE BENCH PRESS
                                            </h6>
                                            <span class="text-xs">Shoulder</span>
                                        </div>
                                    </div>
                                    <div class="d-flex mt-3">
                                        <button class="btn btn-sm btn-primary my-auto">Add</button>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>