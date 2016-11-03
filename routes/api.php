<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');


Route::get('/tasks', function (){
    return App\Models\ProjectTask::latest()->with('project')->limit(6)->get();
});

Route::get('/projects', function(){
   return \App\Models\Project::latest()->with('client')->limit(6)->get();
});

Route::get('/invoices', function(){
    return \App\Models\Invoice::where('is_paid',false)->latest()->with('client')->limit(6)->get();
});
