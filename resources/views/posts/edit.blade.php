@extends('layouts.app_original')
@section('content')
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{{ route('posts.update', $post->id) }}" method="POST">
              @csrf
              @method('put')
                <div class="form-group">
                    <label style="margin-top: 40px">タスク</label>
                    <input type="text" class="form-control" value="{{ $post->title }}" name="title">
                </div>
                <div class="form-group">
                    <label>期日</label>
                    <input type="date" class="form-control" value="{{ $post->date }}" name="date" style="margin-bottom: 5px">
                    <input type="time" class="form-control" value="{{ $post->time }}" name="time">
                </div>
                <div class="form-group">
                    <label>備考</label>
                    <textarea class="form-control" rows="5" name="body">{{ $post->body }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">更新する</button>
            </form>
        </div>
    </div>
  </div>
  @endsection