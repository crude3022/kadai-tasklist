<header class="mb-4">
            <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
                {{-- トップページへのリンク --}}
                <a class="navbar-brand" href="/">MessageBoard</a>

                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="nav-bar">
                    <ul class="navbar-nav mr-auto"></ul>s
                    <ul class="navbar-nav">
                        {{-- ユーザ登録ページへのリンク --}}
                        {!! link_to_route('signup.get', 'Signup', [], ['class' => 'btn btn-lg btn-primary']) !!}
                        {{-- ログインページへのリンク --}}
                        <li class="nav-item"><a href="#" class="nav-link">Login</a></li>
                        {{-- メッセージ作成ページへのリンク --}}
                        <li class="nav-item">{!! link_to_route('task-list.create', '新規タスクの投稿', [], ['class' => 'btn btn-primary']) !!}</li>
                    </ul>
                </div>
            </nav>
</header>