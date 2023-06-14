<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/index', function () {
   return view('index');
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', 'PageController@index');
    Route::get('/account', 'PageController@account');
    Route::get('/products', 'PageController@products');
    Route::get('/reporting', 'PageController@reporting');

    Route::get('/account/searchbyNama', 'PageController@searchbyNama');
    Route::get('/account/searchbyNik', 'PageController@searchbyNik');
    Route::get('/account/desc', 'PageController@sortdesc');

    Route::get('/account/formadd', 'PageController@formadd');
    Route::post('/account/save', 'PageController@save');

    Route::get('/account/formedit/{id}', 'PageController@formedit');
    Route::PUT('/account/update/{id}', 'PageController@update');
    Route::get('/account/delete/{id}', 'PageController@delete');

    route::get('/logout', 'AuthController@logout');
});

Route::group(['middleware' => ['guest']], function () {
    route::get('/register', 'AuthController@register');
    route::POST('/save', 'AuthController@save');

    route::get('/', 'AuthController@login')->name('login');
    route::POST('/ceklogin', 'AuthController@ceklogin');
});
