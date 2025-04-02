@extends('layouts.nav')

@section('content')
    <div class="content" style="background-image: url('{{ asset('img/background.jpg') }}'); background-size: cover; background-position: center; height: 100vh;">
        <div style="display:flex;flex-direction:column;gap:30%">
            <div>
                <img src="" alt="">
            </div>
            <h2>Start New Quotation</h2>
            <div class="btn-primary">
                <button>+Create</button>
            </div>
        </div>
    </div>
@endsection
