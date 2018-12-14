<?php



Route::group([
   // 'middleware' => 'auth',
    'namespace' => 'Reporter\Dashboard',
    'prefix' => 'reporter/dashboard'

], function() {
    
    // Route::get('', ['uses' => 'DashboardController@index', 'as' => 'admin.dashboard.index']);

    Route::get('/',  'DashboardController@index')->name('reporter.dashboard.index');

    Route::get('/create', ['uses' => 'DashboardController@create', 'as' => 'reporter.dashboard.create']);

    Route::post('', ['uses' => 'DashboardController@store', 'as' => 'reporter.dashboard.store']);

    Route::get('/show/{id}', ['uses' => 'DashboardController@show', 'as' => 'reporter.dashboard.show']);

    Route::get('/edit/{id}', ['uses' => 'DashboardController@edit', 'as' => 'reporter.dashboard.edit']);

    Route::put('/update/{id}', ['uses' => 'DashboardController@update', 'as' => 'reporter.dashboard.update']);

    Route::get('/destroy/{id}', ['uses' => 'DashboardController@destroy', 'as' => 'reporter.dashboard.destroy']);
});