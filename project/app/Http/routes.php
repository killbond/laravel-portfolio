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

Route::group(['domain' => 'local.laravel.portfolio.ru', 'middleware' => ['web']], function () {

    Route::get('/', [
        'uses' => 'FrontController@index',
        'as' => 'home'
    ]);

    Route::post('/project', [
        'uses' => 'ProjectController@create',
        'before' => ['ip', 'csrf'],
        'as' => 'project.create'
    ]);

    Route::post('/project/update/{id}', [
        'uses' => 'ProjectController@update',
        'before' => ['ip', 'csrf'],
        'as' => 'project.update'
    ]);

});