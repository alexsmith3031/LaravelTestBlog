<?php


Route::get('/tasks','TasksController@index');

Route::get('/tasks/{task}','TasksController@show');

Route::get('/', function () {

	return view('welcome');

});

Route::get('/posts', 'PostsController@index');

Route::get('/posts/{post}', 'PostsController@show');

// controller => PostController
// eloquent model => Post
// migration => create_posts_table

Route::get('/about', function () {

	return view('about');

});