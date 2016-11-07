@extends('layouts.app')

@section('title', 'Welcome')

@section('content')

    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                <a href="{{ url('/login') }}">Login</a>
                <a href="{{ url('/register') }}">Register</a>
            </div>
        @endif

        <div class="content">
            <div class="title m-b-md">
                PHP Todo
            </div>

            <div class="links">
                <a href="/">Home</a>
                <a href="/about">About</a>
                <a href="https://github.com/foggy1/php-todo" target="_blank">Project Repo</a>
                <a href="https://laravel.com/docs" target="_blank">Laravel Docs</a>
            </div>
        </div>
    </div>

@endsection
