@extends('layouts.app')
@section('content')

<div class="container-fluid" style="back">
    <div class="row">
      
        <div class="col-md-9">
            <h2>Products</h2>
            <button class="btn btn-primary float-end mb-3" id="save">+ Create New Product</button>

            <div class="card p-3">
                <div class="d-flex justify-content-between">
                    <!-- Search Bar -->
                    <div class="input-group" style="max-width: 300px;">
                        <span class="input-group-text">
                            <i class="fas fa-search"></i>
                        </span>
                        <input type="text" class="form-control" placeholder="Search">
                    </div>

                    <!-- Filter Dropdown -->
                    <div class="input-group" style="max-width: 200px;">
                        <span class="input-group-text">
                            <i class="fas fa-filter"></i>
                        </span>
                        <select class="form-select">
                            <option selected>Filter by</option>
                            <option value="company">Company</option>
                            <option value="category">Category</option>
                            <option value="product">Product</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Product Table -->
            <table class="table mt-3">
                <thead class="table-light">
                    <tr>
                        <th scope="col">Product</th>
                        <th scope="col">Code</th>
                        <th scope="col">Company</th>
                        <th scope="col">Category</th>
                        <th scope="col">Warranty</th>
                        <th scope="col">Actual Price</th>
                        <th scope="col">Selling Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Product Name</td>
                        <td>abc123</td>
                        <td>comp1</td>
                        <td>Wall</td>
                        <td>5 years</td>
                        <td>240</td>
                        <td>200</td>
                    </tr>
                    <tr>
                        <td>Product Name</td>
                        <td>abc123</td>
                        <td>comp1</td>
                        <td>Wall</td>
                        <td>5 years</td>
                        <td>240</td>
                        <td>200</td>
                    </tr>
                    <tr>
                        <td>Product Name</td>
                        <td>abc123</td>
                        <td>comp1</td>
                        <td>Wall</td>
                        <td>5 years</td>
                        <td>240</td>
                        <td>200</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
