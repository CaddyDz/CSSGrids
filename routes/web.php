<?php

Route::get('/', function(){
  return view('posts.index');
});

Route::get('/posts/create', 'PostsController@create')->name('create');

Route::get('/posts/{post}', 'PostsController@show');

Route::post('/posts', 'PostsController@store');

Route::post('/posts/{post}/comments', 'CommentsController@store');
