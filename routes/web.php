<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::group(array('before' => 'auth'), function(){
    // your routes

    Route::get('/', 'HomeController@index');

    Route::resource('admin/invoices','InvoicesController');


    Route::resource('admin', 'Admin\AdminController');


});


