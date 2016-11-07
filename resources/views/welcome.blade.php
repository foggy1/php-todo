@extends('layouts.app')

@section('title', 'Welcome')

@section('content')

    <div class="flex-center position-ref full-height">

        <div class="content">
            <div class="title m-b-md">
                PHP Todo
            </div>

            <div class="links">
                <a href="/about">About</a>
                <a href="https://github.com/foggy1/php-todo" target="_blank">Project Repo</a>
                <a href="https://laravel.com/docs" target="_blank">Laravel Docs</a>
            </div>
        </div>
    </div>

@endsection
