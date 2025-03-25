@extends('layouts.app')
@section('content')
    <div class="content ">
        <h2 class="mb-0">Create New Product</h2>
        <button class="btn btn-primary btn-save" type="submit" id="company">Save Category</button>


        <div class="row mt-3">
            <!-- Company Details -->
            <div class="col-md-6">
                <div class="card">
                    <div class="m-3">
                    <h5>Company Details</h5>
                    <div class="mb-3">
                        <label class="form-label">Company Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter company name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Company Type*</label>
                        <select  name="type" class="form-select">
                       
                            @foreach($companyTypes as $type)
                                <option value="{{ $type }}">{{ $type }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Our Relation</label>
                        <select name="relation" class="form-select">
                         
                            @foreach($relations as $relation)
                                <option value="{{ $relation }}">{{ $relation }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Product Category*</label>
                        <select name="product_category" class="form-select">
                            
                            @foreach($categories as $category)
                                <option value="{{ $category }}">{{ $category }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Zone*</label>
                        <select name="zone" class="form-select">
                          
                            @foreach($zones as $key => $zone)
                                <option value="{{ $key + 1 }}">{{ $zone }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Company Address</label>
                        <input type="text" name="address" class="form-control" placeholder="Enter address">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">GST</label>
                        <input type="text" name="gst" class="form-control" placeholder="Enter GST">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">City*</label>
                        <input type="text" name="city" class="form-control" placeholder="Enter city">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Pincode</label>
                        <input type="text" name="pincode" class="form-control" placeholder="Enter pincode">
                    </div>
                   {{-- <h5>Godown Details <button class="btn btn-dark btn-sm">Add Godown</button></h5> --}}
                     {{-- <div class="mb-3">
                        <label class="form-label">Address</label>
                        <input type="text" name="" class="form-control" placeholder="Enter Godown Address">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">City</label>
                        <input type="text" class="form-control" placeholder="Enter City">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Pincode</label>
                        <input type="text" class="form-control" placeholder="Enter Godown Pincode">
                    </div> --}}
                    <h5>Godown Details 
                        <button type="button" id="addGodown" class="btn btn-dark btn-sm">Add Godown</button>
                    </h5>
                    <div id="godownContainer">
                        <div class="godown-item">
                            <div class="mb-3">
                                <label class="form-label">Address</label>
                                <input type="text" name="godown_address[]" class="form-control" placeholder="Enter Godown Address">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">City</label>
                                <input type="text" name="godown_city[]" class="form-control" placeholder="Enter City">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Pincode</label>
                                <input type="text" name="godown_pincode[]" class="form-control" placeholder="Enter Godown Pincode">
                            </div>
                            <button type="button" class="btn btn-danger btn-sm remove-godown">Remove</button>
                            <hr>
                        </div>
                    </div>  
                </div>
                </div>
            </div>
            
            <!-- Godown & Sales Details -->
         
        </div>

      
    </div>
@endsection
