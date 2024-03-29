<div x-show="manageProduct" style="display: none;">
    <form wire:submit='update'>
        <div class="row">
            <div class="col-12 d-flex justify-content-between align-items-center mb-3">
                <h3 class="text-light ms-2 font-weight-bolder">Manage Product</h3>
                <a class="btn btn-sm btn-dark mb-0 me-4" x-on:click="manageProduct = false, productsTable = true">View All
                    Products</a>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body mb-3">
                        <div class="col-12 d-flex justify-content-between align-items-center flex-wrap">
                            <h6>Product ID : {{ $id }}</h6>
                            <button wire:confirm.prompt='Are you sure?\nEnter password to "DELETE"|aaaa'
                                wire:click.prevent='delete' x-on:click="manageProduct = false, productsTable = true"
                                class="btn btn-sm btn-danger my-2">Delete</button>
                        </div>
                        <div class="col-12 mb-3">
                            <label class="form-control-label">Name</label>
                            <input type="text" wire:model='name' class="form-control" placeholder="Product Name"
                                required>
                            @error('name')
                                <span class="d-block text-danger mt-1">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12 mb-3">
                            <label class="form-control-label">Description</label>
                            <textarea wire:model='description' class="form-control" cols="30" rows="5" placeholder="Product Description"
                                required></textarea>
                            @error('description')
                                <span class="d-block text-danger mt-1">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12 mb-3">
                            <label class="form-control-label">Search Keywords</label>
                            <textarea wire:model='keywords' class="form-control" cols="30" rows="3" placeholder="Product Keywords"
                                required></textarea>
                            @error('keywords')
                                <span class="d-block text-danger mt-1">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12 mb-3">
                            <label class="form-control-label">Image</label>
                            <input wire:model='image' accept="image/png, image/jpeg" type="file"
                                class="form-control">
                            @error('image')
                                <span class="d-block text-danger mt-1">{{ $message }}</span>
                            @enderror
                        </div>
                        @if ($image)
                            <div class="col-12 mb-2">
                                <img src="{{ $image->temporaryUrl() }}" alt="Product Image" class="rounded h-20 w-20">
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="col-12 mb-3">
                            <label class="form-control-label">Price</label>
                            <input type="number" wire:model='price' class="form-control" placeholder="Product Price"
                                required>
                            @error('price')
                                <span class="d-block text-danger mt-1">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12 mb-3">
                            <label class="form-control-label">Quantity</label>
                            <input type="number" wire:model='quantity' class="form-control" required
                                placeholder="Quantity">
                            @error('quantity')
                                <span class="d-block text-danger mt-1">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12 mb-3">
                            <label class="form-control-label">Category</label>
                            <select wire:model='category_id' class="form-control" required>
                                <option value="" selected>Select Category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <span class="d-block text-danger mt-1">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12 mb-3">
                            <button type="submit" class="btn btn-sm btn-success m-0 mt-2">Update</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
