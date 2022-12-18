@extends('layouts.todo')

@section('title', 'todo app')

<body>
    <h1>TODO APP</h1>
    <button><a href="{{ route('dashboard') }}">ホームへ戻る</a></button>
    <h4>ログインユーザー：{{ Auth::user()->name }}</h4>

    <form action="{{ route('todos.store') }}" method="post">
        @csrf
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        @endif
        <input type="text" name="task">
        <input type="submit" value="新規登録">
    </form>

    <ul>
        @foreach ($todos as $todo)
            <li>{{ $todo->task }}
                <button><a href="{{ route('todos.show', ['id' => $todo->id]) }}">詳細</a></button>
                <form action="{{ route('todos.destroy', ['id' => $todo->id]) }}" method="post">
                    @csrf
                    <input type="submit" value="削除">
                </form>
            </li>
        @endforeach
    </ul>
</body>

</html>
