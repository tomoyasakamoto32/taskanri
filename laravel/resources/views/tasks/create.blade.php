@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col">
      <form>
        <div class="form-group">
          <label for="exampleInputClassName">講義名</label>
          <input type="text" class="form-control" id="exampleInputClassName" aria-describedby="emailHelp" placeholder="50文字以内">
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1">課題形式</label>
          <select class="form-control" id="exampleFormControlSelect1">
            <option>選択してください</option>
            <option>レポート</option>
            <option>テスト</option>
            <option>プレゼンテーション</option>
            <option>小テスト</option>
            <option>実技</option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleInputDeadLine">提出期限</label>
          <input type="text" class="form-control" id="exampleInputDeadLine">
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">課題詳細</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="1000文字以内"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">課題を登録</button>
      </form>
    </div>
  </div>
</div>
@endsection