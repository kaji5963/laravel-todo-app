{{-- @extends('layouts.todo')

@section('title', 'todo create')

<body>
    <h1>TODO CREATE</h1>
    <h3>登録しますか？</h3>
    <form action="{{ route('todos.store') }}" method="post">
        @csrf
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        @endif
        <input type="text" name="task">
        <input type="submit" value="登録">
        <button><a href="{{ route('todos.index') }}">戻る</a></button>
    </form>
</body>

</html> --}}
