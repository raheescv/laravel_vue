<?php

use Illuminate\Http\Request;

Route::group([
    'middleware' => ['api', 'cors'],
    'prefix' => 'api',
], function ($router) {

    Route::post('/post/create', 'PostController@store');
    Route::get('/post/edit/{id}', 'PostController@edit');
    Route::post('/post/update/{id}', 'PostController@update');
    Route::delete('/post/delete/{id}', 'PostController@delete');
    Route::get('/posts', 'PostController@index');
    Route::resource('projects' , 'ProjectController');
    
    Route::get('/contacts', 'ContactsController@get');
    Route::get('/conversation/{id}', 'ContactsController@getMessagesFor');
    Route::post('/conversation/send', 'ContactsController@send');
    
});