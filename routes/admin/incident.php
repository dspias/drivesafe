<?php



Route::group([
   // 'middleware' => 'auth',
    'namespace' => 'Admin\Incident',
    'prefix' => 'admin/incident'

], function() {
    
    // Route::get('', ['uses' => 'DashboardController@index', 'as' => 'admin.dashboard.index']);

    Route::get('/',  'IncidentController@index')->name('admin.incident.index');

    Route::get('/create', ['uses' => 'IncidentController@create', 'as' => 'admin.incident.create']);

    Route::post('', ['uses' => 'IncidentController@store', 'as' => 'admin.incident.store']);

    Route::get('/show/{id}', ['uses' => 'IncidentController@show', 'as' => 'admin.incident.show']);

    Route::get('/edit/{id}', ['uses' => 'IncidentController@edit', 'as' => 'admin.incident.edit']);

    Route::POST('/update/{id}', ['uses' => 'IncidentController@update', 'as' => 'admin.incident.update']);

    Route::get('/destroy/{id}', ['uses' => 'IncidentController@destroy', 'as' => 'admin.incident.destroy']);
});