<?php



Route::group([
   // 'middleware' => 'auth',
    'namespace' => 'Admin\Drivers',
    'prefix' => 'admin/driver'

], function() {
    
    // Route::get('', ['uses' => 'DashboardController@index', 'as' => 'admin.dashboard.index']);

    Route::get('/',  'DriverController@index')->name('admin.driver.index');

    Route::get('/create', ['uses' => 'DriverController@create', 'as' => 'admin.driver.create']);

    Route::post('', ['uses' => 'DriverController@store', 'as' => 'admin.driver.store']);

    Route::get('/show/{id}', ['uses' => 'DriverController@show', 'as' => 'admin.driver.show']);

    Route::get('/edit/{id}', ['uses' => 'DriverController@edit', 'as' => 'admin.driver.edit']);

    Route::POST('/update/{id}', ['uses' => 'DriverController@update', 'as' => 'admin.driver.update']);

    Route::get('/destroy/{id}', ['uses' => 'DriverController@destroy', 'as' => 'admin.driver.destroy']);
});