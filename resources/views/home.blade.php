@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    ログインできました
                </div>
                <a href="./posts" class="btn btn-primary">
                    タスク一覧画面へ
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
