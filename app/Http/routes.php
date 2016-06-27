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

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/resume', function () {
    return view('resume');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/about/ui_report', function () {
    return view('uireport');
});

Route::get('/bestofweeze', function () {
    return view('bestofweeze');
});

Route::get('/cats', function () {
    return view('cat');
});

Route::group(['prefix' => 'apps'], function () {
    Route::get('/', function () {
        return view('apps.allapps');
    });
    Route::get('shitgen', 'apps\shitgen\AppController@getView');
    Route::post('shitgen', 'apps\shitgen\AppController@getView');
    Route::get('shitgen/wordslist', 'apps\shitgen\AppController@listArchive');
});