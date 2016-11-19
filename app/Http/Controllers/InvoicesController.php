<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;

class InvoicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $invoices = Invoice::where('is_archived', false)->with('client')->with('project')->orderBy('id', 'desc')->get();


        return view('invoices', compact('invoices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $gateways = ['check_m'=>'Check', 'paypal_m'=>'Paypal', 'stripe_m'=>'Stripe'];

        $invoice = Invoice::create(['is_viewable'=>false]);




        return view('invoices.create', compact('invoice', 'gateways'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        return 'store';

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(in_array($id, ['paid', 'unpaid','overdue', 'unsent', 'recurring', 'archived' ])){
            return $this->{'show'.studly_case($id)}();
        }
        //
        return 'show';
    }

    public function showPaid(){
        return 'paid';
    }

    public function showUnpaid(){
return 'unpaid';
    }
    public function showUnset(){

    }

    public function showRecurring(){

}

public function showArchived(){

}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gateways = ['check_m'=>'Check', 'paypal_m'=>'Paypal', 'stripe_m'=>'Stripe'];
        if(is_numeric($id)){
            $invoice = Invoice::find($id);
        }else{
            $invoice = Invoice::where('unique_id', $id)->first();
        }


        return view('invoices.edit', compact('invoice', 'gateways'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        return 'update';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        return 'destory';
    }
}
