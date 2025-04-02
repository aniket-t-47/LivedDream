@extends('layouts.nav')

@section('content')
<h2 class="mb-5 text-center">New Quotation</h2>

<div class="quatation-content d-flex justify-content-center align-items-center" >
    <div class="card " style="width: 50%; max-width: 600px;"> 
        <!-- <h2 class="mb-4 text-center">New Quotation</h2> -->

        <h5>Project Details</h5>
        <div class="mt-4 d-flex flex-column">
            <label class="form-label">Service Type</label>
            <select class="service form-select">
                <option value="">Select Service</option>
                <option value="wall">Wall</option>
                <option value="floor">Floor</option>
                <option value="ceiling">Ceiling</option>
            </select>
        </div>

        <div class="mt-3">
            <label>Installation Area*</label>
            
                <div class="buttons">
                    <button type="button">Living room</button>
                    <button type="button">Bed room</button>
                </div>
                <div class="buttons">
                    <button type="button">Kitchen</button>
                    <button type="button">Bathroom</button>
                </div>
                <div class="buttons">
                    <button type="button">Balcony</button>
                    <button type="button">Other</button>
                 </div>
            </div>
        </div>
    </div>
    <div style="display:flex;flex-direction:row;gap:10%;background-color:red;justify">
        <button style="width:10%">Back</button>
        <button style="width:10%">Next</button>
    </div>
</div>

@endsection




















<!-- <div class="installation-area">
                            <label>Installation Area*</label>
                            <div class="buttons">
                                <button type="button">Living room</button>
                                <button type="button">Bed room</button>
                            </div>
                            <div class="buttons">
                                <button type="button">Kitchen</button>
                                <button type="button">Bathroom</button>
                            </div>
                            <div class="buttons">
                              
                                <button type="button">Balcony</button>
                                <button type="button">Other</button>
                            </div>
                        </div> -->