<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminAuthController;
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



Route::get('/', 'HomeController@Index');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('/login', 'AdminAuthController@getLogin')->name('adminLogin');
    Route::post('/login', 'AdminAuthController@postLogin')->name('adminLoginPost');
    Route::get('/logout', 'AdminAuthController@adminLogout');
 
    Route::group(['middleware' => 'adminauth'], function () {
        Route::get('/', function () {
            return view('admin.welcome');
        })->name('adminDashboard');
 
    });
});