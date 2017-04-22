<?php 

Route::post('/category/create', ['uses' => 'CategoriesController@create', 'as' => 'category.create'] );
Route::get('/category/edit/{id}', ['uses' => 'CategoriesController@edit', 'as' => 'category.edit']);
Route::post('/category/update/{id}', ['uses' => 'CategoriesController@update', 'as' => 'category.update'] );
Route::post('/category/delete/{id}', ['uses' => 'CategoriesController@delete', 'as' => 'category.delete'] );