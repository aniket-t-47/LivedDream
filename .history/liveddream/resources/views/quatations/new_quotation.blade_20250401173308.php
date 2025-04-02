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
                        <div class="btn-group d-flex flex-wrap">
                            <input type="radio" class="btn-check" name="installation_area" id="living_room" value="Living room" autocomplete="off">
                            <label class="btn btn-outline-primary" for="living_room">Living room</label>
                        

                            <input type="radio" class="btn-check" name="installation_area" id="bedroom" value="Bedroom" autocomplete="off">
                            <label class="btn btn-outline-primary" for="bedroom">Bedroom</label>
                            </div>

                            <input type="radio" class="btn-check" name="installation_area" id="kitchen" value="Kitchen" autocomplete="off">
                            <label class="btn btn-outline-primary" for="kitchen">Kitchen</label>

                            <input type="radio" class="btn-check" name="installation_area" id="bathroom" value="Bathroom" autocomplete="off">
                            <label class="btn btn-outline-primary" for="bathroom">Bathroom</label>

                            <input type="radio" class="btn-check" name="installation_area" id="balcony" value="Balcony" autocomplete="off">
                            <label class="btn btn-outline-primary" for="balcony">Balcony</label>

                            <input type="radio" class="btn-check" name="installation_area" id="other" value="Other" autocomplete="off">
                            <label class="btn btn-outline-primary" for="other">Other</label>
                        </div>
                    </div>

                </div>
            </div>

            
            <!-- Godown & Sales Details -->
         
        </div>

      
</div>
@endsection