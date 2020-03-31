<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('user', 'UserController@index')->name('indexallget');
Route::get('userstore', 'UserController@store')->name('storeallget');
Route::get('user', 'UserController@update');
Route::get('user', 'UserController@desactivar');
Route::get('user', 'UserController@activar');

Route::get ('articuloslist','ArticuloController@listarArticulo')->name('articulolistget');
