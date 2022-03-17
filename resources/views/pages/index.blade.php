@extends('layouts.app')

@section('content')

            @if (Route::has('login'))
            <h1 class="diplay-3 text-center">
                        SCIFI STORE
                    </h1>
                    @auth
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a  class="nav-link" aria-current="page" href="{{ url('/home') }}" ><button class="btn btn-primary">Go to Home></button></a>
                        </li>
                        
                    @else
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a  class="nav-link" aria-current="page" href="{{ route('login') }}"><button class="btn btn-primary">Log in</button></a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page"href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline"><button class="btn btn-primary">Register</button></a>
                            </li>
                        </ul>
                        @endif
                    @endauth
                </div>
            @endif
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                    
                    <img src="{{URL('images/home.jpg')}}" class="img-fluid">
                    <p class="text-center p-3">Copyright @ Scifi Store 2022</p>
                    </div>
                </div>
@endsection