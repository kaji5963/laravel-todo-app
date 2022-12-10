@extends('layouts.todo')

@section('title', 'show todo')

<body>
    <h1>SHOW TODO</h1><br>
    <h2>ユーザー名：{{ Auth::user()->name }}</h2><br>
    <h2>タスク：{{ $showTodo->task }}</h2><br>
    <h2>作成日：{{ $showTodo->created_at }}</h2><br>
    <h2>更新日：{{ $showTodo->updated_at }}</h2><br>
    <button><a href="{{ route('todos.index') }}">戻る</a></button>
</body>
