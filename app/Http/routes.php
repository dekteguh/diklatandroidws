<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/propinsi', 'PropinsiController@index');

Route::get('/propinsi/{id}', 'PropinsiController@prop');

Route::get('/kabkota', 'KabKotaController@index');

Route::get('/kabkota/{id}', 'KabKotaController@kako');

Route::get('/kabkotas/{prop_id}', 'KabKotaController@listkako');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
