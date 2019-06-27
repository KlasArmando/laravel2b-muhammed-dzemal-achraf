<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware grou Now create something great!
|
*/

Route::get('/', 'PostsController@index');
Route::get('/nieuws', 'PostsController@nieuws');
Route::get('/stats', 'StatController@index');
Route::get('/chat', 'PagesController@chat');

//Posts
Route::resource('posts', 'PostsController');

//Register
Auth::routes();

//User Dashboard
Route::get('/dashboard', 'DashboardController@index');

//Admin Dashboard
    Route::prefix('admin')->group(function (){
        Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
        Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
        Route::get('/', 'AdminController@index')->name('admin.dashboard');
    });

//Stats Page
Route::resource('stats','StatController');

//SearchContent on Stats Page
Route::get('searchcontent', 'StatController@searchcontent');

//Comments
Route::post('comments/id{post_id}',['uses' => 'CommentsController@store', 'as' => 'comments.store']);
Route::get('comments/{id}/edit', ['uses' => 'CommentsController@edit', 'as' => 'comments.edit']);
Route::put('comments/{id}', ['uses' => 'CommentsController@update', 'as' => 'comments.update']);
Route::delete('comments/{id}/', ['uses' => 'CommentsController@destroy', 'as' => 'comments.destroy']);
Route::get('comments/{id}/delete', ['uses' => 'CommentsController@delete', 'as' => 'comments.delete']);

//Chat
Route::get('chatroom', 'ChatRoomController@index');
Route::resource('crud','Crud2Controller');
Route::resource('crud3','Crud3Controller');
Route::resource('crud4','Crud4Controller');

Route::get('generalchat', function(){
    return view('chatroom.chat.create');
});
Route::get('footballchat', function(){
    return view('chatroom.footballchat.create');
});
Route::get('basketballchat', function(){
    return view('chatroom.basketballchat.create');
});
