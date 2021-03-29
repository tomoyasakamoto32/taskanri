@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <table class="table table-bordered">
      <tbody>
        <tr>
          <th scope="row">講義・授業名</th>
          <td colspan="2">{{ $task->class_name }}</th>
        </tr>
        <tr>
          <th scope="row">課題形式</th>
          <td>{{ $task->task_format }}</td>
        </tr>
        <tr>
          <th scope="row">提出期限 or 実施日時</th>
          <td>{{ $task->deadline }}</td>
        </tr>
        <tr>
          <th scope="row">課題詳細</th>
          <td>{{ $task->detail }}</td>
        </tr>
      </tbody>
    </table>
  </div>

  <form method="GET" action="{{ route('edit', ['id' => $task->id]) }}">
    <div class="row">
    <input class="btn btn-primary btn-lg btn-block" type="submit" value="変更する">
    </div>
  </form>

  <form method="POST" action="#">
    <div class="row">
      <button type="button" class="btn btn-secondary btn-lg btn-block">削除する</button>
    </div>
  </form>

</div>
@endsection