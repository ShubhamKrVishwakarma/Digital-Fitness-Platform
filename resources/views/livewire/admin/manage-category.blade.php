<div class="card" x-show="manageCategory" style="display: none">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center pb-0 p-3">
        <h6 class="mb-0">Manage Category</h6>
        <button class="btn btn-sm btn-danger my-2" wire:click='destroy' x-on:click='manageCategory = false, addCategory = true'>Delete</button>
    </div>
    <hr class="bg-dark">
    <div class="card-body py-1 px-3">
        <div class="row">
            <form wire:submit='update'>
                <div class="col-md-12 mb-3">
                    <h6 class="mb-0 text-uppercase font-weight-bold">Category name</h6>
                    {{-- <p class="text-sm font-weight-bold mb-0">Products Avialable : 40</p> --}}
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        <label class="form-control-label">Category Name:</label>
                        <input class="form-control" wire:model='name' type="text" >
                        @error('name')
                            <span class="text-danger d-block mt-1">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div wire:loading.block class="col-md-6">
                    <button class="btn btn-sm btn-success text-white">Processing....</button>
                </div>
                <div wire:loading.remove class="col-md-6">
                    <button class="btn btn-sm btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>