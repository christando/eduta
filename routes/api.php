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

//API Tampil Data
Route::get('/pelamar/read','EdutaAPIController@read');
//API Create Data
Route::POST('/pelamar/create','EdutaAPIController@create');
//API delete Data
Route::delete('/pelamar/delete/{id}','EdutaAPIController@delete');
//API Update Data
Route::POST('/pelamar/update/{id}','EdutaAPIController@update');
