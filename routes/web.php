<?php
use App\Http\Middleware\checkAuthMiddleware;
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

Route::get('/', 'AuthController@index')->name('login')->middleware('guest');
Route::post('/auth', ['uses' => 'AuthController@login', 'as' => 'auth'])->middleware('guest');


Route::group(['middleware' => 'auth'], function () {
	Route::post('/logout', 'AuthController@logout')->name('logout');
	require 'backend/category.php';
	require 'backend/company.php';
	require 'backend/medicine.php';
	require 'backend/newsale.php';
	require 'backend/supplier.php';
	require 'backend/base_pages.php';
});
















