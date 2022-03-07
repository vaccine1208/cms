@extends('layouts.app')
@section('navbar')
    @include('partials.nav')
@stop
@section('content')
<div class="container-fluid p-2">
<div class="row">

    <div class="col-sm-3 col-lg-4 m-2 shadow ">
    <img src="{{URL('images/shoe1.jpg')}}" class="img-fluid">
    <p class="text-center">Nike Pro Max</p>
    <p class="text-center text-primary">K99.99</p>
    @foreach ($intel as $int)
    <div>{{ $int->name }}-{{ $int->type }}</div>
@endforeach
    
</div>
<div class="col-sm-3 col-lg-4 shadow m-2">
    <img src="{{URL('images/shoe2.jpg')}}" class="img-fluid">
    <p class="text-center">Gen Legend</p>
    <p class="text-center text-primary">K199.99</p>
</div>
<div class="col-sm-3 col-lg-3 m-2 shadow ">
    <img src="{{URL('images/shirt.jpg')}}" class="img-fluid">
    <p class="text-center">Silver</p>
    <p class="text-center text-primary">K59.99</p>
  </div>
</div>
<div class="row" style="padding-top:25px">
    <div class="col-sm-3 col-lg-4 m-2 shadow ">
    <img src="{{URL('images/fc.png')}}" class="img-fluid">
    <p class="text-center">Chelsea Kit</p>
    <p class="text-center text-primary">K27</p>
</div>
<div class="col-sm-3 col-lg-4 m-2 shadow m-2">
    <img src="{{URL('images/glass.jpg')}}" class="img-fluid">
    <br>
    <br>
    <br>
    <br>
    <p class="text-center">Glasses</p>
    <p class="text-center text-primary">K300</p>
</div>
<div class="col-sm-3 col-lg-3 m-2 shadow m-2">
    <img src="{{URL('images/watch.jpg')}}" class="img-fluid">
    <br>
    <br>
    <br>
    <br>
    <p class="text-center">Watch</p>
    <p class="text-center text-primary">K250</p>
  </div>
</div>
<div class="row" style="padding-top:25px">
    <div class="col-sm-3 col-lg-4 m-2 shadow ">
    <img src="{{URL('images/cap.jpg')}}" class="img-fluid">
    <p class="text-center">Cap</p>
    <p class="text-center text-primary">K150</p>
</div>
<div class="col-sm-3 col-lg-4 m-2 shadow m-2">
    <img src="{{URL('images/stop.jpg')}}" class="img-fluid">
    <p class="text-center">Stop Watch</p>
    <p class="text-center text-primary">K300</p>
</div>
<div class="col-sm-3 col-lg-3 m-2 shadow m-2">
    <img src="{{URL('images/bag.jpg')}}" class="img-fluid">
    <br>
    <br>
    <br>
    <br>
    <p class="text-center">bag</p>
    <p class="text-center text-primary">K500</p>
  </div>
</div>
</div>
@endsection
@section('footer')
    @include('partials.footer')
@stop