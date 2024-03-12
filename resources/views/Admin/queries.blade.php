@extends('layouts.adminLayout')

@section('title', 'Query')

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/post.css') }}">
@endpush

@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12 query-table" id="queryTable">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Queries Table</h6>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive p-0">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        USER</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Query</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Date</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($queries as $query)
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm fs-6">{{ $query->name }}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-sm fs-5 text-secondary mb-0">
                                                {{ $query->message }}
                                            </p>
                                        </td>
                                        <td class="text-center">
                                            <span class="text-secondary text-xs font-weight-bold">{{ $query->created_at->format('d-m-Y') }}</span>
                                        </td>
                                        <td>
                                            <button class="btn btn-xs btn-dark" data-manage-query>Reply</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Reply To Query -->
    <div class="row" id="replyQuery" style="display: none;">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center flex-wrap pb-3">
                    <h5>Query Reply</h5>
                    <button class="btn btn-sm btn-dark m-0" id="queryTableButton">View All Queries</button>
                </div>
                <hr class="m-0 bg-dark">
                <div class="card-body">
                    <h6>To: test@gmail.com</h6>
                    <p class="text-sm"><b>Name: </b>User Name</p>
                    <p class="text-sm"><b>Email: </b>test@gmail.com</p>
                    <p class="text-sm"><b>Phone Number: </b>+91 9087678900</p>
                    <p class="text-sm"><b>Query: </b>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Nostrum cupiditate quia ad, vitae ab dicta et pariatur, nam ratione, quam eveniet debitis
                        hic deserunt aperiam.</p>
                    <p></p>
                    <form action="">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea class="form-control" cols="30" rows="5"
                                        placeholder="Reply..."></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <button class="btn btn-sm btn-success">
                                    Send Reply
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    let queryTableButton = document.querySelector("#queryTableButton");
    let queryTable = document.querySelector("#queryTable");
    let replyQueryButton = document.querySelectorAll("[data-manage-query]");
    let replyQuery = document.querySelector("#replyQuery");

    replyQueryButton.forEach(item => {
      item.addEventListener("click", function() {
        queryTable.style.display = "none";
        replyQuery.style.display = "flex";
      });
    });

    queryTableButton.addEventListener("click", function() {
      replyQuery.style.display = "none";
      queryTable.style.display = "flex";
    });
</script>
@endpush