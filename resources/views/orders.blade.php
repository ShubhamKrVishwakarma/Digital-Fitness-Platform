@extends("layouts.mainLayout")

@section("title", "Orders")

@push("styles")
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
                                    <th class="text-center fw-semibold">Date</th>
                                    <th class="text-center fw-semibold">Amount</th>
                                    <th class="text-center fw-semibold">Status</th>
                                    <th class="text-center fw-semibold">Payment</th>
                                    <th class="text-center fw-semibold">Bill</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($orders as $order)
                                <tr>
                                    <td>
                                        <div class="d-flex justify-content-center align-items-center">
                                            <span>{{ $order->created_at->format('d-m-Y') }}</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center align-items-center">
                                            <span><i class="bi bi-currency-rupee"></i> {{ $order->amount }}</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center align-items-center">
                                            <span class="badge text-bg-{{ ($order->status === " confirmed") ? 'success'
                                                : ($order->status === "rejected" ? 'danger' : ($order->status === 'cancelled' ? 'danger' : 'info')) }} text-white">{{
                                                $order->status }}</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center align-items-center">
                                            <span>{{ $order->payment_mode }}</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center align-items-center">
                                            <a href="{{ route('bill', $order->id) }}"
                                                class="btn btn-primary btn-sm">View</a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center align-items-center">
                                            @if ($order->status === "pending")
                                                <form action="{{ route('cancel.order', $order->id) }}" method="POST">
                                                    @method("DELETE")
                                                    @csrf
                                                    <button type="submit" class="btn btn-sm btn-danger m-0">Cancel Order</button>
                                                </form>
                                            @else
                                                <button type="submit" class="btn btn-sm btn-secondary m-0" disabled>{{ $order->status }}</button>
                                            @endif
                                        </div>
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
@if(session('alert'))
<script>
    Swal.fire({
        position: "center",
        icon: "success",
        title: "{{ session('alert') }}",
        showConfirmButton: false,
        timer: 1200
      });
</script>
@endif
@endpush