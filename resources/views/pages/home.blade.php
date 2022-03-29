@extends('layouts.app')
@section('navbar')
    @include('partials.nav')
@stop
@section('content')
<div class="container-fluid p-2">
<div class="row">
<div class="btn-group" style="padding-bottom: 30px;">
    <button type="button" class="btn btn-secondary"><a class="text-white" style="text-decoration:none;" href="{{ route('subpages.bags') }}">Bags</a></button>
    <button type="button" class="btn btn-secondary"><a class="text-white" style="text-decoration:none;" href="{{ route('subpages.shoes') }}">Shoes</a></button>
    <button type="button" class="btn btn-secondary"><a class="text-white" style="text-decoration:none;" href="{{ route('subpages.glasses') }}">Glasses</a></button>
    <button type="button" class="btn btn-secondary"><a class="text-white" style="text-decoration:none;" href="{{ route('subpages.kits') }}">Kits</a></button>
    <button type="button" class="btn btn-secondary"><a class="text-white" style="text-decoration:none;" href="{{ route('subpages.devices') }}">Devices</a></button>
    <button type="button" class="btn btn-secondary" href="{{ route('pages.contact') }}">More+</button>
  </div>
    <div class="col-sm-3 col-lg-4 m-2 shadow ">
    <img src="{{URL('images/shoes/shoe1.jpg')}}" class="img-fluid" style="padding-bottom:60px">
    <p class="text-center">Shoe 1</p>
    <p class="text-center text-primary">K99.99</p>
</div>
<div class="col-sm-3 col-lg-4 shadow m-2">
    <img src="{{URL('images/bags/bag.jpg')}}" class="img-fluid">
    <p class="text-center">Red bag</p>
    <p class="text-center text-primary">K199.99</p>
</div>
<div class="col-sm-3 col-lg-3 m-2 shadow ">
    <img src="{{URL('images/shirt.jpg')}}" class="img-fluid" style="padding-bottom:125px">
    
    <p class="text-center">Silver</p>
    <p class="text-center text-primary">K59.99</p>
  </div>
</div>
<div class="row" style="padding-top:25px">
    <div class="col-sm-3 col-lg-4 m-2 shadow ">
    <img src="{{URL('images/kits/fc.png')}}" class="img-fluid">
    <p class="text-center">Chelsea Kit</p>
    <p class="text-center text-primary">K27</p>
</div>
<div class="col-sm-3 col-lg-4 m-2 shadow m-2">
    <img src="{{URL('images/glasses/glass1.jpg')}}" class="img-fluid" style="padding-bottom:100px">
    
    <p class="text-center">Glasses</p>
    <p class="text-center text-primary">K300</p>
</div>
<div class="col-sm-3 col-lg-3 m-2 shadow m-2">
    <img src="{{URL('images/devices/xbox.jpg')}}" class="img-fluid" style="padding-bottom:155px">

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
    <img src="{{URL('images/shoes/j.jpg')}}" class="img-fluid" >
    <p class="text-center">Air Jordan</p>
    <p class="text-center text-primary">K300</p>
</div>
<div class="col-sm-3 col-lg-3 m-2 shadow m-2">
    <img src="{{URL('images/devices/ip.jpg')}}" class="img-fluid" style="padding-bottom:90px">
    
    <p class="text-center">I Phone</p>
    <p class="text-center text-primary">K500</p>
  </div>
</div>
</div>
@endsection

@section('footer')
@include('partials.footer')
@endsection