@extends('layouts.todo')

@section('title', 'show todo')

<body>
    <h1>SHOW TODO</h1>
    <h2>ユーザー名：{{ Auth::user()->name }}</h2>
    <h2>作成日：{{ $showTodo->created_at }}</h2>
    <h2>更新日：{{ $showTodo->updated_at }}</h2>
    <h2>タスク：{{ $showTodo->task }}</h2>
    <button><a href="{{ route('todos.index') }}">戻る</a></button>


    <form action="{{ route('todos.update', ['id' => $showTodo->id]) }}" method="post">
        @csrf
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach

        @endif
        <h3>更新しますか？</h3>
        <input type="text" name="task" value="{{ $showTodo->task }}">
        <input type="submit" value="更新">
    </form>
</body>
