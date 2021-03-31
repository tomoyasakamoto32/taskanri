@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col">
      <a class="btn btn-primary btn-lg btn-block" href="{{ route('create') }}">課題・テストを登録する</a>
    </div>
  </div>
  <div class="row">
    <div class="col">
    <form method="GET" action="{{ route('index' )}}" class="form-inline">
      <input class="form-control mr-sm-2" name="search" type="search" placeholder="検索" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">検索する</button>
    </div>
    </form>
  </div>
  <div class="row">
  @foreach($tasks as $task)
    <div class="col">
      <div class="card card-index" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">{{ $task->class_name }}</h5>
          <h6 class="card-subtitle mb-2 text-muted">
            @if($task->task_format === 1)レポート @endif
            @if($task->task_format === 2)テスト @endif
            @if($task->task_format === 3)プレゼンテーション @endif
            @if($task->task_format === 4)小テスト @endif
            @if($task->task_format === 5)実技 @endif
          </h6>
          <h6 class="card-subtitle mb-2 text-muted">{{ $task->deadline }}</h6>
          <a href="show/{{ $task->id }}" class="card-link">詳細</a>
        </div>
      </div>
    </div>
  @endforeach
  </div>
</div>
@endsection