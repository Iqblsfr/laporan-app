<?php

Route::get('/', function () {

    return redirect('/reports');

});

Route::resource('reports', 'ReportController');