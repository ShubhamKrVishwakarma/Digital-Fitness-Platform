<div class="card" x-show="addCategory">
    <div class="card-header pb-0 p-3">
        <h6 class="mb-0">Add Category</h6>
    </div>
    <hr class="bg-dark">
    <div class="card-body py-1 px-3">
        <div class="row">
            <form wire:submit='create'>
                <div class="col-md-12 mb-3">
                    <h6 class="mb-0 text-uppercase font-weight-bold">Add New Category</h6>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        <label class="form-control-label">Category Name:</label>
                        <input type="text" wire:model='name' class="form-control" id="add-category" placeholder="Enter Category Name" required>
                        @error('name')
                            <span class="text-danger d-block mt-1">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div wire:loading.block class="col-md-6">
                    <button class="btn btn-sm btn-success text-white">Processing...</button>
                </div>
                <div wire:loading.remove class="col-md-6">
                    <button class="btn btn-sm btn-primary">Add Category</button>
                </div>
            </form>
        </div>
    </div>
</div>