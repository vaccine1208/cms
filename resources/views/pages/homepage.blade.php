@extends('layouts.app')
@section('navbar')
    @include('partials.nav')
@stop
@section('content')
<div class="container-fluid p-2">
<div class="row">
<div class="btn-group" style="padding-bottom: 30px;">
    <button type="button" class="btn btn-secondary"><a href="{{ route('subpages.shoes') }}">Shoes</a></button>
    <button type="button" class="btn btn-secondary">Bags</button>
    <button type="button" class="btn btn-secondary">Glasses</button>
    <button type="button" class="btn btn-secondary">Kits</button>
    <button type="button" class="btn btn-secondary">Watch</button>
    <button type="button" class="btn btn-secondary">Devices</button>
    <button type="button" class="btn btn-secondary">More+</button>
  </div>
    <div class="col-sm-3 col-lg-4 m-2 shadow ">
    <img src="{{URL('images/j.jpg')}}" class="img-fluid">
    <p class="text-center">Air Jordan</p>
    <p class="text-center text-primary">K99.99</p>
</div>
<div class="col-sm-3 col-lg-4 shadow m-2">
    <img src="{{URL('images/bags/bag.jpg')}}" class="img-fluid">
    <p class="text-center">Red bag</p>
    <p class="text-center text-primary">K199.99</p>
</div>
<div class="col-sm-3 col-lg-3 m-2 shadow ">
    <img src="{{URL('images/kits/chelsea.jpg')}}" class="img-fluid" style="padding-bottom:70px">
    
    <p class="text-center">Chelsea kit</p>
    <p class="text-center text-primary">K59.99</p>
  </div>
</div>
<div class="row" style="padding-top:25px">
    <div class="col-sm-3 col-lg-4 m-2 shadow ">
    <img src="{{URL('images/glasses/glasses.png')}}" class="img-fluid">
    <p class="text-center">glass</p>
    <p class="text-center text-primary">K27</p>
</div>
<div class="col-sm-3 col-lg-4 m-2 shadow m-2">
    <img src="{{URL('images/cap.jpg')}}" class="img-fluid" style="padding-bottom:125px">
    
    <p class="text-center">Cap</p>
    <p class="text-center text-primary">K300</p>
</div>
<div class="col-sm-3 col-lg-3 m-2 shadow m-2">
    <img src="{{URL('images/devices/asus.jpg')}}" class="img-fluid" style="padding-bottom:195px">

    <p class="text-center">Watch</p>
    <p class="text-center text-primary">K250</p>
  </div>
</div>
<div class="row" style="padding-top:25px">
    <div class="col-sm-3 col-lg-4 m-2 shadow ">
    <img src="{{URL('images/devices/xbox.jpg')}}" class="img-fluid">
    <p class="text-center">Cap</p>
    <p class="text-center text-primary">K150</p>
</div>
<div class="col-sm-3 col-lg-4 m-2 shadow m-2">
    <img src="{{URL('images/shoes/vans.jpg')}}" class="img-fluid" >
    <p class="text-center">Stop Watch</p>
    <p class="text-center text-primary">K300</p>
</div>
<div class="col-sm-3 col-lg-3 m-2 shadow m-2">
    <img src="{{URL('images/bag.jpg')}}" class="img-fluid" style="padding-bottom:150px">
    
    <p class="text-center">bag</p>
    <p class="text-center text-primary">K500</p>
  </div>
</div>
</div>
@endsection

@section('footer')
@include('partials.footer')
@endsection