@extends('layouts.app')
@section('navbar')
    @include('partials.nav')
@stop
@section('content')
<section id="sec">
<div class="container">
<div class="row">
<div class="col-sm-4 col-lg-6" style="font-size: 17px;">
  <h2>How can we help?</h2>
  <br>
  <p>Scifi Store is here to respond your questions.<br>
    If you have specific questions you can ask via email</p>
  <br>
  <h5>STORE LOCATION</h5>
  <p class="text-black">
          <i class="fas fa-home mr-3 text-black"></i class="text-black"> Blantyre,Malawi<br>
          Ginery Corner
        </p>
  <p style="border-top:1px solid black">
  <ul class="list-unstyled list-inline">
            <li class="list-inline-item">
              <a href="#" class="btn-floating btn-sm text-black" style="font-size: 23px;"><i class="fab fa-facebook"></i></a>
            </li>
            <li class="list-inline-item">
              <a href="#" class="btn-floating btn-sm text-black" style="font-size: 23px;"><i class="fab fa-twitter"></i></a>
            </li>
            <li class="list-inline-item">
              <a href="#" class="btn-floating btn-sm text-black" style="font-size: 23px;"><i class="fab fa-instagram"></i></a>
            </li>
            <li class="list-inline-item">
              <a href="#" class="btn-floating btn-sm text-black" style="font-size: 23px;"><i class="fab fa-youtube"></i></a>
            </li>
          </ul>
  </p>
</div>
<div class="col-sm-4 col-lg-6 shadow" style="font-size: 17px;">
  
    <h2 class="text-success">
        CONTACT US
        </h2>
        @if (Session::has('message_sent'))
        <div class="alert alert-success" role="alert">
          {{Session::get('message_sent')}}
        </div>

        @endif
        <form method="POST" action="{{route('contact.send')}}" enctype="multipart/form-data">
          @csrf
    <div class="form-group">
      <label for="Name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>
    <div class="form-group">
      <label for="phone">Phone:</label>
      <input type="text" class="form-control" id="phone" placeholder="Enter phone number" name="phone">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="msg">Msg:</label>
      <input type="text" class="form-control p-4" id="msg" placeholder="Enter message" name="msg">
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-primary m-1">Submit</button>
  </form>
  </div>
  
</div>

</div>

<br>
</section>
@endsection
@section('footer')
    @include('partials.footer')
@stop
