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
            Homepage
        </div>

        <div class="links">
{{--            <a href="{{route('welcome')}}">Welcome</a>--}}
            <a href="{{route('add')}}">Add</a>
        </div>
        <div>
            @foreach($newsitem as $newsitem)
            <table>
                <tr>
                    <td>{{$newsitem->id}}</td>
                    <td>{{$newsitem->title}}</td>
                    <td><a href="detail/{{$newsitem->id}}">Detail</a></td>
                    <td><img src="{{$newsitem->image}}" alt=""></td>
                </tr>
            </table>
            @endforeach
        </div>
    </div>
    </div>
@endsection
