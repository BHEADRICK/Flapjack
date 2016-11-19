
<div class="form-group">
    <label for="client_id" class="control-label">Client</label>
    <select name="client_id" v-model="client_id" id="client_id" class="form-control" required>
        <option value="0" >Select client</option>
        <option v-bind:value="client.id" v-for="client in clients">@{{displayClient(client)}}</option>
    </select></div>
<button>add Client</button>

<input type="hidden" id="client_id_value" value="{{$invoice->client_id}}">
<input type="hidden" id="project_id_value" value="{{$invoice->project_id}}">

<div class="form-group">
    <label for="project_id" class="control-label">Project</label>
    <select name="project_id" v-model="project_id" id="project_id" class="form-control">
        <option value="0">No Project</option>
        <option v-bind:value="project.id" v-for="project in projects">@{{ project.name }}</option>
    </select></div>



{!! BootForm::text( 'Invoice #','invoice_number') !!}

{!! BootForm::date('Date of Creation','date_entered') !!}

{!! BootForm::select( 'Currency','currency')->options(['0'=>'United States Dollar']) !!}

{!! BootForm::select( 'Show in client area?','is_viewable')->options(['0'=>'No', '1'=>'Yes']) !!}

{!! BootForm::select('Auto Send?','auto_send')->options(['0'=>'No', '1'=>'Yes']) !!}

{!! BootForm::select('Recurring?','is_recurring' )->options(['0'=>'No', '1'=>'Yes']) !!}
<h3>Charge When due</h3>

<p>There are no saved payment details for this client, so wec cannot auto-charge. The client has to pay you through Stripe at least once in order to save their payment details.</p>