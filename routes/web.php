<?php

Route::get('/', [
  'uses' => 'HomeController@index',
  'as' => 'home'
]);

Route::post('/', [
  'uses' => 'HomeController@create'
]);
