@extends('users.base')

@section('content')
    
<div class="row">
    <div class="col-md-12">
        <h4>Food Donations</h4>
        <canvas id="foodCanvas" class="shadow mt-3"></canvas>
    </div>
    <hr/>
    <div class="col-md-12">
        <h4>Clothes Donations</h4>
        <canvas id="clothesCanvas" class="shadow mt-3"></canvas>
    </div>
    <hr/>
    <div class="col-md-12">
        <h4>Shoes Donations</h4>
        <canvas id="shoesCanvas" class="shadow mt-3"></canvas>
    </div>
    <hr/>
    <div class="col-md-12">
        <h4>Money / Funds Donations</h4>
        <canvas id="fundsCanvas" class="shadow mt-3"></canvas>
    </div>
</div>
@endsection
@section('scripts')
    <script src="{{ asset('js/user-data-visualization.js') }}"></script>
@endsection