@extends('layouts.app')
@section('navbar')
    @include('partials.nav')
@stop
@section('content')
<div class="container-fluid p-2">
<div class="row">
<div class="btn-group" style="padding-bottom: 30px;">
    <button type="button" class="btn btn-secondary">Shoes</button>
    <button type="button" class="btn btn-secondary">Bags</button>
    <button type="button" class="btn btn-secondary">Glasses</button>
    <button type="button" class="btn btn-secondary">Kits</button>
    <button type="button" class="btn btn-secondary">Watch</button>
    <button type="button" class="btn btn-secondary">Devices</button>
    <button type="button" class="btn btn-secondary">More+</button>
  </div>
@if($files->isNotEmpty())
<H2>SEARCH RESULTS:</H2>
    @foreach ($files as $se)
        <div class="post-list" style="padding-bottom:50px">
        
        <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Price</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{{$se->name}}</td>
        <td>{{$se->price}}</td>
      </tr>
     
      
    </tbody>
  </table>
        </div>
    @endforeach
@else 
    <div>
        <h2>No posts found</h2>
    </div>
@endif
@endsection

@section('footer')
@include('partials.footer')
@endsection