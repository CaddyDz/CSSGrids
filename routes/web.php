<?php

Route::get('/seed', function (\Fresh\Post $post) {
    $f = \Faker\Factory::create();

    foreach (range(1, 1000) as $x) {
        $post->create([
            'title' => $f->sentence(10),
            'body' => $f->sentence(100)
        ]);
    }
});

Route::get('/', [
    'uses' => 'HomeController@index',
    'as' => 'home'
]);
