@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <div class="row">
            <aside class="col-sm-4">
                <div class="card">
                    <div class="card-header">
                        <h3><div class="card-title">名前  {{ Auth::user()->name }}</div></h3>
                        <div class="card-title">個人ＩＤ  {{ Auth::user()->id }}</div>
                    </div>
                </div>
            </aside>
            
            <div class="col-sm-8">
                @include('tasklists.form') 
                {{-- 投稿一覧 --}}
                @include('tasklists.microposts')
             </div>
        </div>
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>タスクリスト</h1>
                {!! link_to_route('login', 'Login', [], ['class' => 'btn btn-lg btn-primary']) !!}
                {{-- ユーザ登録ページへのリンク --}}
                {!! link_to_route('signup.get', 'Sign up now!', [], ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif
@endsection