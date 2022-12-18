<?php

namespace App\Repositories;

use App\Models\Todo;
use Illuminate\Support\Facades\Auth;

class TodoRepository
{
  /**
   * dbからログインユーザーidで絞り込みデータを取得
   *
   * @return todos
   */
  public static function repository_get()
  {
    $user_id = Auth::user()->id;
    $todos = Todo::where('user_id', '=', $user_id)->orderBy('id', 'desc')->get();

    return $todos;
  }

  /**
   * 新規todoをcreate処理
   */
  public static function repository_create($request)
  {
    $user_id = Auth::user()->id;

    Todo::create([
      'task' => $request->task,
      'user_id' => $user_id,
    ]);
  }

  /**
   * dbからparamのidで詳細データ取得
   *
   * @return showTodo
   * @param id
   */
  public static function repository_show($id)
  {
    $showTodo = Todo::find($id);

    return $showTodo;
  }

  //   /**
  //    * dbからparamのidで編集データ取得
  //    *
  //    * @return editTodo
  //    * @param id
  //    */
  //   public static function repository_edit($id)
  //   {
  //     $editTodo = Todo::find($id);

  //     return $editTodo;
  //   }

  /**
   * 既存todoの編集処理
   *
   * @param request
   * @param id
   */
  public static function repository_update($request, $id)
  {
    $updateTodo = Todo::find($id);
    $updateTodo->task = $request->task;
    $updateTodo->save();
  }

  //   /**
  //    * dbからparamのidで削除データ取得
  //    *
  //    * @param id
  //    */
  //   public static function repository_delete($id)
  //   {
  //     $deleteTodo = Todo::find($id);

  //     return $deleteTodo;
  //   }

  /**
   * 既存todoの削除処理
   *
   * @param id
   */
  public static function repository_destroy($id)
  {
    Todo::find($id)->delete();
  }
}
