<li class="list-group-item panel panel-info">

    <div class="client-info panel-body row">
        <div class="col-lg-10">
            {{--<img src="https://secure.gravatar.com/avatar/f9e33fbe9ebb1dfc39dae2ef5686327d?s=50&amp;d=mm&amp;r=g" class="client-user-pic">--}}
            <div style="margin-left: 70px;">
                <span class="f-thin-black"><a href="/admin/clients/{{$client->id}}">{{$client->display_name}}</a></span>

                <br>

                <span class="contact address"></span> <span class="contact-text"><a href="/client_area/{{$client->unique_id}}">Client Area</a></span>

                <span class="contact email">Email</span> <span class="contact-text"><a href="mailto:{{$client->email}}">{{$client->email}}</a></span>
                <br>


            </div>
        </div><!-- /ten -->
        <div class="col-lg-2 projects mobile-one">
            Projects <br>
            <span class="project-count">{{count($client->projects)}}</span>
        </div><!-- /two -->
    </div><!-- /client-info-->

    <div class="client-extra row panel-footer">
        <div class="col-lg-3 mobile-one"><strong>Unpaid:</strong> ${{$client->unpaid}}</div>
        <div class="col-lg-3 mobile-one"><strong>Paid</strong> $ {{$client->paid}}</div>
        <div class="col-lg-3 mobile-one">
            <div class="healthCheck">
                <span class="healthBar"><span class="paid" style="width:90.91%"></span></span>
            </div><!-- /healthCheck -->
        </div><!-- /three -->
        <div class="pull-right mobile-one">
            <a href="/admin/clients/{{$client->id}}/delete" class="icon delete" title="Delete"><i class="fa fa-2x fa-trash"></i></a>
            <a href="/admin/clients/{{$client->id}}/edit" class="icon edit" title="Edit"><i class="fa fa-2x fa-pencil-square-o"></i></a>        </div><!-- /three-->
    </div><!-- /client-exra-->
</li>