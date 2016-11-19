@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

             <div class="col-lg-9">
                    <h1>clients</h1>

                    <ul class="list-group">

                        @foreach($clients as $client)

                            @include('clients/card', [$client])
                            @endforeach


                    </ul>
                </div>
            <div class="col-lg-3">
                @include('clients.sidebar')
            </div>
        </div>

        </div>
    </div>

@endsection

@push('scripts')
{{--<script src="{{elixir('/js/clients.js')}}"></script>--}}
@endpush