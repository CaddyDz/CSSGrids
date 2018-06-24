<?php

Route::get('/', [
    'uses' => 'HomeController@index',
    'as' => 'home'
]);

Route::get('/api/posts', [
    'uses' => 'PostController@index',
    'as' => 'api.posts'
]);
