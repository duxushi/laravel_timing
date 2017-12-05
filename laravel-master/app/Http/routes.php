<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', 'MyController@getLogin');
Route::any('/page/edit', [ 'as' => 'page/edit', 'uses' => "MyController@ajaxlogin"]);
Route::any('/page/show', [ 'as' => 'page/show', 'uses' => "MyController@show"]);
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});


// demo 文件
Route::any('demo/index','DemoController@index');
Route::any('demo/u_add','DemoController@u_add');  // 添加
Route::any('demo/u_add_do','DemoController@u_add_do');  // 添加 动作
Route::any('demo/u_del','DemoController@u_del');  // 删除
Route::any('demo/u_save','DemoController@u_save');// 修改
Route::any('demo/u_save_do','DemoController@u_save_do');// 修改动作
Route::any('demo/u_sel','DemoController@u_sel');  // 查询

// Schedule 文件
Route::get('Schedule/index','ScheduleController@index');
Route::post('Schedule/index_do','ScheduleController@index_do');
Route::any('Schedule/show','ScheduleController@show');
Route::post('Schedule/show_do','ScheduleController@show_do');
Route::any('Schedule/remind','ScheduleController@remind');
Route::any('Schedule/remind','ScheduleController@remind');

//get/post/any 接值方式
Route::any('reg/index', 'RegController@index');
Route::any('reg/add', 'RegController@add');  
Route::any('reg/show', 'RegController@show');  
Route::any('reg/deletes', 'RegController@deletes');  
Route::any('reg/updates', 'RegController@updates');  
Route::any('reg/upd', 'RegController@upd');