<div class="col-lg-4 projectItem panel" style="">
    <div class="project-box panel-body" id="project-{{$project->id}}">
        <h5 class="name"><a href="/admin/projects/144">{{$project->name}}</a></h5>
        <p class="half-bottom">
            <span class="glyphicon glyphicon-user fa fa-user"></span>
            {{$project->client->company}}	        </p>
        <p><span class="glyphicon glyphicon-calendar fa fa-calendar"></span> 11/09/2016</p>

        <!-- Assigned area for members/clients linked to the projects here -->
        <span class="members-assigned">


	        </span>
    </div><!-- project box -->
    <div class="project-footer panel-footer">
      <span>   <label>Tracked:</label> {{$project->tracked}}         </span>                <ul class="invoice-buttons nav navbar-nav">
            <li class="settings dropdown">
                <a href="#" class="dropdown-toggle"><span class="glyphicon glyphicon-cog fa fa-cog"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="/admin/projects/{{$project->id}}/edit" class="fire-ajax no-bottom">Edit</a></li>

                    <li><a href="/admin/projects/{{$project->id}}/archive">Archive Project</a></li>
                    <li><a title="Project Settings" href="/admin/invoices/create/{{$project->id}}">Create Invoice</a></li>
                </ul>
            </li>
        </ul>

        <!-- Project Percentage of Tasks -->
      
    </div><!-- "" -->
</div>