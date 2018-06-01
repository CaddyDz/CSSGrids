<?php

Route::get('/', 'HomeController@index');

Route::get('redirect', function() {
  return redirect()->route('landing');
});

Route::get('redirect2', function() {
  return redirect()->route('landing2');
});

Route::get('landing/page', function() {
  echo 'Landing';
})->name('landing');
// This also works
Route::get('landing/page/abc', [
  'uses' => 'HomeController@index',
  'as' => 'landing2' // Naming here
]);
