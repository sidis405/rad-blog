<?php



Route::get('/', 'PostsController@index');
Route::get('posts/{post}/edit', 'PostsController@edit');
Route::get('posts/{post}/{slug}', 'PostsController@show');
Route::get('posts/create', 'PostsController@create');
Route::post('posts', 'PostsController@store');

Route::get('categories/{category}/{slug}', 'CategoryController@show');

Route::get('users/{user}', 'UserController@show');
Route::get('tags/{tag}/{slug}', 'TagController@show');

Auth::routes();

/*
posts - listato di risorse - GET - @index
posts/{id} - singola risorsa - GET - @show
posts/create - form create - GET - @create
posts - salva su db nuovo task - POST - @store
posts/{id}/edit - form edit - GET -  @edit
posts/{id} - update task - PATCH - @update
posts/{id} - delete task - DELETE - @destroy
 */
