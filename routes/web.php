<?php



Route::get('/', 'PostsController@index');
Route::get('posts/{post}/edit', 'PostsController@edit');
Route::get('posts/{post}/{slug}', 'PostsController@show');
Route::get('posts/create', 'PostsController@create');

Route::get('categories/{category}/{slug}', 'CategoryController@show');

Route::get('users/{user}', 'UserController@show');
Route::get('tags/{tag}/{slug}', 'TagController@show');

Auth::routes();

/*
tasks - listato di risorse - GET - @index
tasks/{id} - singola risorsa - GET - @show
tasks/create - form create - GET - @create
tasks - salva su db nuovo task - POST - @store
tasks/{id}/edit - form edit - GET -  @edit
tasks/{id} - update task - PATCH - @update
tasks/{id} - delete task - DELETE - @destroy
 */
