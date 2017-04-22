<?php


Route::post('/company/create', ['uses' => 'CompaniesController@create', 'as' => 'company.create'] );
Route::get('/company/edit/{id}', ['uses' => 'CompaniesController@edit', 'as' => 'company.edit'] );
Route::post('/company/update/{id}', ['uses' => 'CompaniesController@update', 'as' => 'company.update'] );