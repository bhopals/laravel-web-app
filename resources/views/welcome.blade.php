
@extends('layouts.app')

@section('content')
<div class="flex-center position-ref full-height">
    <!-- @if (Route::has('login'))
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
    @endif -->

    <div class="content">
        <div class="title m-b-md">
            <h1>Clients</h1>
            <h4>Best client services!!</h4>
        </div>
        <div><br/></div>
        <p class="mssg">{{ session('mssg') }}</p>
        @if (Route::has('login'))
            @auth
                <a href="{{ route('clients.index') }}"><b><u>Show client</u></b></a>
                <br/>
                <a href="{{ route('clients.metadata') }}"><b><u>Show metadata</u></b></a>

            @endauth
        @endif
        
    </div>
</div>
@endsection
