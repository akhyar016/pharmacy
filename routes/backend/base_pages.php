<?php

Route::get('/dashboard', ['uses' => 'PharmacyController@index', 'as' => 'dashboard']);
Route::get('/medicine', ['uses' => 'MedicineController@index', 'as' => 'medicine']);
Route::get('/companies', ['uses' => 'CompaniesController@index', 'as' => 'companies']);
Route::get('/newsale', ['uses' => 'SaleController@index', 'as' => 'newsale']);
Route::get('/suppliers', ['uses' => 'SuppliersController@index', 'as' => 'suppliers']);
Route::get('/categories', ['uses' => 'CategoriesController@index', 'as' => 'categories']);