<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::middleware(['auth'])->group(function () {
    Route::get('/approval', 'HomeController@approval')->name('approval');

    Route::middleware(['approved'])->group(function () {
        Route::get('/home', 'HomeController@index')->name('home');
    });


    
});

Route::middleware(['admin'])->group(function () {
        Route::get('/users', 'UserController@index')->name('admin.users.index');
        Route::get('/users/{user_id}/approve', 'UserController@approve')->name('admin.users.approve');
    });




Route::group([
    'middleware' => 'guest:admin'
], function() {
    
    include_once 'admin/admin_auth.php';
});

Route::group([
    'middleware' => 'auth:admin',
    'namespace' => 'Admin\Admin_auth',
    'prefix' => 'admin'
], function() {    
    Route::get('/logout', ['uses' => 'AdminLoginController@logout', 'as' => 'admin.logout']);
});


Route::group([
    'middleware' => 'guest:reporter'
], function() {
    
    include_once 'reporter/reporter_auth.php';
});

Route::group([
    'middleware' => 'auth:reporter',
    'namespace' => 'Admin\Reporter_auth',
    'prefix' => 'reporter'
], function() {    
    Route::get('/logout', ['uses' => 'ReporterLoginController@logout', 'as' => 'reporter.logout']);
});

Route::group([
    'middleware' => 'auth:admin'
], function() {

    include_once 'admin/dashboard.php';
    include_once 'admin/create_reporter.php';
    include_once 'admin/incident.php';
    include_once 'admin/drivers.php';
    
});

Route::group([
    'middleware' => 'auth:reporter'
], function() {

    include_once 'reporter/dashboard.php';
    include_once 'reporter/report.php';
    
});

