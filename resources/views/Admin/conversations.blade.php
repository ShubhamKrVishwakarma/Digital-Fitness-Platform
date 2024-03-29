@extends('layouts.adminLayout')

@section('title', 'Products') 

@section('content')
<div x-data="{conversationsTable : true}" class="container-fluid py-4">
    {{-- Conversations Table --}}
    @livewire('Admin.Conversation.ConversationsTable')
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