<?php

Route::get('/', [
	'uses' => 'HomeController@index',
	'as' => 'home'
]);

Route::post('second', [
	'uses' => 'HomeController@second',
	'as' => 'second'
]);
