{!! BootForm::textarea('Description', 'description')->rows('4') !!}

<script>
    window.unique_id = "{{$invoice->unique_id}}"
</script>
<h3>Line Items</h3>

<table>
    <thead>
    <tr>
        <th class="item-name">Item Name</th>
        <th class="item-qty">Qty/Hrs</th>
        <th class="item-rate">Rate</th>
        <th class="item-tax">Tax Rate</th>
        <th class="item-type">Type</th>
        <th class="item-discount">Discount</th>

        <th class="item-cost">Cost</th>
        <th class="item-actions">Actions</th>
    </tr>
    </thead>
    <tbody class="ui-sortable">
    <tr v-for="item in items">
        <td colspan="8"><table >

                <tr><td>
                        <table>
                            <tr>
                                <td class="item-name">

                                    {!! BootForm::text('', 'invoice_item[name][]')->attribute('v-model', 'item.name') !!}</td>
                                <td class="item-qty">{!! BootForm::text('', 'invoice_item[qty][]')->attribute('v-model','item.qty') !!}</td>
                                <td class="item-rate">{!! BootForm::text('', 'invoice_item[rate][]')->attribute('v-model','item.rate') !!}</td>
                                <td class="item-tax">{!! BootForm::select('', 'invoice_item[tax_id][]')->options([0=>'No Tax', 1=>['Default']])->attribute('v-model','item.tax_id') !!} </td>
                                <td class="item-type">{!! BootForm::select('', 'invoice_item[item_type_id][]')->options([
                                'standard'=>'Standard',
                                'flat_rate'=>'Flat Rate',
                                'expense'=>'Expense',
                                'time_entry'=>'Time Entry',
                                'fixed_discount'=>'Discount ($)',
                                'percentage_discount'=>'Discount (%)'
                                 ])->attribute('v-model','item.type') !!}</td>

                                <td class="item-discount">{!! BootForm::text('', 'invoice_item[discount][]')->attribute('v-model','item.discount') !!}</td>
                                <td class="item-cost">{!! BootForm::hidden('invoice_item[cost][]')->attribute('v-model', 'item.cost') !!} <div class="form-group">cost</div></td>
                                <td class="item-actions"><div class="form-group">
                                        <a href="javascript:void(null)" v-if="items.length>1" v-on:click="deleteItem(item.id)" class="delete-item">   <i class="fa fa-trash fa-1 " aria-hidden="true"></i></a>
                                    </div></td>

                            </tr>
                            <tr>
                                <td class="item-description">
                                    {!! BootForm::textarea('', 'invoice_item[description][]')->placeholder('description')->rows(2)->attribute('v-model', 'item.description') !!}
                                </td>
                            </tr>
                        </table>
                    </td></tr>
            </table></td>
    </tr>

    </tbody>
    <tfoot>
<tr>
    <td class="lines-total" colspan="8">
Total Amount: <span class="symbol">$</span><span class="value">@{{ items_total }}</span>
    </td>
</tr>
    </tfoot>
</table>



<a href="javascript:void(null)" class="btn btn-default" v-on:click="addInvoiceItem">Add Item</a>
{!! BootForm::textarea('Notes', 'notes') !!}

<h3>Files</h3>
...


<h3>Payment Schedule</h3>

<div class="payment-details-container">
    <div class="partial-payment form-inline" v-for="payment in payments">
        {!! BootForm::text('', 'partial-amount[]')->attribute('v-model', 'payment.amount') !!}
        {!! BootForm::select('', 'partial-is_percentage{]')->options([1=>'%', 0=>'$'])->attribute('v-model', 'payment.is_percentage') !!}
        {!! BootForm::date('', 'partial-Due_date[]')->attribute('v-model', 'payment.due_date') !!}
        {!! BootForm::text('', 'partial-notes')->attribute('v-model', 'payment.notes') !!}
        <a href="javascript:void(null)" v-on:click="paymentPaid(payment.id)" class="btn btn-default" v-if="!payment.is_paid">Mark as Complete</a>
        <a href="javascript:void(null)"  v-on:click="deletePayment(payment.id)" class="btn btn-delete" v-if="!payment.is_paid && payments.length>1"><i aria-hidden="true" class="fa fa-trash fa-2 "></i></a>
        <a href="javascript:void(null)" class="btn btn-primary" v-if="payment.is_paid">Payment Details</a>
    </div>
</div>
<a href="javascript:void(null)" class="btn btn-default" v-on:click="addPayment">Add another part to the payment schedule</a>

<h3>Payment Methods</h3>


@foreach($gateways as $key=>$gateway)

    {!! BootForm::inlineCheckbox($gateway, 'gateways['.$key.']') !!}

    @endforeach
<br class="clear">
<button class="btn btn-primary">Save!</button>

@push('scripts')
<script src="{{elixir('/js/invoice.js')}}"></script>
@endpush
