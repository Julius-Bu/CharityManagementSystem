@extends('users.base')

@section('content')
    
<div class="row">
    <div class="col-lg-6">
        <canvas id="foodCanvas" class="shadow mt-3"></canvas>
    </div>
    <div class="col-lg-6">
        <canvas id="clothesCanvas" class="shadow mt-3"></canvas>
    </div>
    <div class="col-lg-6">
        <canvas id="shoesCanvas" class="shadow mt-3"></canvas>
    </div>
    <div class="col-lg-6">
        <canvas id="fundsCanvas" class="shadow mt-3"></canvas>
    </div>
</div>
@endsection
@section('scripts')
    <script src="{{ asset('js/user-data-visualization.js') }}"></script>
    <script>
        var windowObjectReference;var windowFeatures = "popup";function printReport(url) {windowObjectReference = window.open(window.location.origin + url, "SANYU BABIES HOME", windowFeatures);}
    </script>
@endsection