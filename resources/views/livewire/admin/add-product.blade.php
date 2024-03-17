<div x-show="addProduct" style="display: none;">
    <form wire:submit='store' enctype="multipart/form-data">
        <div class="row">
            <div class="col-12 d-flex justify-content-between align-items-center mb-2">
                <h3 class="text-light ms-2 font-weight-bolder">Add New Product</h3>
                <button class="btn btn-sm btn-dark mb-0 me-4" x-on:click="addProduct = false, productsTable = true">View All Products</button>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body mb-3">
                        <h6>Product Information</h6>
                        <div class="col-12 mb-3">
                            <label class="form-control-label">Name</label>
                            <input type="text" wire:model='name' class="form-control" placeholder="Product Name" required>
                            @error('name')
                                <span class="text-danger d-block mt-1">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12 mb-3">
                            <label class="form-control-label">Description</label>
                            <textarea class="form-control" wire:model='description' cols="30" rows="5" placeholder="Product Description" required></textarea>
                            @error('description')
                                <span class="text-danger d-block mt-1">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12 mb-3">
                            <label class="form-control-label">Search Keywords</label>
                            <textarea class="form-control" wire:model='keywords' cols="30" rows="3" placeholder="Product Keywords" required></textarea>
                            @error('keywords')
                                <span class="text-danger d-block mt-1">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12 mb-3">
                            <label class="form-control-label">Image</label>
                            <input type="file" wire:model='image' class="form-control" required>
                            @error('image')
                                <span class="text-danger d-block mt-1">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="col-12 mb-3">
                            <label class="form-control-label">Price</label>
                            <input type="number" wire:model='price' class="form-control" placeholder="Product Price" required>
                            @error('price')
                                <span class="text-danger d-block mt-1">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12 mb-3">
                            <label class="form-control-label">Quantity</label>
                            <input type="number" wire:model='quantity' class="form-control" required placeholder="Quantity">
                        </div>
                        <div class="col-12 mb-3">
                            <label class="form-control-label">Category</label>
                            <select wire:model='category' class="form-control" required>
                                <option value="" selected>Select Category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category_id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div wire:loading.block class="col-12">
                            <button class="btn btn-sm btn-success text-white m-0 mt-2">Processing....</button>
                        </div>
                        <div wire:loading.remove class="col-12">
                            <button type="submit" class="btn btn-sm btn-primary m-0 mt-2">Add Product</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>