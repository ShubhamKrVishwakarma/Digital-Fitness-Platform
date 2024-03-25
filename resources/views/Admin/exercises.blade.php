@extends('layouts.adminLayout')

@section('title', 'Workout')

@section('content')
    <div x-data="{exercisesTable : true, addExercise : false, manageExercise : false}" class="container-fluid py-4">
        <!-- Workouts Table -->
        @livewire('Admin.Exercise.ExercisesTable')
        <!-- Add Exercises -->
        @livewire('Admin.Exercise.AddExercise')
        <!-- Manage Exercises -->
        @livewire('Admin.Exercise.ManageExercise')
    </div>
@endsection
