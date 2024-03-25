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

@push('scripts')
<script>
    document.addEventListener('alert', (event) => {
        Swal.fire({
            icon: event.detail.icon,
            title: event.detail.title,
            text: event.detail.text,
        });
    });
</script>
@endpush