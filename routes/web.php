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

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| 存取器
|--------------------------------------------------------------------------
*/
Route::get('存取器', 'MutatorsController@getXXXXXXAttribute');

/*
|--------------------------------------------------------------------------
| 修改器 - 定義修改器
|--------------------------------------------------------------------------
*/
Route::get('修改器_定義修改器', 'MutatorsController@setXXXXXXAttribute');

