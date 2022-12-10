@extends('layouts.todo')

@section('title', 'todo app')

<body>
    <h1>TODO APP</h1>
    <h4>ログインユーザー：{{ Auth::user()->name }}</h4>

    <button><a href="{{ route('todos.create') }}">新規登録</a></button>
    <button><a href="{{ route('dashboard') }}">ホームへ戻る</a></button>
    <ul>
        @foreach ($todos as $todo)
            <li>{{ $todo->task }}
                <button><a href="{{ route('todos.show', ['id' => $todo->id]) }}">詳細</a></button>
                <button><a href="{{ route('todos.edit', ['id' => $todo->id]) }}">更新</a></button>
                <button><a href="{{ route('todos.delete', ['id' => $todo->id]) }}">削除</a></button>
            </li>
        @endforeach
    </ul>
</body>

</html>
