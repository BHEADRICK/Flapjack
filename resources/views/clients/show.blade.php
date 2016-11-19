@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
             <div class="col-lg-9">
                 <div id="header">
                     <h1>{{$client->company}}</h1>
                 </div>
             </div>
                <div class="row">
                    <div class="client-contact pull-left">

                        <span class="contact email">Email:</span> <span class="contact-text"><a href="mailto:{{$client->email}}">{{$client->email}}</a></span>
                        <br>    <br>


                    </div>
                </div>
                <div class="row">
            <h3>active Projects</h3>
                    <ul class="list-group">
                        @foreach($client->active_projects as $project)
                            @include('clients.project_card', [$client, $project])

                            @endforeach
                    </ul>
                </div>
                <div class="row">
                    <h3>Archived Projects</h3>
                    <ul class="list-group">
                        @foreach($client->archived_projects as $project)
                            @include('clients.project_card', [$client, $project])
                            @endforeach

                    </ul>
                </div>
                <div class="row">
                    <h3>Overdue Invoices</h3>
                </div>
                <div class="row">
                    <h3>Paid Invoices</h3>
                </div>


                </div>
            <div class="col-lg-3">
               @include('clients.sidebar', [$client])
            </div>
        </div>

        </div>
    </div>

@endsection

@push('scripts')
{{--<script src="{{elixir('/js/clients.js')}}"></script>--}}
@endpush