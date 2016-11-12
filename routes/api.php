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

Route::get('/notifications', function(){
   return \App\Models\Notification::where('client_id','>',0)->latest()->with('client')->with('invoice')->limit(6)->get();
});

Route::get('/snapshot', function(){


    $return = new \stdClass();
    $return->date = mktime(0,0,0,1,1,date('y'));
    $return->paid = \App\Models\Invoice::where('is_paid', 1)->where('date_entered','>', $return->date)->sum('amount');
    $return->unpaid = \App\Models\Invoice::where('is_paid', 0)->where('date_entered','>', $return->date)->sum('amount');
    $return->partial =DB::table('invoices')->join('partial_payments','partial_payments.unique_invoice_id','invoices.unique_id' )->where('invoices.is_paid', 0)->where('date_entered','>', $return->date)->sum('partial_payments.amount');

    return json_encode($return);
});

Route::get('invoice-lines/{id}', function($id){

    return \App\Models\InvoiceRow::where('unique_id', $id)->get();
});

Route::put('invoice-lines/{id}', function($id){
    return \App\Models\InvoiceRow::create(['unique_id'=>$id]);
});

Route::delete('invoice-lines/{id}', function($id){
   return \App\Models\InvoiceRow::destroy($id);
});