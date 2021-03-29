@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col">
      <a class="btn btn-primary btn-lg btn-block" href="{{ route('create') }}">課題を登録する</a>
    </div>
  </div>
  <div class="row">
  @foreach($tasks as $task)
    <div class="col">
      <div class="card card-index" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">{{ $task->class_name }}</h5>
          <h6 class="card-subtitle mb-2 text-muted">{{ $task->task_format }}</h6>
          <h6 class="card-subtitle mb-2 text-muted">{{ $task->deadline }}</h6>
          <a href="show/{{ $task->id }}" class="card-link">詳細</a>
        </div>
      </div>
    </div>
  @endforeach
  </div>
</div>
@endsection