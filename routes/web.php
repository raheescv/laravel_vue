<?php

Route::group([
  'middleware' => ['cors'],
], function ($router) {
  Route::get('/{any}', function () {
    return view('post');
  })->where('any', '.*');
});