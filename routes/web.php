<?php

Route::get('/users/{username}', [
  'uses' => 'HomeController@index',
  'as' => 'home'
]);
