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
  <div class="row">
    <div class="col-sm-4 col-sm-offset-4">
        <ul class="nav nav-pills text-center aboutList">
          <li role="presentation" class="text-center aboutLink"><a href="#">Home</a></li>
          <li role="presentation" class="text-center aboutLink"><a href="#">Profile</a></li>
          <li role="presentation" class="text-center aboutLink"><a href="#">Messages</a></li>
        </ul>
    </div>
  </div>
</div>


@endsection