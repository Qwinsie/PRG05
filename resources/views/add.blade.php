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
            Add
        </div>

        <div class="links">
            <a href="{{route('welcome')}}">Welcome</a>
            <a href="{{route('about')}}">About</a>
        </div>

        <div>
            <h2>
{{--                {{$getErrors}}--}}
            </h2>
        </div>
        <form action="{{route('addpost')}}" method="post">
            <label for="title">Title:</label><br>
            <input type="text" id="title" value="" id="" name="" placeholder="Title"><br>
            <label for="description">Description:</label><br>
            <input type="text" id="description" value="" id="" name="" placeholder="Write your text..."><br>
            <input type="submit" value="Submit">
        </form>
    </div>
</div>
@endsection


