<?php

Route::get('/', [
  'uses' => 'HomeController@index',
  'as' => 'home'
]);

Route::post('/mailing', [
  'uses' => 'MailingController@create',
  'as' => 'mailing.create'
]);
