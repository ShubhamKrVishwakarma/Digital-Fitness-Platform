@extends('layouts.adminLayout')

@section('title', 'Orders')

@section('content')
<div x-data="{ordersTable : true, manageOrder : false}" class="container-fluid py-2">
    <!-- Orders Table -->
    @livewire('Admin.Order.OrderTable')
    <!-- Manage Order -->
    @livewire('Admin.Order.ManageOrder')
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