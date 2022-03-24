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
    <button type="button" class="btn btn-primary"><a class="text-white" style="text-decoration:none;"  href="{{ route('subpages.kits') }}">Kits</a></button>
    <button type="button" class="btn btn-secondary"><a class="text-white" style="text-decoration:none;" href="{{ route('subpages.devices') }}">Devices</a></button>
    <button type="button" class="btn btn-secondary">More+</button>
  </div>
  <div class="col-sm-3 col-lg-4 m-2 shadow ">
    <img src="{{URL('images/kits/fc.png')}}" class="img-fluid">
    <p class="text-center">Chelsea</p>
    <p class="text-center text-primary">K500</p>
</div>
<div class="col-sm-3 col-lg-4 shadow m-2">
    <img src="{{URL('images/kits/juve.jpg')}}" class="img-fluid">
    <p class="text-center">Juventus</p>
    <p class="text-center text-primary">K500</p>
</div>
<div class="col-sm-3 col-lg-3 m-2 shadow ">
    <img src="{{URL('images/kits/LV.jpg')}}" class="img-fluid" style="padding-bottom:70px">
    
    <p class="text-center">Liverpool</p>
    <p class="text-center text-primary">K500</p>
  </div>
<div class="row" style="padding-top:25px">
    <div class="col-sm-3 col-lg-4 m-2 shadow ">
    <img src="{{URL('images/kits/madrid.jpg')}}" class="img-fluid" style="padding-bottom:25px">
    <p class="text-center">Real Madrid</p>
    <p class="text-center text-primary">K500</p>
</div>
<div class="col-sm-3 col-lg-4 m-2 shadow m-2">
    <img src="{{URL('images/kits/Arsenal.jpg')}}" class="img-fluid" >
    
    <p class="text-center">Arsenal</p>
    <p class="text-center text-primary">K500</p>
</div>
<div class="col-sm-3 col-lg-3 m-2 shadow m-2">
    <img src="{{URL('images/kits/man.jpg')}}" class="img-fluid" style="padding-bottom:95px">

    <p class="text-center">Manchester United home</p>
    <p class="text-center text-primary">K500</p>
  </div>
</div>
<div class="row" style="padding-top:25px">
    <div class="col-sm-3 col-lg-4 m-2 shadow ">
    <img src="{{URL('images/kits/city.png')}}" class="img-fluid" style="padding-bottom:50px">
    <p class="text-center">Man city</p>
    <p class="text-center text-primary">K500</p>
</div>
<div class="col-sm-3 col-lg-4 m-2 shadow m-2">
    <img src="{{URL('images/kits/man2.jpg')}}" class="img-fluid" style="padding-bottom:50px">
    <p class="text-center">Manchester United away</p>
    <p class="text-center text-primary">K500</p>
</div>
<div class="col-sm-3 col-lg-3 m-2 shadow m-2">
    <img src="{{URL('images/kits/barca.jpg')}}" class="img-fluid" >
    
    <p class="text-center">Barcelona home</p>
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