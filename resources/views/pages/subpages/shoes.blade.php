@extends('layouts.app')
@section('navbar')
    @include('partials.nav')
@stop
@section('content')
<div class="container-fluid p-2" >
<div class="row" style="padding-bottom:100px">
<div class="btn-group" style="padding-bottom: 30px;">
    <button type="button" class="btn btn-secondary"><a class="text-white" style="text-decoration:none;" href="{{ route('subpages.bags') }}">Bags</a></button>
    <button type="button" class="btn btn-primary"><a class="text-white" style="text-decoration:none;" href="{{ route('subpages.shoes') }}">Shoes</a></button>
    <button type="button" class="btn btn-secondary"><a class="text-white" style="text-decoration:none;" href="{{ route('subpages.glasses') }}">Glasses</a></button>
    <button type="button" class="btn btn-secondary"><a class="text-white" style="text-decoration:none;" href="{{ route('subpages.kits') }}">Kits</a></button>
    <button type="button" class="btn btn-secondary"><a class="text-white" style="text-decoration:none;" href="{{ route('subpages.devices') }}">Devices</a></button>
    <button type="button" class="btn btn-secondary"><a class="text-white" style="text-decoration:none;" href="{{ route('pages.contact') }}">More+</a></button>
  </div>
  <div class="col-sm-3 col-lg-4 m-2 shadow ">
    <img src="{{URL('images/shoes/air.jpeg')}}" class="img-fluid">
    <p class="text-center">Nike Pro Max</p>
    <p class="text-center text-primary">K99.99</p>
</div>
<div class="col-sm-3 col-lg-4 shadow m-2">
    <img src="{{URL('images/shoes/shoe2.jpg')}}" class="img-fluid">
    <p class="text-center">Gen Legend</p>
    <p class="text-center text-primary">K199.99</p>
</div>
<div class="col-sm-3 col-lg-3 m-2 shadow ">
    <img src="{{URL('images/shoes/j.jpg')}}" class="img-fluid" style="padding-bottom:70px">
    <p class="text-center">Jordan</p>
    <p class="text-center text-primary">K59.99</p>
  </div>
<div class="row" style="padding-top:25px">
    <div class="col-sm-3 col-lg-4 m-2 shadow ">
    <img src="{{URL('images/shoes/timber.jpg')}}" class="img-fluid">
    <p class="text-center">Timberland</p>
    <p class="text-center text-primary">K27</p>
</div>
<div class="col-sm-3 col-lg-4 m-2 shadow m-2">
    <img src="{{URL('images/shoes/airfoce1.JPG')}}" class="img-fluid" style="padding-bottom:125px">
    
    <p class="text-center">airforce</p>
    <p class="text-center text-primary">K300</p>
</div>
<div class="col-sm-3 col-lg-3 m-2 shadow m-2">
    <img src="{{URL('images/shoes/air-jordan-4-retro-red-thunder-ct8527-016_1.jpg')}}" class="img-fluid" style="padding-bottom:195px">

    <p class="text-center">air-jordan</p>
    <p class="text-center text-primary">K250</p>
  </div>
</div>
<div class="row" style="padding-top:25px">
    <div class="col-sm-3 col-lg-4 m-2 shadow ">
    <img src="{{URL('images/shoes/shoe1.jpg')}}" class="img-fluid">
    <p class="text-center">Balenciaga</p>
    <p class="text-center text-primary">K150</p>
</div>
<div class="col-sm-3 col-lg-4 m-2 shadow m-2">
    <img src="{{URL('images/shoes/vans.jpg')}}" class="img-fluid" >
    <p class="text-center">Vans shoes</p>
    <p class="text-center text-primary">K300</p>
</div>
<div class="col-sm-3 col-lg-3 m-2 shadow m-2">
    <img src="{{URL('images/shoes/ft.JPG')}}" class="img-fluid" style="padding-bottom:150px">
    <p class="text-center">fNike football boots</p>
    <p class="text-center text-primary">K500</p>
  </div>
</div>
</div>

</div>
</div>
@endsection
@section('footer')
    @include('partials.footer')
@stop