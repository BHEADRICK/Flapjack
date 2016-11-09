@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
{!! BootForm::open() !!}
            {!! Bootform::bind($invoice) !!}
                <div class="col-lg-9">
                    @include('layouts._invoice_form')

                </div>
            <div class="col-lg-3">
                @include('layouts._invoice_sidebar')

            </div>
            {!! BootForm::close() !!}
                </div>


        </div>
    </div>
@endsection