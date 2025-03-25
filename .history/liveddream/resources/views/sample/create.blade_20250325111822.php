@extends('layouts.app')
@section('content')
    <div class="content ">
        <div style="display:flex;flex-direction:row;gap:30%">
            <h2 class="mb-0">Create New Display Cost</h2>
            <button class="btn btn-primary btn-save" type="submit" id="company">Save Sample</button>
        </div>


        <div class="row mt-3">
            <!-- Company Details -->
            
            <div class="card" style="width:60%"> <!-- Adjust width using Bootstrap class -->
                <div class="mb-5">
                    <h5>Sample Details</h5>
                    <div class="mt-4">
                        <label class="form-label">Category Name</label>
                        <input type="text" name="name" class="form-control w-100" placeholder="Enter category name" required>
                    </div>
                    <div class="mt-4">
                        <label class="form-label">Sample Name</label>
                        <input type="text" name="name" class="form-control w-100" >
                    </div>
                    <div class="mt-4">
                        <label class="form-label">Sample Cost</label>
                        <input type="text" name="name" class="form-control w-100" placeholder="00">
                    </div>
                    <div class="mt-4">
                        <span>Display area required</span>
                        <div style="display:flex;flex-direction:row">
                            <label class="form-label">length</label>
                            <input type="text"  class="form-control w-100" placeholder="00">
                            <label class="form-label">width</label>
                            <input type="text" name="name" class="form-control w-100" placeholder="00">
                        </div>
                            <label class="form-label">Thickness</label>
                            <input type="text" name="name" class="form-control w-100" placeholder="00">
                       

                    </div>
                </div>

            </div>

            
            <!-- Godown & Sales Details -->
         
        </div>

      
    </div>
@endsection
