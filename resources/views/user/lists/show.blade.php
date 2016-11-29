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
              <div id={{ $task->id }} class="input-group input-group-lg checkbox">
                <span class="input-group-addon">
                <input type="checkbox" value="" @if ($task->status === 1) checked  @endif>
                </span>
                <label @if ($task->status === 1) style="text-decoration: line-through;" @endif>{{ $task->description }}</label>
                <span class="input-group-btn">
                  <button class="btn btn-danger" type="button">
                    <i class="glyphicon glyphicon-remove"></i>
                  </button>
                </span>
              </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection