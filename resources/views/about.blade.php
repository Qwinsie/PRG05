@extends('layout')

@section ('content')

<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="content">
        <div class="title m-b-md">
            About
        </div>
        <div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, explicabo fuga hic magni nobis numquam pariatur placeat tempore ullam vel vitae voluptate. Eum eveniet itaque numquam perspiciatis soluta, sunt totam?</p>
        </div>
        <div class="links">
            <a href="{{route('welcome')}}">Welcome</a>
            <a href="{{route('add')}}">Add</a>
        </div>
    </div>
</div>
@endsection

