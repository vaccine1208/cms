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
      <input type="text" class="form-control" id="msg" placeholder="Enter message" name="msg">
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
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
