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
                        <label class="form-label">Zone*</label>
                        <select name="zone" class="form-select">
                          
                            @foreach($zones as $key => $zone)
                                <option value="{{ $key + 1 }}">{{ $zone }}</option>
                            @endforeach
                        </select>
                    </div>
                   
                   
                </div>
                </div>
            </div>
            
            <!-- Godown & Sales Details -->
         
        </div>

      
    </div>
@endsection
