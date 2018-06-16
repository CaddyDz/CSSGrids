<?php

Route::get('/', [
	'uses' => 'HomeController@index',
	'as' => 'home'
]);

Route::post('newsletter', [
	'uses' => 'HomeController@create',
	'as' => 'newsletter.create'
]);
