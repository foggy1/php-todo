@extends('layouts.app')

@section('title', 'Register')

@section('content')

<h1 class="h1 text-center">Register</h1>

<div class="container registrationPage">
    <form class="registration" action="/users" method="post">
      <div class="row">
        <div class="form-group">
          <div class="col-sm-6 col-sm-offset-3">
            <label for="name">Username</label>
            <input type="text" name="name" class="form-control">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-6 col-sm-offset-3">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-6 col-sm-offset-3">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="text-center">
          <button type="submit" class="btn btn-primary register">Register</button>
        </div>
      </div>
    </form>
</div>

@endsection