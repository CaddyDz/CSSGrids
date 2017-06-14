<?php

Route::get('/', function(){
  return view('rtl'); 
});
// Route::get('/en', [
//   App::setLocale('en'), // FIXME: This isn't working, locale isn't changing on runtime
//   // dd(config('app.locale')),
//   'uses' => 'PostsController@index',
//   'as' => 'home',
// ]);

Route::get('/posts/create', 'PostsController@create')->name('create');

Route::get('/posts/{post}', 'PostsController@show');

Route::post('/posts', 'PostsController@store');

Route::post('/posts/{post}/comments', 'CommentsController@store');

/* Routes for Arabic RTL */

// Route::get('something', [
//   // FIXME: This function is getting executed on whatever route we hit
//   App::setLocale('ar'),
//   // dd(config('app.locale')),
//   'uses' => 'PostsController@index',
//   'as' => 'home'
// ]);
