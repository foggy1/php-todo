@extends('layouts.app')

@section('title', 'Welcome')

@section('content')

<div class="container">
  <div class="row">
    <div class="text-center">
      <h1 class="h1">About</h1>
      <h3 class="h3">PHP Todo is <a href="https://foggy1.github.io/" target="_blank">me</a> learning to configure a full LAMP stack while brushing up on PHP</h2>
    </div>
  </div>
  <div class="small-container">
{{--     <div class="text-center links">
          <a href="https://github.com/foggy1/php-todo" target="_blank">Repo</a>
          <a href="https://laravel.com/" target="_blank">Laravel</a>
    </div> --}}
    <ul id="links" class="nav nav-pills text">
      <li class="active" role="presentation"><a href="https://github.com/foggy1/php-todo" target="_blank">Repo</a></li>
      <li class="active" role="presentation"><a href="https://laravel.com/" target="_blank">Laravel</a></li>
    </ul>
  </div>
</div>


@endsection