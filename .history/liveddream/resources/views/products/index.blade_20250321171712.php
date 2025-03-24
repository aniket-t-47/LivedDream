@extends('layouts.app')
@section('content')

<div class="container-fluid">
    <div class="row">
        <!-- Main Content -->
        <div class="col-md-12 p-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h2 class="fw-bold">Products</h2>
                <button class="btn btn-primary px-3"><i class="fas fa-plus"></i> Create New Product</button>
            </div>

            <!-- Search & Filter -->
            <div class="card p-3 border-0 shadow-sm">
                <div class="d-flex justify-content-between align-items-center">
                    <!-- Search -->
                    <div class="input-group" style="max-width: 300px;">
                        <span class="input-group-text bg-white border-end-0"><i class="fas fa-search"></i></span>
                        <input type="text" class="form-control border-start-0" placeholder="Search">
                    </div>
                    
                    <!-- Filter Button -->
                    <button class="btn btn-light border"><i class="fas fa-filter"></i> Filter</button>
                </div>
            </div>

            <!-- Product Table -->
            <div class="card mt-3 border-0 shadow-sm">
                <table class="table align-middle">
                    <thead class="table-light">
                        <tr>
                            <th><input type="checkbox"></th>
                            <th>Products</th>
                            <th>Code</th>
                            <th>Company</th>
                            <th>Category</th>
                            <th>Warranty</th>
                            <th>Actual Price</th>
                            <th>Selling Price</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr>
                            <td><input type="checkbox"></td>
                            <td class="d-flex align-items-center">
                                <img src="{{ asset('product.jpg') }}" alt="Product" class="me-2" width="40" height="40">
                                {{ $product->name }}
                            </td>
                            <td>{{ $product->code }}</td>
                            <td>{{ $product->company }}</td>
                            <td>{{ $product->category }}</td>
                            <td>{{ $product->warranty }}</td>
                            <td>₹ {{ $product->actual_price }}</td>
                            <td>₹ {{ $product->selling_price }}</td>
                            <td><i class="fas fa-ellipsis-v"></i></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="d-flex justify-content-between align-items-center my-3">
                <span>1-05 of 18 items</span>
                <ul class="pagination mb-0">
                    <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-left"></i></a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a></li>
                </ul>
                <select class="form-select" style="width: auto;">
                    <option selected>10</option>
                    <option>25</option>
                    <option>50</option>
                </select>
            </div>
        </div>
    </div>
</div>

@endsection
