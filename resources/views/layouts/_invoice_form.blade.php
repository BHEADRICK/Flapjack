{!! BootForm::textarea('Description', 'description')->rows('4') !!}
<table>
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
    <tr><td>
            <table>
                <tr>
                    <td class="item-name">{!! BootForm::text('', 'invoice_item[name][]') !!}</td>
                    <td class="item-qty">{!! BootForm::text('', 'invoice_item[qty][]') !!}</td>
                    <td class="item-rate">{!! BootForm::text('', 'invoice_item[rate][]') !!}</td>
                    <td class="item-tax">{!! BootForm::select('', 'invoice_item[tax_id][]')->options(['wod']) !!} </td>
                    <td class="item-type">{!! BootForm::select('', 'invoice_item[item_type_id][]')->options(['word']) !!}</td>

                    <td class="item-discount">{!! BootForm::text('', 'invoice_item[discount][]') !!}</td>
                    <td class="item-cost">{!! BootForm::hidden('invoice_item[cost][]') !!}</td>
                    <td class="item-actions">blah</td>

                </tr>
                <tr>
                    <td class="item-description">
                    {!! BootForm::textarea('', 'invoice_item[description][]')->placeholder('description') !!}
                    </td>
                </tr>
            </table>
        </td></tr>
</table>
{!! BootForm::textarea('Notes', 'notes') !!}

<h3>Files</h3>
...


<h3>Payment Schedule</h3>

<div class="payment-details-container">
    <div class="partial-payment form-inline">
        {!! BootForm::text('', 'partial-amount[]') !!}
        {!! BootForm::select('', 'partial-is_percentage{]')->options([1=>'%', 0=>'$']) !!}
        {!! BootForm::date('', 'partial-Due_date[]') !!}
        {!! BootForm::text('', 'partial-notes') !!}
        <button type="submit" class="btn btn-default">Mark as Complete</button>
    </div>
</div>
<button class="btn btn-default">Add another part to the payment schedule</button>

<h3>Payment Methods</h3>


@foreach($gateways as $key=>$gateway)

    {!! BootForm::inlineCheckbox($gateway, 'gateways['.$key.']') !!}

    @endforeach
<br class="clear">
<button class="btn btn-primary">Save!</button>


