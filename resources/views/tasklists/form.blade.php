{!! Form::open(['route' => 'task-list.store']) !!}
      <div class="form-group">
                    {!! Form::label('content', 'タスク:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group1">
                    {!! Form::label('status', 'ステータス:') !!}
                    {!! Form::text('status', null, ['class' => 'form-control1']) !!}
                </div>
                
               
　　　　　　　　{!! Form::submit('投稿', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}