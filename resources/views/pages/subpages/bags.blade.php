@extends('layouts.app')
@section('navbar')
    @include('partials.nav')
@stop
@section('content')
<div class="container-fluid p-2" >
<div class="row" style="padding-bottom:100px">
        <div class="btn-group" style="padding-bottom: 30px;">
    <button type="button" class="btn btn-primary"><a class="text-white" style="text-decoration:none;" href="{{ route('subpages.bags') }}">Bags</a></button>
    <button type="button" class="btn btn-secondary"><a class="text-white" style="text-decoration:none;" href="{{ route('subpages.shoes') }}">Shoes</a></button>
    <button type="button" class="btn btn-secondary"><a class="text-white" style="text-decoration:none;" href="{{ route('subpages.glasses') }}">Glasses</a></button>
    <button type="button" class="btn btn-secondary"><a class="text-white" style="text-decoration:none;" href="{{ route('subpages.kits') }}">Kits</a></button>
    <button type="button" class="btn btn-secondary"><a class="text-white" style="text-decoration:none;" href="{{ route('subpages.devices') }}">Devices</a></button>
    <button type="button" class="btn btn-secondary">More+</button>
  </div>
  <div class="col-sm-3 col-lg-4 m-2 shadow ">
    <img src="{{URL('images/bags/bag7.jpg')}}" class="img-fluid">
    <p class="text-center">Office bag</p>
    <p class="text-center text-primary">K99.99</p>
</div>
<div class="col-sm-3 col-lg-4 shadow m-2">
    <img src="{{URL('images/bags/bag2.jpg')}}" class="img-fluid">
    <p class="text-center">Blue Shopping bag</p>
    <p class="text-center text-primary">K199.99</p>
</div>
<div class="col-sm-3 col-lg-3 m-2 shadow ">
    <img src="{{URL('images/bags/bag.jpg')}}" class="img-fluid" style="padding-bottom:70px">
    
    <p class="text-center">Red hand bag</p>
    <p class="text-center text-primary">K59.99</p>
  </div>
<div class="row" style="padding-top:25px">
    <div class="col-sm-3 col-lg-4 m-2 shadow ">
    <img src="{{URL('images/bags/bag4.jpg')}}" class="img-fluid" style="padding-bottom:135px">
    <p class="text-center">Backpack</p>
    <p class="text-center text-primary">K27</p>
</div>
<div class="col-sm-3 col-lg-4 m-2 shadow m-2">
    <img src="{{URL('images/bags/bag5.jpg')}}" class="img-fluid" style="padding-bottom:25px">
    
    <p class="text-center">Sky blue hand bag</p>
    <p class="text-center text-primary">K300</p>
</div>
<div class="col-sm-3 col-lg-3 m-2 shadow m-2">
    <img src="{{URL('images/bags/bag6.jpg')}}" class="img-fluid" style="padding-bottom:195px">

    <p class="text-center">small hand bag</p>
    <p class="text-center text-primary">K50</p>
  </div>
</div>
<div class="row" style="padding-top:25px">
    <div class="col-sm-3 col-lg-4 m-2 shadow ">
    <img src="{{URL('images/bags/bag9.jpg')}}" class="img-fluid">
    <p class="text-center">Fashion bag</p>
    <p class="text-center text-primary">K150</p>
</div>
<div class="col-sm-3 col-lg-4 m-2 shadow m-2">
    <img src="{{URL('images/bags/bag8.jpg')}}" class="img-fluid" style="padding-bottom:145px">
    <p class="text-center">Traditional bag</p>
    <p class="text-center text-primary">K300</p>
</div>
<div class="col-sm-3 col-lg-3 m-2 shadow m-2">
    <img src="{{URL('images/bags/bag10.jpg')}}" class="img-fluid" style="padding-bottom:150px">
    
    <p class="text-center">medium size bag</p>
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