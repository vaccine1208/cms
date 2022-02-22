@extends('layouts.app')
@section('navbar')
    @include('partials.nav')
@stop
@section('content')
<div class="container-fluid p-2">
<div class="row">
    <div class="col-sm-4">
        <h2 class="text-success">OUR SERVICES</h2>
        <p>What we do</p>
</div>
</div>
<br>
<br>
<div class="row">
  <div class="col-sm-3 col-lg-3 shadow m-2" >
      <h4 class="text-center">ONLINE PURCHASE</h4>
      <p class="text-center">You can buy from us anywhere 24/7<p>
  </div>
  <div class="col-sm-3 col-lg-3 shadow m-2">
  <h4 class="text-center">WE DELIVER</h4>
      <p class="text-center">We deliver everywhere across Blantyre<p>
  </div>
  <div class="col-sm-3 col-lg-3 shadow m-2 ">
  <h4 class="text-center">QULAITY PRODUCTS</h4>
      <p class="text-center">We deliver everywhere across Blantyre<p>
  </div>
  <div class="col-sm-4"></div>
</div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
@endsection
@section('footer')
    @include('partials.footer')
@stop