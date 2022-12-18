{{-- @extends('layouts.todo')

@section('title', 'todo edit')


<body>
    <h1>TODO EDIT</h1>
    <h3>更新しますか？</h3>
    <form action="{{ route('todos.update', ['id' => $editTodo->id]) }}" method="post">
        @csrf
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach

        @endif
        <input type="text" name="task" value="{{ $editTodo->task }}">
        <input type="submit" value="更新">
        <button><a href="{{ route('todos.index') }}">戻る</a></button>
    </form>
</body>

</html> --}}
