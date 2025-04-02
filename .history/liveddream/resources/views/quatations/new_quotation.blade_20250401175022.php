@extends('layouts.nav')

@section('content')

<div class="content ">
        <div style="display:flex;flex-direction:row;gap:30%">
            <h2 class="mb-0">New Quotation</h2>
            
        </div>


        <div class="row mt-3">
            <!-- Company Details -->
            
            <div class="card" style="width:50%"> <!-- Adjust width using Bootstrap class -->
                <div class="mb-5">
                    <h5>Project Details</h5>
                    <div class="mt-4" style="display:flex;flex-direction:column">
                        <label class="form-label" required>Service Type</label>
                        <select name="" id="">
                            <option value="wall">Wall</option>
                            <option value="floor">Floor</option>
                            <option value="">Ceiling</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Installation Area*</label>
                        <div class="installation-area">
                            <label>Installation Area*</label>
                            <div class="buttons">
                                <button type="button">Living room</button>
                                <button type="button">Bed room</button>
                            </div>
                            <div class="buttons">
                                
                            </div>
                              
                                <button type="button">Balcony</button>
                                <button type="button">Other</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            
            <!-- Godown & Sales Details -->
         
        </div>

      
</div>
@endsection