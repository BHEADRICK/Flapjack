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

    Route::resource('admin/clients', 'ClientsController');

    Route::resource('admin/projects', 'ProjectsController');


    Route::resource('admin/expenses', 'ExpensesController');

    Route::resource('admin/proposals', 'ProposalsController');

    Route::resource('admin/tickets', 'TicketsController');

    Route::resource('admin/repports', 'ReportsController');

    Route::resource('admin/credit-notes', 'CreditNotesController');





    Route::resource('admin', 'Admin\AdminController');


});


