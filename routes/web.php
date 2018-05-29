<?php

Route::get('/', 'HomeController@index');

Route::group(['prefix' => 'account'], function() {
  Route::get('profile', function() {
    echo 'Profile';
  });
  Route::get('password', function() {
    echo 'Password';
  });
});
