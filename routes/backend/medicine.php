<?php


Route::post('/medicine/create', ['uses' => 'MedicineController@create', 'as' => 'medicine.create'] );
Route::get('/medicine/edit/{id}', ['uses' => 'MedicineController@edit', 'as' => 'medicine.edit'] );
Route::post('/medicine/update/{id}', ['uses' => 'MedicineController@update', 'as' => 'medicine.update'] );
Route::post('/medicine/delete/{id}', ['uses' => 'MedicineController@delete', 'as' => 'medicine.delete'] );