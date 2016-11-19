<li class="list-group-item col-lg-4">
    <div class="project-box" >
        <h5 class="name"><a href="/admin/projects/{{$project->id}}">{{$project->name}}</a></h5>
        <p class="half-bottom">
           <i class="fa fa-user-o"></i>
          {{$client->company}}      </p>
        <p><i class="fa fa-calendar-o" aria-hidden="true"></i>{{$project->date_entered}}</p>

        <!-- Assigned area for members/clients linked to the projects here -->
        <span class="members-assigned">


	        </span>
    </div><!-- project box -->
    <div class="project-footer">
        <span class="pull-left">  <strong>Tracked:</strong> {{$project->tracked}}</span>

        <ul class="invoice-buttons nav pull-right">

            <li class="settings dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-cog fa-1x"></i>  </a>
                <ul class="dropdown-menu">
                    <li><a href="/admin/projects/{{$project->id}}/edit" class="fire-ajax no-bottom">Edit</a></li>

                    <li><a href="/admin/projects/{{$project->id}}/archive">Archive Project</a></li>
                    <li><a title="Project Settings" href="/admin/invoices/create/{{$project->id}}">Create Invoice</a></li>
                </ul>
            </li>
        </ul>

        <!-- Project Percentage of Tasks -->
        <div class="percent project_na">{{$project->percent}}</div>
    </div><!-- "" -->
</li>