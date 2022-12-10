<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRequest;
use App\Http\Requests\EditRequest;
use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TodoController extends Controller
{
    /**
     * 一覧画面表示
     *
     * @return view
     * @param todos
     */
    public function index()
    {
        // $todos = Auth::user()->todos;
        $user_id = Auth::user()->id;
        $todos = Todo::where('user_id', '=', $user_id)->orderBy('id', 'desc')->get();

        return view('todos.index', ['todos' => $todos]);
    }

    /**
     * 登録画面表示
     *
     * @return view
     */
    public function create()
    {
        return view('todos.create');
    }

    /**
     * 登録処理
     *
     * @return redirect
     */
    public function store(CreateRequest $request)
    {
        $user_id = Auth::user()->id;

        Todo::create([
            'task' => $request->task,
            'user_id' => $user_id,
        ]);
        return redirect('todos');
    }

    /**
     * 編集画面表示
     *
     * @return view
     * @param editTodo
     */
    public function edit($id)
    {
        $editTodo = Todo::find($id);

        return view('todos.edit', ['editTodo' => $editTodo]);
    }

    /**
     * 編集処理
     *
     * @return redirect
     */
    public function update(EditRequest $request, $id)
    {
        $updateTodo = Todo::find($id);
        $updateTodo->task = $request->task;
        $updateTodo->save();

        return redirect('todos');
    }

    /**
     * 削除画面表示
     *
     * @return view
     * @param deleteTodo
     */
    public function delete($id)
    {
        $deleteTodo = Todo::find($id);

        return view('todos.delete', ['deleteTodo' => $deleteTodo]);
    }

    /**
     * 削除処理
     *
     * @return redirect
     */
    public function destroy($id)
    {
        Todo::find($id)->delete();

        return redirect('todos');
    }
}
