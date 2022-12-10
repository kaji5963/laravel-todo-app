<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';



//todosルーティング(グループ化)
Route::prefix('todos')
    ->middleware(['auth'])
    ->controller(TodoController::class)
    ->name('todos.')
    ->group(function () {
        //一覧画面表示
        Route::get('/', 'index')
            ->name('index');
        //登録画面表示
        Route::get('/create', 'create')
            ->name('create');
        //登録処理
        Route::post('/create', 'store')
            ->name('store');
        //詳細画面表示
        Route::get('/show/{id}', 'show')
            ->name('show');
        //編集画面表示
        Route::get('/edit/{id}', 'edit')
            ->name('edit');
        //編集処理
        Route::post('/edit/{id}', 'update')
            ->name('update');
        //削除画面表示
        Route::get('/delete/{id}', 'delete')
            ->name('delete');
        //削除処理
        Route::post('/delete/{id}', 'destroy')
            ->name('destroy');
    });


//todosルーティング
// //一覧画面表示
// Route::get('todos', [TodoController::class, 'index'])
//     ->name('todos');
// //登録画面表示
// Route::get('todos/create', [TodoController::class, 'create'])
//     ->name('todos.create');
// //登録処理
// Route::post('todos/create', [TodoController::class, 'store'])
//     ->name('todos.store');
// //編集画面表示
// Route::get('todos/edit/{id}', [TodoController::class, 'edit'])
//     ->name('todos.edit');
// //編集処理
// Route::post('todos/edit/{id}', [TodoController::class, 'update'])
//     ->name('todos.update');
// //削除画面表示
// Route::get('todos/delete/{id}', [TodoController::class, 'delete'])
//     ->name('todos.delete');
// //削除処理
// Route::post('todos/delete/{id}', [TodoController::class, 'destroy'])
//     ->name('todos.destroy');
