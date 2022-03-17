@extends('layouts.app')
@section('navbar')
    @include('partials.nav')
@stop
@section('content')
<div class="container-fluid p-2" >
<div class="row" style="padding-bottom:100px">
<h2 class="text-success">
        ABOUT US
        </h2>
        <p>Know more about us</P>

    <div class="col-lg-10 col-sm-4" style="padding-top:30px">
    <p class="text-dark" style="font-size:20px">
        Enstablished in 2022 under the Malawi Youth program<abbr>
        our aim is to be the most productive e-commerce store online and satisfy the needs of our respective customers.
        </p>
        <p class="text-dark" style="font-size:20px"> 
        Equiped with well trainerd personnel who are more than willing to achieve the goal of the Company
</p>
</div>

</div>
</div>
@endsection
@section('footer')
    @include('partials.footer')
@stop