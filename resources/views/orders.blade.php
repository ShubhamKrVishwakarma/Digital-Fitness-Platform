@extends("layouts.mainLayout")

@section("title", "Orders")

@push("styles")
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
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

                        <div class="table-responsive">
                            <table class="table tble-bordered table-striped">
                                <thead>
                                    <tr>
                                    <th> Id </th>
                                    <th> Date</th>
                                    <th> Role </th>
                                    <th> Status </th>
                                    <th> Amount </th>
                                    <th> Action</th>
                                </tr>
                                </thead>
                                    <tbody>
                                        @forelse ($orders as $item)
                                           <tr>
                                            <td>{{ $item->id }}</td>    
                                            <td>{{ $item->created_at->format('d-m-Y') }}</td>    
                                            <td>{{ $item->user_role }}</td>    
                                            <td>{{ $item->status }}</td>    
                                            <td>{{ $item->total_price }}</td>    
                                            <td> <a href="#" class="btn btn-primary btn-sm">View</a>
                                                </td>    
                                        </tr> 
                                        @empty
                                            <tr>
                                                <td colspan="7">No Orders Available</td>
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