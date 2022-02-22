@extends('layouts.app')
@section('navbar')
    @include('partials.nav')
@stop
@section('content')
<section id="sec">
<div class="container">
<div class="row">
    <div class="col-sm-4">
    <h2 class="text-success">
        CONTACT US
        </h2>
        <p>We are here to help</P>
</div>
</div>
<br>
<div class="row">
    <div class="col-sm-4">
        <h5>Call Us</h5>
        <p class="text-dark">
          <i class="fas fa-phone mr-3 text-dark"></i class="text-dark"> +265 99 37 43 790
        </p>
    </div> 
    <div class="col-sm-4">
    <h5>Email</h5>
    <p class="text-dark">
          <i class="fas fa-envelope mr-3 text-dark"></i class="text-dark"> ScifiStore@gmail.com</P>
          
    </div> 
    <div class="col-sm-4">
    <div class="col">
    <h5>Location</h5>
    <p class="text-dark">
          <i class="fas fa-home mr-3 text-dark"></i class="text-dark"> Blantyre,Malawi
        </p>
    </div>  
</div>
</div>
</section>
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
