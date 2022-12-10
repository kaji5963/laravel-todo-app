@extends('layouts.todo')

@section('title', 'todo edit')


<body>
    <h1>TODO EDIT</h1>
    <form action="{{ route('todos.update', ['id' => $editTodo->id]) }}" method="post">
        @csrf
        <h3>更新しますか？</h3>
        <input type="text" name="task" value="{{ $editTodo->task }}">
        <input type="submit" value="更新">
        <button><a href="{{ route('todos.index') }}">戻る</a></button>
    </form>
</body>

</html>
