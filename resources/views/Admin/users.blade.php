@extends('layouts.adminLayout')

@section('title', 'Users')

@section('content')
    <div x-data="{usersTable : true, addMember : false, addTrainer : false, manageUser : false}" class="container-fluid py-4">
        <!-- Products Table -->
        @livewire('Admin.User.UsersTable')
        <!-- Add Member -->
        @livewire('Admin.User.AddMember')
        <!-- Add Trainer -->
        @livewire('Admin.User.AddTrainer')
        <!-- Manage User -->
        @livewire('Admin.User.ManageUser')
    </div>
@endsection

@push('scripts')
    <script>
        document.addEventListener('member-success', function () {
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: 'A New Member Added Successfully!',
            });
        });

        document.addEventListener('trainer-success', function () {
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: 'A New Trainer Added Successfully! But not verified!',
            });
        });

        document.addEventListener('update-success', function () {
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: 'User Details Updated Successfully!',
            });
        });

        document.addEventListener('error', function () {
            Swal.fire({
                icon: 'error',
                title: 'Error!',
                text: 'Server Timeout!',
            });
        });
    </script>
@endpush