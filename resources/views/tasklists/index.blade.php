@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
    <h1>タスク一覧</h1>

    @if (count($tasklists) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>タスク</th>
                    <th>ステータス</th>

                    
                </tr>
            </thead>
            <tbody>
                @foreach ($tasklists  as $tasklist)
                <tr>
                    <td>{!! link_to_route('task-list.show',$tasklist->id , ['task_list'=> $tasklist->id]) !!}</td>
                    <td>{{ $tasklist->content }}</td>
                    <td>{{ $tasklist->status }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    
        {{-- メッセージ作成ページへのリンク --}}
        {!! link_to_route('task-list.create', '新規タスクの投稿', [], ['class' => 'btn btn-primary']) !!}

@endsection