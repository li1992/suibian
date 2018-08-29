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
//
Route::any("/","Admin\IndexController@index");
Route::any("admin/index/{action?}",function(App\Http\Controllers\Admin\IndexController $index,$action='index'){
	return $index->$action();

});

