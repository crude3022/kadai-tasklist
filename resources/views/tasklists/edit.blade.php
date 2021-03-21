@extends('layouts.app')

@section('content')


<!-- ここにページ毎のコンテンツを書く -->
 <h1>id: {{ $micropost->id }} のタスク編集ページ</h1>

    <div class="row">
        <div class="col-6">
            {!! Form::model($micropost,['route' => ['task-list.update', $micropost->id], 'method' => 'put']) !!}
　　　　　   @csrf   
                <div class="form-group">
                    {!! Form::label('content', 'タスク:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group1">
                    {!! Form::label('status', 'ステータス:') !!}
                    {!! Form::text('status', null, ['class' => 'form-control1']) !!}
                </div>

                {!! Form::submit('更新', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@endsection