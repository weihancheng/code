<?php
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

use Illuminate\Http\Request;

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function() {
	// 登录处理
	Route::post('/login', 'EntryController@login');
});

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function() {
	// 登录处理
	Route::get('/user', function() {
		echo "1";
	});
});

