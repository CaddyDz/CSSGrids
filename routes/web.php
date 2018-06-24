<?php

Route::get('/', [
    'uses' => 'HomeController@index',
    'as' => 'home'
]);

Route::get('/post/{post}', [
    'uses' => 'PostController@get',
    'as' => 'post.get'
]);
