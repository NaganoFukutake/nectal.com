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

Auth::routes();
/* 認証されている場合 */
Route::group(['middleware' => ['auth']], function() {
    Route::resource('/', 'storesController');
    Route::resource('mypage', 'mypageController');
});

/* 管理画面側 */
Route::group(['prefix' => 'Admin', 'as' => 'admin.', 'namespace' => 'Admin'], function() {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('user', 'UsersController');
    Route::resource('store', 'StoresController');
    Route::post('store/confirm', 'StoresController@comfirm')->name('store.confirm');
});