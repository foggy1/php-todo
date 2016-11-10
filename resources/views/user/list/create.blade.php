@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <h1 class="h1">Hello, {{ $user->name }}!</h1>
        </div>
    </div>
</div>
@endsection