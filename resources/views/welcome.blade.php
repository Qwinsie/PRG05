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
            <a href="{{route('welcome')}}">Welcome</a>
            <a href="{{route('add')}}">Add</a>
        </div>
        <div>
            <table>
                <tr>
                    <td>{{$newsitem[0]['id']}}</td>
                    <td>{{$newsitem[0]['title']}}</td>
                    <td><a href="detail/{{$newsitem[0]['id']}}">Detail</a></td>
                </tr>
                <tr>
                    <td>{{$newsitem[1]['id']}}</td>
                    <td>{{$newsitem[1]['title']}}</td>
                    <td><a href="detail/{{$newsitem[1]['id']}}">Detail</a></td>
                </tr>
                <tr>
                    <td>{{$newsitem[2]['id']}}</td>
                    <td>{{$newsitem[2]['title']}}</td>
                    <td><a href="{{route('details', $newsitem[2]['id'])}}">Detail</a></td>
                </tr>
            </table>
        </div>
    </div>
    </div>
@endsection
