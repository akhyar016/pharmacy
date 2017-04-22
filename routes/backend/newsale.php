<?php


Route::post('/newsale/insert', ['uses' => 'SaleController@insert', 'as' => 'newsale.insert']);
Route::post('/newsale/clear', ['uses' => 'SaleController@clear', 'as' => 'newsale.clear']);
Route::post('/newsale/save', ['uses' => 'SaleController@save', 'as' => 'newsale.save']);
Route::post('/newsale/delete/{id}', ['uses' => 'SaleController@delete', 'as' => 'newsale.delete']);