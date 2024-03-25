@extends('layouts.adminLayout')

@section('title', 'Workout')

@section('content')
    <div x-data="{exercisesTable : true, addExercise : false, manageExercise : false}" class="container-fluid py-4">
        <!-- Workouts Table -->
        @livewire('Admin.Exercise.ExercisesTable')
        <!-- Add Exercises -->
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
        <!-- Manage Exercises -->
        <div x-show="manageExercise" style="display: none;">
            <form>
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
                                    <h6>Product ID : 2223</h6>
                                    <a class="btn btn-sm btn-danger my-2">Delete</a>
                                </div>
                                <div class="col-12 mb-3">
                                    <label class="form-label-control">Exercise Name</label>
                                    <input type="text" class="form-control" placeholder="Exercise Name" required>
                                </div>
                                <div class="col-12">
                                    <label for="" class="form-label-control">Image</label>
                                    <input type="file" class="form-control" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="col-12 mb-3">
                                    <label for="" class="form-label-control">Type</label>
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
                                <div class="col-12 mb-3">
                                    <label for="" class="form-label-control">Difficulty Level</label>
                                    <select class="form-control" required>
                                        <option value="">Select Category</option>
                                        <option value="">Protien</option>
                                        <option value="">Equipment</option>
                                        <option value="">T-shirt</option>
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
    </div>
@endsection
