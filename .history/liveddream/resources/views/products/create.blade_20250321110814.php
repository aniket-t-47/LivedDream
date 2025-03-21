@extends('layouts.app')
@section('content')
    <div class="content">
        <h2 class="mb-4">Create New Product</h2>

        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <button class="btn btn-primary"type="submit" id="product">Save Product</button>
            <div class="row">
                <div class="col-md-6">

                    <div class="card">
                        <div class="m-3">
                            <h5>Product Details</h5>
                            <div class="mb-3">
                                <label class="form-label">Company</label>
                                <select name="company_id" class="form-select">
                                    <option>Select company</option>
                                    @foreach ($companies as $company)
                                        <option value="{{ $company->id }}">{{ $company->name }}</option>
                                    @endforeach

                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Category</label>
                                <select name="category_id" class="form-select">
                                    <option>Select Product category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Product Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter product name">
                            </div>
                            <h5>Product Size</h5>
                            <div class="row" id="size-container">
                                <div class="col-md-6">
                                    <label class="form-label">Length</label>
                                    <input type="number" name="length[]" class="form-control" value="00">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Width</label>
                                    <input type="number" name="width[]" class="form-control" value="00">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="form-label">Thickness</label>
                                    <input type="number" name="thickness[]" class="form-control" value="00">
                                </div>
                                <div class="col-md-6">
                                    <label for="" class="form-label">Other</label>
                                    <button type="button" class="btn btn-primary form-control" id="add-size">Add Parameter</button>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">GST Applied (%)</label>
                                <input type="text" name="gst" class="form-control"
                                    placeholder="Enter GST Percentage">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Warranty period</label>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="number" name="warranty_duration" class="form-control" placeholder="Duration" required>
                                    </div>
                                    <div class="col-md-6">
                                        <select name="warranty_type" class="form-select" required>
                                            <option value="days">Days</option>
                                            <option value="months">Months</option>
                                            <option value="years">Years</option>
                                        </select>
                                    </div>




                                </div>

                            </div>
                            <!-- <button class="btn btn-primary">Save Product</button> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="m-3">
                            <h5>Adhesive</h5>
                            <select name="adhesive_id" class="form-select mb-3">
                                <option>Select Adhesive</option>
                                @foreach ($adhesives as $adhesive)
                                    <option value="{{ $adhesive->id }}">{{ $adhesive->name }}</option>
                                @endforeach
                            </select>
                            <div class="mb-3">
                                <label class="form-label">Labor Charges (per sq.ft)</label>
                                <input type="text" name="labor_charges" class="form-control"
                                    placeholder="Enter Labor Charges">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Estimated Delivery Time</label>
                                <input type="datetime-local" name="estimated_delivery_time" class="form-control"
                                    placeholder="Enter estimated delivery time">
                            </div>
                            {{-- <button class="btn btn-primary">Save</button> --}}
                        </div>
                        <div class="card m-2">
                            <div class="m-3">
                                <h5>Product Images</h5>
                                <button class="btn btn-dark w-100 mb-3"  data-bs-toggle="modal" data-bs-target="#addprodu">Add Product Images</button>
                                <h6>Sample Images</h6>
                                <div class="border p-3 text-center" style="border-style: dashed;">
                                    Drag your file(s) or <a href="#">browse</a>
                                    <br>
                                    Max 10 MB files are allowed
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </form>
    </div>
    <script>
       document.addEventListener("DOMContentLoaded", function () {
    let addButton = document.getElementById("add-size");
    let container = document.getElementById("size-container");

    if (addButton && container) {
        addButton.addEventListener("click", function () {
            let newRow = document.createElement("div");
            newRow.classList.add("row", "mt-2");

            newRow.innerHTML = `
                <div class="col-md-6">
                    <label class="form-label">Parameter Name</label>
                    <input type="text" name="custom_keys[]" class="form-control" placeholder="Enter parameter (e.g., Height)">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Value</label>
                    <input type="number" name="custom_values[]" class="form-control" value="00">
                </div>
            `;

            container.appendChild(newRow);
        });
    } else {
        console.error("Element not found: Ensure 'add-size' button and 'size-container' exist.");
    }
});

        </script>
@endsection
