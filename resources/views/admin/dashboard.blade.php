@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

                <div class="panel panel-default">
                    <h3 class="panel-heading">Dashboard</h3>

                    <div class="panel-body">
                       <div class="col-lg-12">
                           <div class="row">
                               <div class="col-lg-6" id="taskList">
                                   <h3 class="dashboard-title">Today</h3>
                                   <div class="task-title-container list-group">

                                       <div class="row list-group-item" v-for="task in tasks">
                                           <div class="one complete-checkbox-container columns " style="text-align:center ">
                                               <a href="#" v-bind:title=" task.name " class="task-checkmark complete-check " style="font-size: 1.5em; color:#ccc;" data-task-id="335"><i class="fa check-open"></i></a>
                                           </div><!-- /one columns -->

                                           <div class=" seven task-title-container columns">
                                               <p class="no-bottom" style="font-size: 1.2em; margin:0">




                                                   <span class="js-task-complete-status task-name incomplete">@{{ task.name }} <small>@{{ task.project.name }}</small></span></p>

                                           </div><!-- /six columns -->
                                           <div class="three columns">
                <span class="task-info">
                            <span class="task-timer timer js-processed-timer" data-task-id="335" data-is-paused="0" data-current-seconds="0" data-last-modified-timestamp="0" data-start="Start Timer" data-stop="Stop Timer">
                                <span class="track-time" data-task-id="335" data-project-id="143" data-time-start="">
                                    <span class="time time-ticker timer-time">00:00:00</span>
                                    <a href="#" class="play timer-button" title="Start" data-start="Start" data-stop="Stop"><i class="fi-play"></i><i class="fi-pause"></i></a>
                                    <a href="#" class="stop timer-button" title="Stop"><i class="fi-stop"></i></a>
                                </span>
                            </span>

                </span>



                                           </div><!-- /three columns -->

                                           <div class="one columns">
                                               <a href="#" data-task-note="task-note-335" class="task-toggle"><i class="fa fa-chevron-down"></i></a>
                                           </div>

                                       </div>
                                   </div>
                               </div>
                               <div class="col-lg-3">
                                   <h3 class="dashboard-title">Your Projects</h3>
                                <div class="projects-container list-group">
                                   <div class="row list-group-item" style="margin-bottom: 1em;" v-for="project in projects">
                                       <div class="col-lg-12">
                                           <p style="margin:0; padding:0; font-size: 1.2em; line-height: 1.2em"><a href="#">@{{ project.name }}</a></p>
                                           <p style="margin: 0"><i>@{{ project.client.first_name + ' ' + project.client.last_name + ' - ' + project.client.company }}</i></p><i>
                                           </i></div><!-- /eight columns --><i>

                                       </i></div>
                               </div>
                               </div>
                               <div class="col-lg-3"><h3 class="dashboard-title">Updates</h3></div>
                           </div>
                       </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-4"> <div class="panel panel-default">
                                <h3 class="dashboard-title">Outstanding Invoices</h3>
                                <ul class="activity list-group">
                                    <li class="activity-invoice-viewed list-group-item" v-for="invoice in invoices">
                                        #<a href="#" class="email" title="Send to client">@{{ invoice.id }}</a>    @{{  invoice.client.first_name + ' ' + invoice.client.last_name + ' - ' + invoice.client.company }}              <span style="color: #CA6040;">$  @{{ invoice.amount }}</span><br>
                                        <i class="fa fa-calendar"></i> <strong>(some date)</strong> | Sent on (some date)            </li>
                                </ul>
                            </div></div>
                        <div class="col-lg-4"> <div class="panel panel-default">
                                <h3 class="dashboard-title">Client Activity</h3>
                            </div></div>
                        <div class="col-lg-4"> <div class="panel panel-default">
                                <h3 class="dashboard-title">Snapshot</h3>
                            </div></div>
                    </div>
                </div>

            </div>

    </div>
@endsection