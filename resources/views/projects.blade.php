@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

             <div class="col-lg-9">
                    <h1>All Projects</h1>

                    <ul class="list-group">

                        @foreach($projects as $project)

                            @include('projects/card', [$project])
                            @endforeach


                    </ul>
                </div>
            <div class="col-lg-3">
                @include('projects.sidebar')
            </div>
        </div>

        </div>
    </div>

@endsection

@push('scripts')
{{--<script src="{{elixir('/js/clients.js')}}"></script>--}}
@endpush