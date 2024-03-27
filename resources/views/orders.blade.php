@extends("layouts.mainLayout")

@section("title", "Orders")

@push("styles")
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('css/orders.css') }}">
@endpush

@section("content")
    <!-- Orders Section -->
    <div class="py-3 py-md-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="shadow bg-white p-3">
                        <h4 class="mb-4"> My Orders</h4>
                        <hr>
                        <div class="table-responsive" style="min-height: 300px">
                            <table class="table tble-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center fw-semibold">Id</th>
                                        <th class="text-center fw-semibold">Date</th>
                                        <th class="text-center fw-semibold">Role</th>
                                        <th class="text-center fw-semibold">Status</th>
                                        <th class="text-center fw-semibold">Amount</th>
                                        <th class="text-center fw-semibold">Action</th>
                                    </tr>
                                </thead>
                                    <tbody>
                                        @forelse ($orders as $order)
                                           <tr>
                                                <td class="text-center">
                                                    <span>{{ $order->id }}</span>
                                                </td>    
                                                <td class="text-center">
                                                    <span>{{ $order->created_at->format('d-m-Y') }}</span>
                                                </td>    
                                                <td class="text-center">
                                                    <span class="badge text-bg-primary">{{ $order->user->role }}</span>
                                                </td>    
                                                <td class="text-center">
                                                    <span class="badge text-bg-{{ ($order->status === "confirmed") ? 'success' : ($order->status === "rejected" ? 'danger' : 'info') }} text-white">{{ $order->status }}</span>
                                                </td>    
                                                <td class="text-center">
                                                    <span><i class="bi bi-currency-rupee"></i> {{ $order->amount }}</span>
                                                </td>    
                                                <td class="text-center">
                                                    <a href="{{ route('orders.details', $order->id) }}" class="btn btn-primary btn-sm">View</a>
                                                </td>    
                                            </tr> 
                                        @empty
                                            <tr>
                                                <td class="text-center" colspan="7">No Orders Available</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push("scripts")
<script src="{{ asset('js/orders.js') }}"></script>
@endpush