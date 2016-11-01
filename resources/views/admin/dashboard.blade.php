@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

                <div class="panel panel-default">
                    <h3 class="panel-heading">Dashboard</h3>

                    <div class="panel-body">
                       <div class="col-lg-12">
                           <div class="row">
                               <div class="col-lg-6">
                                   <h3 class="dashboard-title">Today</h3>
                                   <div class="task-title-container">

                                   </div>
                               </div>
                               <div class="col-lg-3">
                                   <h3 class="dashboard-title">Your Projects</h3>
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