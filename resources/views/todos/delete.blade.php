{{-- @extends('layouts.todo')

@section('title', 'todo delete')

<body>
    <h1>TODO DELETE</h1>
    <form action="{{ route('todos.destroy', ['id' => $deleteTodo->id]) }}" method="post">
        @csrf
        <h3>本当に削除してよろしいですか？</h2>
            <h4>{{ $deleteTodo->task }}</h4>
            <input type="submit" value="削除">
            <button><a href="{{ route('todos.index') }}">戻る</a></button>
    </form>
</body>

</html> --}}
