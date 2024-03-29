<div x-show="queryTable" class="row">
    <div class="col-12 query-table">
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
                                    Name</th>
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
                                            {{ implode(' ', array_slice(explode(' ', $query->message), 0, 10)) }}...
                                        </p>
                                    </td>
                                    <td class="text-center">
                                        <span class="text-secondary text-xs font-weight-bold">{{ $query->created_at->format('d-m-Y') }}</span>
                                    </td>
                                    <td>
                                        <button @click="$dispatch('manage-query', { id: {{ $query->id }} })" class="btn btn-xs btn-dark" x-on:click="queryTable = false, manageQuery = true">Reply</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="px-4 pt-2">
                        {{ $queries->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>