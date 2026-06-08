<?php

Route::get('/reports', 'Api\\ReportApiController@index');

Route::post('/reports', 'Api\\ReportApiController@store');

Route::get('/reports/{id}', 'Api\\ReportApiController@show');

Route::put('/reports/{id}', 'Api\\ReportApiController@update');

Route::delete('/reports/{id}', 'Api\\ReportApiController@destroy');