@extends('layouts.adminLayout')

@section('title', 'Category')

@section('content')
    <!-- End Navbar -->
    <div x-data="{workoutPlansTable : true, addWorkoutPlan : false, manageWorkoutPlan : false}" class="container-fluid py-4">
        <!-- Workouts Table -->
        @livewire('Admin.Workout.WorkoutPlanTable')
        <!-- Add Workout Plan -->
        @livewire('Admin.Workout.AddWorkoutPlan')
        <!-- Manage Exercises -->
        @livewire('Admin.Workout.ManageWorkoutPlan')
    </div>
@endsection

@push('scripts')
    <script>
        document.addEventListener('alert', (event) => {
            Swal.fire({
                position: "top-end",
                icon: event.detail.icon,
                title: event.detail.title,
                text: event.detail.text,
                showConfirmButton: false,
                timer: 1200
            });
        });
    </script>
@endpush
