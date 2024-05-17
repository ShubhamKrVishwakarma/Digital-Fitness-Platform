<div x-show="manageQuery" class="row" style="display: none;">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center flex-wrap pb-3">
                <h5>Query Reply</h5>
                <button class="btn btn-sm btn-dark m-0" wire:click.prevent='resetAll' x-on:click="manageQuery = false, queryTable = true">View All Queries</button>
            </div>
            <hr class="m-0 bg-dark">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <h6>Query ID : {{ $id }}</h6>
                    <button wire:confirm.prompt='Are u Sure?\nEnter password to "DELETE"|aaaa' wire:click='delete' class="btn btn-sm btn-danger my-2" x-on:click="manageQuery = false, queryTable = true">Delete</button>
                </div>
                <h6>To: test@gmail.com</h6>
                <p class="text-sm"><b>Name: </b>{{ $name }}</p>
                <p class="text-sm"><b>Email: </b>{{ $email }}</p>
                <p class="text-sm"><b>Phone Number: </b>{{ $phone }}</p>
                <p class="text-sm"><b>Query: </b>{{ $message }}</p>
            </div>
            <div class="card-footer pt-0">
                <a class="btn btn-sm btn-success m-0" href="mailto:{{ $email }}">Reply</a>
            </div>
        </div>
    </div>
</div>