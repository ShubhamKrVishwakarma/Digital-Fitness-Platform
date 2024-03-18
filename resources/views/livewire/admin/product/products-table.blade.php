<div x-show="productsTable">
    <div class="row mb-3">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0 d-flex justify-content-between align-items-center flex-wrap">
                    <h6>Products table</h6>
                    <button class="btn btn-sm btn-primary my-1" x-on:click="productsTable = false, addProduct = true">Add Product</button>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        @if ($products->count() < 1)
                            <h4 class="ms-2 ms-md-4">No Products Found</h4>
                        @else
                            <table class="table align-items-center justify-content-center mb-0">
                                <thead>
                                    <tr>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Product</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                            Price</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                            Quantity</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 text-center">
                                            Category</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                        <tr wire:key='{{ $product->id }}'>
                                            <td>
                                                <div class="d-flex px-2">
                                                    <div>
                                                        <img src="{{ url('storage/' . $product->image) }}" class="avatar me-3"
                                                            alt="Product">
                                                    </div>
                                                    <div class="my-auto">
                                                        <h6 class="mb-0 text-sm">{{ $product->name }}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <p class="text-sm text-center font-weight-bold mb-0"><i class="fa-solid fa-indian-rupee-sign"></i> {{ $product->price }}</p>
                                            </td>
                                            <td class="text-center">
                                                <span class="text-xs font-weight-bold">{{ $product->quantity }}</span>
                                            </td>
                                            <td class="text-center">
                                                <span class="text-xs font-weight-bold">{{ $product->category->name }}</span>
                                            </td>
                                            <td class="text-center">
                                                <button class="me-2 btn btn-xs btn-dark mb-0" wire:click='edit({{ $product->id }})' x-on:click="productsTable = false, manageProduct = true">Manage</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="px-4 pt-2">
                                {{ $products->links() }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
