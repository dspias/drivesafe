<?php



Route::group([
   // 'middleware' => 'auth',
    'namespace' => 'Admin\CreateReporter',
    'prefix' => 'admin/create_reporter'

], function() {
    
    Route::get('', ['uses' => 'CreateReporter@index', 'as' => 'admin.create_reporter.index']);

    Route::get('create', ['uses' => 'CreateReporter@create', 'as' => 'admin.create_reporter.create']);

    Route::post('', ['uses' => 'CreateReporter@store', 'as' => 'admin.create_reporter.store']);

    Route::post('/{id}', ['uses' => 'CreateReporter@imageStore', 'as' => 'admin.create_reporter.imagestore']);

    Route::get('show/{id}', ['uses' => 'CreateReporter@show', 'as' => 'admin.create_reporter.show']);

    Route::get('edit/{id}', ['uses' => 'CreateReporter@edit', 'as' => 'admin.create_reporter.edit']);

    Route::post('update/{id}', ['uses' => 'CreateReporter@update', 'as' => 'admin.create_reporter.update']);

    Route::get('destroy/{id}', ['uses' => 'CreateReporter@destroy', 'as' => 'admin.create_reporter.destroy']);
});