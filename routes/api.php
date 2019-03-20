<?php

use Illuminate\Http\Request;
//use App\Http\Controllers\SiswaController;

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

Route::get('/siswa','SiswaController@index');
Route::post('/siswa','SiswaController@create');
Route::put('/siswa/{id}','SiswaController@update');
Route::delete('/siswa/{id}','SiswaController@delete');
