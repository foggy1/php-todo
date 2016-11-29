@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <h1 class="h1">{{ $list->title }}</h1>
        </div>
    </div>
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <a href={{ route('list.tasks.create', ['list' => $list]) }}>Make new task</a>
      </div>
    </div>
    <div id={{ $list->id }} class="list-group todos">
        @foreach ($tasks as $task)
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <div id={{ $task->id }} class="checkbox">
                <label ><input type="checkbox" value="">{{ $task->description }}</label>
              </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection