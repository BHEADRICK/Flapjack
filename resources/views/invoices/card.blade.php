<li class="invoice-container list-group-item" style="overflow:auto">
    <div class="invoice-item add-bottom" id="invoice_FaBkFOC4">
        <div class="col-lg-9 invoice-body overdue">
            <div class="row">
                <div class="col-lg-3 mobile-four">


                    <span class="invoice-banner {{snake_case($invoice->status. ' '. snake_case($invoice->status)=='paid'?'alert alert-success':snake_case($invoice->status)=='overdue'?'alert alert-danger':'')}}">{{$invoice->status}}</span>

                </div><!-- /three -->

                <div class="col-lg-9 mobile-four">
                    <h4 class="half-bottom">


                                <span class="invoice-client">
        invoice                                    <a
                                            href="/admin/invoices/edit/{{$invoice->unique_id}}">#{{$invoice->id}}</a></span>

                        <span class="invoice-company">(<a class="color-inherit"
                                                          href="/admin/clients/view/{{$invoice->client->id}}">{{$invoice->client->display_name}}</a>)</span>
                        <div class="invoice-details">
                            Last viewed by the client on {{$invoice->last_viewed}}.<br>
                            Email: {{$invoice->client->email}}

                        </div>

                    </h4>
                    <p>
                        <small>{{$invoice->description}}</small>
                    </p>
                </div><!-- /ten -->
            </div><!-- /row -->

<nav class="navbar navbar-default navbar-fixed-bottom"></nav>
            <div class="row fixed-bottom">
                <div class="col-lg-3 col-sm-2">
                    <ul class="invoice-buttons nav navbar-nav">
                        <li><a href="/{{$invoice->unique_id}}" class="preview" title="View"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                        <li><a class="email" href="/admin/invoices/created/{{$invoice->unique_id}}"
                               title="Email invoice To Client"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
                        <li><a class="settings" href="#"><i class="fa fa-cog" aria-hidden="true"></i></a>
                            <ul class="settings-dropdown dropdown-menu more-actions">
                                <li><a href="/pdf/{{$invoice->unique_id}}">View PDF</a></li>
                                <li><a href="/admin/invoices/edit/{{$invoice->unique_id}}">Edit</a></li>
                                <li><a href="/admin/invoices/archive/{{$invoice->unique_id}}" class="" title="Archive">Archive</a>
                                </li>

                                <li><a href="#" class="add_payment"
                                       data-invoice-unique-id="{{$invoice->unique_id}}"><span>Add Payment</span></a>
                                </li>

                                <li><a href="#" class="partial-payment-details invoice_{{$invoice->unique_id}} key_1"
                                       data-details="1" data-invoice-unique-id="{{$invoice->unique_id}}"><span>Mark as Paid</span></a>
                                </li>


                                <li><a href="/admin/invoices/duplicate/{{$invoice->unique_id}}">Duplicate</a></li>


                                <li><a href="/admin/invoices/convert_to_invoice/{{$invoice->unique_id}}">Convert to
                                        Estimate</a></li>

                                <li><a href="/admin/invoices/delete/{{$invoice->unique_id}}" title="Delete">Delete</a>
                                </li>
                            </ul>
                        </li><!-- settings column-->
                    </ul>
                </div><!-- /two -->

                <div class="col-lg-9 col-sm-4 invoice-total">
                    <div style="float: right;">
                                                                                                                                                                                <span class="invoice-unpaid">
                                                Unpaid: $  150.00                                            </span>
                    </div>

                    <div style="float: left;">
                        Total: $ {{$invoice->amount}}               </div>
                </div>

            </div><!-- /row-->
            </nav>
        </div><!-- /invoice-item -->
        <div class="col-lg-3 col-sm-4 invoice-outstanding">
            <div>

                <p class="no-bottom">
                    <small>Due: 11/04/2016</small>
                </p>

                <span class="total-amount half-bottom">
                            $ {{$invoice->amount}}                   </span>

                <p class="no-bottom">
                    <small>
                        Sent on {{$invoice->last_sent}}


                    </small>
                </p>
            </div>
        </div><!-- /total-->
    </div><!-- /row -->
</li>
<br class="clear">