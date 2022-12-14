<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRequest;
use App\Http\Requests\EditRequest;
use App\Services\TodoService;

class TodoController extends Controller
{
    public function __construct()
    {
        //　TodoController実行時にtodos.indexのrouteをグローバルなsessionとして保存
        session(['key' => 'todos.index']);
    }
    /**
     * 一覧画面表示
     *
     * @return view
     * @param todos
     */
    public function index()
    {
        $todos = TodoService::service_get();

        return view('todos.index', ['todos' => $todos]);
    }

    // /**
    //  * 登録画面表示
    //  *
    //  * @return view
    //  */
    // public function create()
    // {
    //     return view('todos.create');
    // }

    /**
     * 登録処理
     *
     * @return redirect
     */
    public function store(CreateRequest $request)
    {
        TodoService::service_create($request);

        return redirect('todos');
    }

    /**
     * 詳細画面表示
     *
     * @return view
     * @param showTodo
     */
    public function show($id)
    {
        $showTodo = TodoService::service_show($id);

        return view('todos.show', ['showTodo' => $showTodo,]);
    }

    // /**
    //  * 編集画面表示
    //  *
    //  * @return view
    //  * @param editTodo
    //  */
    // public function edit($id)
    // {
    //     $editTodo = TodoService::service_edit($id);

    //     return view('todos.edit', ['editTodo' => $editTodo]);
    // }

    /**
     * 編集処理
     *
     * @return redirect
     */
    public function update(EditRequest $request, $id)
    {
        TodoService::service_update($request, $id);

        return redirect('todos');
    }

    // /**
    //  * 削除画面表示
    //  *
    //  * @return view
    //  * @param deleteTodo
    //  */
    // public function delete($id)
    // {
    //     $deleteTodo = TodoService::service_delete($id);

    //     return view('todos.delete', ['deleteTodo' => $deleteTodo]);
    // }

    /**
     * 削除処理
     *
     * @return redirect
     */
    public function destroy($id)
    {
        TodoService::service_destroy($id);

        return redirect('todos');
    }
}