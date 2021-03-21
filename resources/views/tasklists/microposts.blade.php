@if (count($microposts) > 0)
    <ul class="list-unstyled">
        @foreach ($microposts as $micropost)
            <li class="media mb-3">
                <div class="media-body">
                    <div>
                        <span class="text-muted">posted at {{ $micropost->created_at }}</span>
                    </div>
                    <div>
                        {{-- 投稿内容 --}}
                        <p class="mb-0">  ID    :{!! nl2br(e($micropost->id)) !!}</p>
                        <p class="mb-0">タスク　:{!! nl2br(e($micropost->content)) !!}</p>
                        <p class="mb-0">状態　　:{!! nl2br(e($micropost->status)) !!}</p>
                    </div>
                    <div>
                        @if (Auth::id() == $micropost->user_id)
                            {!! link_to_route('task-list.edit', 'このメッセージを編集', ['task_list' => $micropost->id], ['class' => 'btn btn-light']) !!}                        
                            {{-- 投稿削除ボタンのフォーム --}}
                            {!! Form::open(['route' => ['task-list.destroy', $micropost->id], 'method' => 'delete']) !!}
                                {!! Form::submit('削除', ['class' => 'btn btn-danger btn-sm']) !!}
                            {!! Form::close() !!}
                        @endif
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
    {{-- ページネーションのリンク --}}
    {{ $microposts->links() }}
@endif