<?php

namespace App\Services;

use App\Repositories\TodoRepository;
use Illuminate\Support\Facades\Route;

class TodoService
{
  /**
   * 一覧画面表示
   *
   * @return todos
   */
  public static function service_get()
  {
    //一覧画面遷移時にtodos.indexのrouteをグローバルなsessionとして保存
    session(['key' => 'todos.index']);

    $todos = TodoRepository::repository_get();

    return $todos;
  }

  /**
   * 登録処理
   *
   * @param request
   */
  public static function service_create($request)
  {
    TodoRepository::repository_create($request);
  }

  /**
   * 詳細画面表示
   *
   * @param id
   */
  public static function service_show($id)
  {

    $showTodo = TodoRepository::repository_show($id);

    return $showTodo;
  }

  //   /**
  //    * 編集画面表示
  //    *
  //    * @param id
  //    */
  //   public static function service_edit($id)
  //   {
  //     $editTodo = TodoRepository::repository_edit($id);

  //     return $editTodo;
  //   }


  /**
   * 編集処理
   *
   * @param request
   * @param id
   */
  public static function service_update($request, $id)
  {
    TodoRepository::repository_update($request, $id);
  }

  //   /**
  //    * 削除画面表示
  //    *
  //    * @return deleteTodo
  //    * @param id
  //    */
  //   public static function service_delete($id)
  //   {
  //     $deleteTodo = TodoRepository::repository_delete($id);

  //     return $deleteTodo;
  //   }

  /**
   * 削除処理
   *
   * @param id
   */
  public static function service_destroy($id)
  {
    TodoRepository::repository_destroy($id);
  }
}
