<?php
Route::group([
   // 'middleware' => 'auth',
    'namespace' => 'Admin\Reporter_auth',
    'prefix' => 'reporter'
], function() {
    
    
    Route::get('/login', ['uses' => 'ReporterLoginController@showLoginForm', 'as' => 'reporter.index']);
    Route::post('/login', ['uses' => 'ReporterLoginController@login', 'as' => 'reporter.login']);
    // Route::get('/register', ['uses' => 'RegisterController@showRegistrationForm', 'as' => 'reporter.register']);
    // Route::post('/register', ['uses' => 'RegisterController@login', 'as' => 'reporter.register']);
    // Route::get('/reporter-password/reset', ['uses' => 'ForgotPasswordController@showLinkRequestForm', 'as' => 'reporter.password.request']);
    // Route::post('/reporter-password/email', ['uses' => 'ForgotPasswordController@sendResetLinkEmail', 'as' => 'reporter.password.email']);
    // Route::get('/reporter-password/reset', ['uses' => 'ResetPasswordController@reset', 'as' => 'reporter.password.update']);
    // Route::post('/reporter-password/reset/{token}', ['uses' => 'ResetPasswordController@showResetForm', 'as' => 'reporter.password.reset']);
});