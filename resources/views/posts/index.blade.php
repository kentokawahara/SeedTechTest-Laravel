@extends('layouts.app_original')
@section('content')
  <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
             <div class="card text-center">
            <div class="card-header">
                Todoリスト
            </div>
            @foreach($posts as $post)
            <div class="card-body">
                <h1 class="card-title">{{ $post->title }}</h1>
                <h2>期日:{{ $post->date }}<br>&nbsp;&nbsp;&nbsp;{{ $post->time }}</h2>
                <p class="card-text" style="margin-bottom: 5px">
                  備考 : {{ $post->body }}
                </p>
                <form action='{{ route('posts.destroy', $post->id) }}' method='post'>
                  @csrf
                  @method('delete')
                    <input type='submit' value='完了' class="btn btn-danger" onclick='return confirm("本当にタスクを終えましたか？");'>
                </form>
                <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">詳細へ</a>
            </div>
            <div class="card-footer text-muted">
                投稿日時 : {{ $post->created_at }}
            </div>
            @endforeach
        </div>
        </div>
        <div class="col-md-2">
          <a href="{{ route('posts.create')}}" class="btn btn-primary">
            新規投稿
          </a>
        </div>
    </div>
  </div>
  @endsection