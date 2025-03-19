

@extends('layouts.app')
@section('content')
        <div class="content">
            <h2 class="mb-4">Create New Product</h2>
            

            <button class="btn btn-primary" id="product">Save Product</button>
            <div class="row">
                <div class="col-md-6">
                  
                    <div class="card">
                        <div class="m-3">
                        <h5>Product Details</h5>
                        <div class="mb-3">
                            <label class="form-label">Company</label>
                            <select name="company_id" class="form-select">
                                <option>Select company</option>
                                @foreach($companies as $company)
                                    <option value="{{ $company->id }}">{{ $company->name }}</option>
                                @endforeach

                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Category</label>
                            <select name="category_id" class="form-select">
                                    <option>Select Product category</option>
                                    @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Product Name</label>
                            <input type="text" class="form-control" placeholder="Enter product name">
                        </div>
                        <h5>Product Size</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label">Length</label>
                                <input type="number" class="form-control" value="00">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Width</label>
                                <input type="number" class="form-control" value="00">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label">Thickness</label>
                                <input type="number" class="form-control" value="00">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Other</label>
                                <button class="btn btn-primary form-control">Add Parameter</button>
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">GST Applied (%)</label>
                            <input type="text" class="form-control" placeholder="Enter GST Percentage">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Warranty period</label>
                            <div class="row">
                                <div class="col-md-6">
                                        <input type="number" class="form-control" placeholder="Duration">
                                </div>
                                <div class="col-md-6">
                                        <select class="form-select">
                                            <option>Months</option>
                                            <option>Years</option>
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
                            <select class="form-select mb-3">
                                <option>Select Adhesive</option>
                            </select>
                            <div class="mb-3">
                                <label class="form-label">Labor Charges (per sq.ft)</label>
                                <input type="text" class="form-control" placeholder="Enter Labor Charges">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Estimated Delivery Time</label>
                                <input type="text" class="form-control" placeholder="Enter estimated delivery time">
                            </div>
                            <button class="btn btn-primary">Save</button>
                        </div>
                        <div class="card m-2">
                            <div class="m-3">
                            <h5>Product Images</h5>
                            <button class="btn btn-dark w-100 mb-3">Add Product Images</button>
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
            </div>
@endsection
