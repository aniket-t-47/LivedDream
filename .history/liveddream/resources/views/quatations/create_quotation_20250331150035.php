@extends('layouts.nav')
@section('content')
    <div class="content">
        <div style="display:flex;flex-direction:row;gap:30%">
            <h2 class="mb-0">Lived Dream</h2>
            <button class="btn btn-primary btn-save" type="submit" id="create">+ Create</button>
        </div>

        <div class="row mt-3">
            <div class="card" style="width:60%">
                <div class="mb-5">
                    <h5>Start Creating a New Quotation</h5>
                    <div class="mt-4 text-center">
                        <img src="your-image.png" alt="Living Room" class="img-fluid rounded">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
