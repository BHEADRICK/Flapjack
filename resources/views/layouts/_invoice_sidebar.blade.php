
{!! BootForm::select( 'Client', 'client_id')->options([]) !!}
<button>add Client</button>


{!! BootForm::select('Project','project_id')->options([]) !!}

{!! BootForm::text( 'Invoice #','invoice_number') !!}

{!! BootForm::date('Date of Creation','date_entered') !!}

{!! BootForm::select( 'Currency','currency')->options(['0'=>'United States Dollar']) !!}

{!! BootForm::select( 'Show in client area?','is_viewable')->options(['0'=>'No', '1'=>'Yes']) !!}

{!! BootForm::select('Auto Send?','auto_send')->options(['0'=>'No', '1'=>'Yes']) !!}

{!! BootForm::select('Recurring?','is_recurring' )->options(['0'=>'No', '1'=>'Yes']) !!}
<h3>Charge When due</h3>

<p>There are no saved payment details for this client, so wec cannot auto-charge. The client has to pay you through Stripe at least once in order to save their payment details.</p>