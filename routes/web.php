<?php


Route::get('/seed', function (\Fresh\Post $post) {
	$f = \Faker\Factory::create();

	forea
});

Route::get('/', [
    'uses' => 'HomeController@index',
    'as' => 'home'
]);
