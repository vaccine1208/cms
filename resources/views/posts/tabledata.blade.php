@extends('layouts.app')
@section('navbar')
    @include('partials.nav')
@stop
@section('content')
<div class="container-fluid p-2">
<div class="row">
    <div class="col-sm-4 col-lg-8">
        <h2 class="text-success">Categories</h2>
        <p>What we do</p>
        <p class="text-center">Nothing much</p>
        <form action="/categories" method="get">
        @csrf  

@method('post')
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name">
            <label for="type">What are you looking for?:</label>
            <select name="type" id="type">
                <option value="shoes">Nike Pro Max</option>
                <option value="caps">Gen Legend</option>
                <option value="bags">bag</option>
                <option value="glasses">glasses</option>
            </select>
            <input type="submit" value="submit">
        </form>
</div>
</div>
<br>
<br>
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