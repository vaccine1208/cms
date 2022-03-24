@extends('layouts.app')
@section('navbar')
    @include('partials.nav')
@stop
@section('content')
<div class="container-fluid p-2" >
<div class="row" style="padding-bottom:100px">
        <div class="btn-group" style="padding-bottom: 30px;">
        <button type="button" class="btn btn-primary">Bags</button>
    <button type="button" class="btn btn-secondary">Shoes</button>
    <button type="button" class="btn btn-secondary">Glasses</button>
    <button type="button" class="btn btn-secondary">Kits</button>
    <button type="button" class="btn btn-secondary">Devices</button>
    <button type="button" class="btn btn-secondary">More+</button>
  </div>
  <div class="col-sm-3 col-lg-4 m-2 shadow ">
    <img src="{{URL('images/bag7.jpg')}}" class="img-fluid">
    <p class="text-center">Nike Pro Max</p>
    <p class="text-center text-primary">K99.99</p>
</div>
<div class="col-sm-3 col-lg-4 shadow m-2">
    <img src="{{URL('images/bag2.jpg')}}" class="img-fluid">
    <p class="text-center">Gen Legend</p>
    <p class="text-center text-primary">K199.99</p>
</div>
<div class="col-sm-3 col-lg-3 m-2 shadow ">
    <img src="{{URL('images/bag.jpg')}}" class="img-fluid" style="padding-bottom:70px">
    
    <p class="text-center">Silver</p>
    <p class="text-center text-primary">K59.99</p>
  </div>
<div class="row" style="padding-top:25px">
    <div class="col-sm-3 col-lg-4 m-2 shadow ">
    <img src="{{URL('images/bag4.jpg')}}" class="img-fluid">
    <p class="text-center">Chelsea Kit</p>
    <p class="text-center text-primary">K27</p>
</div>
<div class="col-sm-3 col-lg-4 m-2 shadow m-2">
    <img src="{{URL('images/bag5.jpg')}}" class="img-fluid" style="padding-bottom:125px">
    
    <p class="text-center">Glasses</p>
    <p class="text-center text-primary">K300</p>
</div>
<div class="col-sm-3 col-lg-3 m-2 shadow m-2">
    <img src="{{URL('images/bag6.jpg')}}" class="img-fluid" style="padding-bottom:195px">

    <p class="text-center">Watch</p>
    <p class="text-center text-primary">K250</p>
  </div>
</div>
<div class="row" style="padding-top:25px">
    <div class="col-sm-3 col-lg-4 m-2 shadow ">
    <img src="{{URL('images/bag9.jpg')}}" class="img-fluid">
    <p class="text-center">Cap</p>
    <p class="text-center text-primary">K150</p>
</div>
<div class="col-sm-3 col-lg-4 m-2 shadow m-2">
    <img src="{{URL('images/bag8.jpg')}}" class="img-fluid" >
    <p class="text-center">Stop Watch</p>
    <p class="text-center text-primary">K300</p>
</div>
<div class="col-sm-3 col-lg-3 m-2 shadow m-2">
    <img src="{{URL('images/bag10.jpg')}}" class="img-fluid" style="padding-bottom:150px">
    
    <p class="text-center">bag</p>
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