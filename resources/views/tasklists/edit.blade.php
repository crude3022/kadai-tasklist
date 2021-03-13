@extends('layouts.app')

@section('content')


<!-- ここにページ毎のコンテンツを書く -->
 <h1>id: {{ $tasklist->id }} のタスク編集ページ</h1>

    <div class="row">
        <div class="col-6">
            {!! Form::model($tasklist, ['route' => ['task-list.update', $tasklist->id], 'method' => 'put']) !!}
　　　　　   @csrf   
                <div class="form-group">
                    {!! Form::label('content', 'タスク:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
　　　　　　　　
                {!! Form::submit('更新', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@endsection