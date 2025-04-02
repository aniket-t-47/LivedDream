@extends('layouts.nav')

@section('content')

<div class="content ">
        <div style="display:flex;flex-direction:row;gap:30%">
            <h2 class="mb-0">New Quotation</h2>
            
        </div>


        <div class="row mt-3">
            <!-- Company Details -->
            
            <div class="card" style="width:60%"> <!-- Adjust width using Bootstrap class -->
                <div class="mb-5">
                    <h5>Project </h5>
                    <div class="mt-4">
                        <label class="form-label">Category Name</label>
                        <input type="text" name="name" class="form-control w-100" placeholder="Enter category name">
                    </div>
                </div>
            </div>

            
            <!-- Godown & Sales Details -->
         
        </div>

      
</div>
@endsection