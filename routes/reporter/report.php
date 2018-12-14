<?php



Route::group([
   // 'middleware' => 'auth',
    'namespace' => 'Reporter\Report',
    'prefix' => 'reporter/report'

], function() {
    
    // Route::get('', ['uses' => 'DashboardController@index', 'as' => 'admin.dashboard.index']);

    Route::get('/',  'ReportController@index')->name('reporter.report.index');

    Route::get('/create', ['uses' => 'ReportController@create', 'as' => 'reporter.report.create']);

    Route::post('', ['uses' => 'ReportController@store', 'as' => 'reporter.report.store']);

    Route::get('/getdata', ['uses' => 'ReportController@forSms', 'as' => 'reporter.report.forSms']);

    Route::get('/show/{id}', ['uses' => 'ReportController@show', 'as' => 'reporter.report.show']);

    Route::get('/edit/{id}', ['uses' => 'ReportController@edit', 'as' => 'reporter.report.edit']);

    Route::POST('/update/{id}', ['uses' => 'ReportController@update', 'as' => 'reporter.report.update']);

    Route::get('/destroy/{id}', ['uses' => 'ReportController@destroy', 'as' => 'reporter.report.destroy']);
});