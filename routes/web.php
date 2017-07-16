<?php

App::singleton('\blog\Billing\Stripe', function(){
  return new \blog\Billing\Stripe(config('services.stripe.secret'));
});

Route::get('/', 'PostsController@index')->name('home');

Route::get('/home', 'PostsController@index')->name('home');

Route::get('/posts/create', 'PostsController@create');

Route::get('/posts/{post}', 'PostsController@show');

Route::post('/posts', 'PostsController@store');

Route::post('/posts/{post}/comments', 'CommentsController@store');

Route::get('/register', 'RegistrationController@create');

Route::post('/register', 'RegistrationController@store');

Route::get('/login', 'SessionsController@create');

Route::post('/login', 'SessionsController@store');

Route::get('/logout', 'SessionsController@destroy');
