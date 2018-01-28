<?php



Route::get('/', 'PostsController@index');
Route::get('posts/{post}', 'PostsController@show');

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
