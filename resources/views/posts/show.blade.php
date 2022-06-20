@extends('layouts.app_original')
@section('content')
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card mt-3">
                  <div class="card-header">
                      <h5>タスク：{{ $post->title }}</h5>
                  </div>
                  <div class="card-body">
                  <p class="card-text">備考：{{ $post->body }}</p>
                  <p>期日:{{ $post->date }}<br>&nbsp;&nbsp;&nbsp;{{ $post->time }}</p>
                  <p>投稿日時：{{ $post->created_at }}</p>
                  <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary" style="margin-bottom: 20px">編集する</a>
                  <form action='{{ route('posts.destroy', $post->id) }}' method='post'>
                    @csrf
                    @method('delete')
                      <input type='submit' value='削除' class="btn btn-primary" onclick='return confirm("本当に削除しますか？");'>
                  </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <a href="./" class="btn btn-back">一覧に戻る</a>
@endsection
