<?php

Route::post('/supplier/create', ['uses' => 'SuppliersController@create', 'as' => 'supplier.create'] );
Route::get('/supplier/edit/{id}', ['uses' => 'SuppliersController@edit', 'as' => 'supplier.edit']);
Route::post('/supplier/update/{id}', ['uses' => 'SuppliersController@update', 'as' => 'supplier.update'] );
Route::post('/supplier/delete/{id}', ['uses' => 'SuppliersController@delete', 'as' => 'supplier.delete'] );