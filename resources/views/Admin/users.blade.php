@extends('layouts.adminLayout')

@section('title', 'Users')

@section('content')
    <div x-data="{usersTable : true, addMember : false, addTrainer : false, manageUser : false, manageUserId : 1}" class="container-fluid py-4">
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
        document.addEventListener('alert', (event) => {
            Swal.fire({
                icon: event.detail.icon,
                title: event.detail.title,
                text: event.detail.text,
            });
        });
    </script>
@endpush