@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col">
      <form method="POST" action="{{ route('store') }}">
      @csrf
        <div class="form-group">
          <label for="InputClassName">講義名</label>
          <input type="text" class="form-control" id="InputClassName" placeholder="50文字以内" name="class_name" value="{{ $task->class_name }}">
        </div>
        <div class="form-group">
          <label for="FormControlSelect1">課題形式</label>
          <select class="form-control" id="FormControlSelect1" name="task_format">
            <option value="">選択してください</option>
            <option value="1" @if($task->task_format === 1) selected @endif>レポート</option>
            <option value="2" @if($task->task_format === 2) selected @endif>テスト</option>
            <option value="3" @if($task->task_format === 3) selected @endif>プレゼンテーション</option>
            <option value="4" @if($task->task_format === 4) selected @endif>小テスト</option>
            <option value="5" @if($task->task_format === 5) selected @endif>実技</option>
          </select>
        </div>
        <div class="form-group">
          <label for="InputDeadLine">提出期限 or 実施日時</label>
          <input type="text" class="form-control" id="InputDeadLine" placeholder="100文字以内" name="deadline" value="{{ $task->deadline }}">
        </div>
        <div class="form-group">
          <label for="FormControlTextarea1">課題詳細</label>
          <textarea class="form-control" id="FormControlTextarea1" rows="3" placeholder="1000文字以内" name="detail">{{$task->detail}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">課題を登録</button>
      </form>
    </div>
  </div>
</div>
@endsection