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
                    <h5>Project Details</h5>
                    <div class="mt-4">
                        <label class="form-label" required>Service Type</label>
                        <select name="" id="">
                            <option value="wall">Wall</option>
                            <option value="floor">Floor</option>
                            <option value="">Ceiling</option>
                        </select>
                    </div>
                    <div style="display:flex;flex-direction:column">
                        <label for="" required>Installation Area</label>
                        <div class="area">
                            <button>Living room</button>
                            <button>Bed room</button>
                        </div>
                        <div class="area">
                            <button>Kitchen</button>
                            <button>Bathroom</button>
                        </div>
                        <div class=
                        >
                            <button>Balcony</button>
                            <button>other</button>
                        </div>



                    </div>
                </div>
            </div>

            
            <!-- Godown & Sales Details -->
         
        </div>

      
</div>
@endsection