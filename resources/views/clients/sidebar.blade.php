
<div class="panel">
    <div class="panel heading">
        <h4 class="sidebar-title">Quick Links</h4>

    </div>
    <div class="panel-body">
        <ul class="side-bar-btns">
            <li>
                <i class="quicklink-icon fa fa-plus"></i>
                <a class="not-has-before " href="/admin/projects/create/{{$client->id}}">
                    <span>Create Project</span>
                </a>
            </li>
            <li>
                <i class="quicklink-icon fi-page-add"></i>
                <a class="not-has-before " href="/admin/invoices/client/{{$client->id}}">
                    <span>Create Invoice</span>
                </a>
            </li>
            <li>
                <i class="quicklink-icon fi-page-add"></i>
                <a class="not-has-before " href="/admin/estimates/client/{{$client->id}}">
                    <span>Create Estimate</span>
                </a>
            </li>
            <li>
                <i class="quicklink-icon fi-page-add"></i>
                <a class="not-has-before " href="/admin/credit_notes/client/{{$client->id}}">
                    <span>Create Credit Note</span>
                </a>
            </li>
            <li>
                <i class="quicklink-icon fi-pricetag-multiple"></i>
                <a class="not-has-before " href="/admin/invoices/make_bulk_payment/{{$client->id}}">
                    <span>Make Multiple Payments</span>
                </a>
            </li>
            <li>
                <i class="quicklink-icon fi-pencil"></i>
                <a class="not-has-before " href="/admin/clients/{{$client->id}}/edit">
                    <span>Edit Client</span>
                </a>
            </li>
            <li>
                <i class="quicklink-icon fi-mail"></i>
                <a class="not-has-before " href="/admin/clients/{{$client->id}}/send_client_area_email">
                    <span>Send Client Area Details</span>
                </a>
            </li>
            <li>
                <i class="quicklink-icon fi-trash"></i>
                <a class="not-has-before " href="/admin/clients/{{$client->id}}/delete">
                    <span>Delete Client</span>
                </a>
            </li>
        </ul>
    </div>

</div>
<div class="panel" style="margin-top: -2em;">
    <div class="panel-body">
    <div class="row">
        <div class="col-lg-12 mobile-two">
            <h5>Credit Balance</h5>
            <p class="f-thin-black client-balance no-bottom" data-symbol="$"><span class="js-balance-amount">$ {{$client->balance}}</span> <a href="/admin/clients/edit_balance/13" class="fire-ajax"><i class="fi fi-pencil"></i></a></p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 mobile-two">
            <h5>Overdue</h5>
            <p class="f-thin-red no-bottom">$ {{$client->overdue}}</p>
        </div><!-- /six overdue -->

        <div class="col-lg-6 mobile-two">
            <h5>Unpaid</h5>
            <p class="f-thin-black no-bottom">$ {{$client->unpaid}}</p>
        </div><!-- /six overdue -->
    </div><!-- /row -->

    <div class="row">
        <div class="col-lg-6 mobile-two">
            <h5>Paid</h5>
            <p class="f-thin-black no-bottom">$ {{$client->paid}}</p>
        </div><!-- /six overdue -->

        <div class="col-lg-6 mobile-two">
            <h5>Expenses</h5>
            <p class="f-thin-black no-bottom">$ {{$client->expenses}}</p>
        </div><!-- /six overdue -->
    </div><!-- /row -->
    </div>
</div>
<div class="panel">
    <div class="panel-heading">
    <h4 class="sidebar-title">Client Access Area</h4></div>
<div class="panel-body">
    <div id="cas-url-holder">
        <p class="text">This is the url to send to your client to allow them to access the client access area where they can view items, such as projects and invoices, that you have made viewable.</p>
        <p class="urlToSend"><strong>Client access url</strong> <br> <a href="/client_area/MDxXl93T" class="url-to-send">/client_area/{{$client->unique_id}}</a></p>
        {{--<p><a href="#" id="copy-to-clipboard" class="blue-btn"><span>Copy to clipboard</span></a><div class="zclip" id="zclip-ZeroClipboardMovie_1" style="position: absolute; left: 35px; top: 890px; width: 151px; height: 36px; z-index: 99;"><embed id="ZeroClipboardMovie_1" src="/third_party/themes/admin/pancake/js/ZeroClipboard.swf?4129" loop="false" menu="false" quality="best" bgcolor="#ffffff" width="151" height="36" name="ZeroClipboardMovie_1" align="middle" allowscriptaccess="always" allowfullscreen="false" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" flashvars="id=1&amp;width=151&amp;height=36" wmode="transparent"></div></p>--}}

        <p class="passphrase set no-bottom">Passphrase: <span>{{$client->passphrase}}</span></p>
    </div><!-- /cas-url-holder -->
</div>
</div>