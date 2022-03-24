@extends('layouts.app')
@section('navbar')
    @include('partials.nav')
@stop
@section('content')
<div class="container-fluid p-2" >
<div class="row" style="padding-bottom:100px">
<div class="btn-group" style="padding-bottom: 30px;">
    <button type="button" class="btn btn-secondary"><a class="text-white" style="text-decoration:none;" href="{{ route('subpages.bags') }}">Bags</a></button>
    <button type="button" class="btn btn-secondary"><a class="text-white" style="text-decoration:none;" href="{{ route('subpages.shoes') }}">Shoes</a></button>
    <button type="button" class="btn btn-secondary"><a class="text-white" style="text-decoration:none;" href="{{ route('subpages.glasses') }}">Glasses</a></button>
    <button type="button" class="btn btn-secondary"><a class="text-white" style="text-decoration:none;" href="{{ route('subpages.kits') }}">Kits</a></button>
    <button type="button" class="btn btn-primary"><a class="text-white" style="text-decoration:none;" href="{{ route('subpages.devices') }}">Devices</a></button>
    <button type="button" class="btn btn-secondary">More+</button>
  </div>
  <div class="col-sm-3 col-lg-4 m-2 shadow ">
    <img src="{{URL('images/devices/asus.jpg')}}" class="img-fluid">
    <p class="text-center">Asus Rog</p>
    <p class="text-center text-primary">K299.99</p>
</div>
<div class="col-sm-3 col-lg-4 shadow m-2">
    <img src="{{URL('images/devices/ip.jpg')}}" class="img-fluid">
    <p class="text-center">I Phone</p>
    <p class="text-center text-primary">K199.99</p>
</div>
<div class="col-sm-3 col-lg-3 m-2 shadow ">
    <img src="{{URL('images/devices/stop.jpg')}}" class="img-fluid" style="padding-bottom:70px">
    
    <p class="text-center">Stop Watch</p>
    <p class="text-center text-primary">K59.99</p>
  </div>
<div class="row" style="padding-top:25px">
    <div class="col-sm-3 col-lg-4 m-2 shadow ">
    <img src="{{URL('images/devices/pc.png')}}" class="img-fluid">
    <p class="text-center">Gaming PC</p>
    <p class="text-center text-primary">K27</p>
</div>
<div class="col-sm-3 col-lg-4 m-2 shadow m-2">
    <img src="{{URL('images/devices/Samsung-Galaxy-S21-FE-5G-renders-violet.png')}}" class="img-fluid" style="padding-bottom:125px">
    
    <p class="text-center">Samsung-galaxy S21</p>
    <p class="text-center text-primary">K300</p>
</div>
<div class="col-sm-3 col-lg-3 m-2 shadow m-2">
    <img src="{{URL('images/devices/smart.jpg')}}" class="img-fluid" style="padding-bottom:195px">

    <p class="text-center">Smart TV</p>
    <p class="text-center text-primary">K250</p>
  </div>
</div>
<div class="row" style="padding-top:25px">
    <div class="col-sm-3 col-lg-4 m-2 shadow ">
    <img src="{{URL('images/devices/xbox.jpg')}}" class="img-fluid" style="padding-bottom:20px">
    <p class="text-center">Xbox Controller</p>
    <p class="text-center text-primary">K150</p>
</div>
<div class="col-sm-3 col-lg-4 m-2 shadow m-2">
    <img src="{{URL('images/devices/external.jpg')}}" class="img-fluid" style="padding-bottom:110px">
    <p class="text-center">External hard drive</p>
    <p class="text-center text-primary">K300</p>
</div>
<div class="col-sm-3 col-lg-3 m-2 shadow m-2">
    <img src="{{URL('images/devices/SanDisk.jpg')}}" class="img-fluid" style="padding-bottom:20px">
    
    <p class="text-center">Flashdisk</p>
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