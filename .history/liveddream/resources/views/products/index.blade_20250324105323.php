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
                        <span class="input-group-text bg-white border-end-0"><i class="fa-solid fa-magnifying-glass"></i></span>
                        <input type="text" class="form-control border-start-0" placeholder="Search">
                    </div>
                    
                    <!-- Filter Button -->
                    <!-- <button class="btn btn-light border"><i class="fa-solid fa-filter"></i> Filter</button>
                    <button class="btn btn-light border" type="button"><i class="fa-regular fa-trash fa-2xs" style="color: #ec1313;"></i></button> -->
                    <div class="d-flex gap-2">
                        <button class="btn btn-light border">
                            <i class="fa-solid fa-filter"></i> Filter
                        </button>
                        <button class="btn btn">
                        <i class="fa-solid fa-trash fa-lg" style="color: #ec1313;"></i>                        </button>
                    </div>
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
                        <tr>
                            <td><input type="checkbox" class="selectItem" style="display: none;"></td>
                            <td>Product 1</td>
                            <td>P001</td>
                            <td>Company A</td>
                            <td>Category X</td>
                            <td>1 Year</td>
                            <td>$100</td>
                            <td>$120</td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Edit</a></li>
                                        <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <!-- <div class="d-flex justify-content-between align-items-center my-3">
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
            </div> -->


            
        </div>
    </div>
</div>

@endsection
