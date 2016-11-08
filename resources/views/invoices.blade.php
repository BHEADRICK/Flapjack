@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

             <div class="col-lg-12"></div>
                    <h1>All Invoices</h1>

                    <ul class="list-group">

                        @foreach($invoices as $invoice)

                            @include('invoices/card', [$invoice])
                            @endforeach


                    </ul>
                </div>

        </div>
    </div>
@endsection