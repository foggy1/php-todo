@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <h1 class="h1 text-center">{{ ucfirst($list->title) }}</h1>
        </div>
    </div>
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <a href={{ route('list.tasks.create', ['list' => $list]) }}>Make new task</a>
      </div>
    </div>
    <div id="app">
      <todo-list :list="{{$list}}"></todo-list>

    </div>
</div>
@endsection