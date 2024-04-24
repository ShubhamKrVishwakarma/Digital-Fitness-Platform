@extends('layouts.adminLayout')

@section('title', 'Products') 

@section('content')
<div x-data="{subscriptionsTable : true, addSubscription : false, manageSubscription : false}" class="container-fluid py-4">
    {{-- Conversations Table --}}
    @livewire('Admin.Subscription.SubscriptionsTable')
    {{-- Add Subscription --}}
    @livewire('Admin.Subscription.AddSubscription')
    {{-- Manage Subscriptions --}}
    @livewire('Admin.Subscription.ManageSubscription') 
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