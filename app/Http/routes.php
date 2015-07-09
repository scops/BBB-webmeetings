<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', 'MeetingController@index');
Route::resource('meeting','MeetingController');
Route::post('/meeting/{meeting}/join', 'MeetingController@join');

Route::group(['middleware' => ['auth']], function(){
    Route::get('/login', 'MeetingController@index');
    Route::resource('meeting', 'MeetingController', ['only' => ['create', 'store', 'update', 'destroy', 'edit']]);
    Route::get('/mymeetings', 'MeetingController@indexOwnMeetings');
});

Route::get('/logout', 'UserController@logout');

