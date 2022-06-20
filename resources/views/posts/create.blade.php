@extends('layouts.app_original')
@section('content')
  <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{{ route('posts.store') }}" method="POST">
              @csrf
                <div class="form-group">
                    <label>タスク</label>
                    <input type="text" class="form-control" placeholder="タスクを入力して下さい" name="title">
                </div>
                <div class="form-group">
                    <label>期日</label>
                    <input type="date" name="date">
                    <input type="time" name="time">
                </div>
                <div class="form-group">
                    <label>備考</label>
                    <textarea class="form-control" placeholder="内容" rows="5" name="body">
                    </textarea>
                </div>
                <button type="submit" class="btn btn-primary">作成</button>
            </form>
        </div>
    </div>
  </div>
@endsection
