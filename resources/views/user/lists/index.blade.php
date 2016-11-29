@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <h1 class="h1">Hello, {{ $user->name }}!</h1>
        </div>
    </div>
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <a href={{ route('user.lists.create', ['user' => $user]) }}>Make new list</a>
      </div>
    </div>
    <ul class="list-group">
        @foreach ($lists as $list)
        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                    <a href={{ route('user.lists.show', ['user' => $user, 'list' => $list]) }} class="list-group-item">
                    <span class="tag tag-default tag-pill float-xs-right">{{ $list->tasks->count() }}</span>
                      {{ $list->title }}
                    </a>
            </div>
        </div>
        @endforeach
    </ul>
</div>
@endsection
