@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

             <div class="col-lg-9">
                    <h1></h1>

                    <ul class="list-group">

                        @foreach($blanks as $blank)

                            @include('blank/card', [$blank])
                            @endforeach


                    </ul>
                </div>
            <div class="col-lg-3">
                @include('blank.sidebar')
            </div>
        </div>

        </div>
    </div>

@endsection

@push('scripts')
{{--<script src="{{elixir('/js/clients.js')}}"></script>--}}
@endpush