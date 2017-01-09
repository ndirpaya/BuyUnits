@extends('layouts.profile')

@section('content')

    <div class="text-center">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h2 class="title">New Transaction</h2>
            </div>
        </div>
    </div>

    <div class="row" style="padding-bottom: 50px">
        <div class="col-md-4">
            @include('layouts.sidebar')

        </div>


        <div class="col-md-8">

            <!-- Tabs with icons on Card -->
            <div class="card" style="margin-bottom: 20px;">

                <div class="header header-primary text-center" style="height:70px;">
                    <h4>Transaction Details</h4>
                </div>

                <div class="content">
                    <div>
                        {{--<form class="form">--}}
                        {!! Form::open(['method'=>'POST', 'action'=> 'UserTransactionsController@store']) !!}

                            <div class="form-group label-floating">
                                {!! Form::label('meter_number', 'Meter Number', ['class'=>'control-label']) !!}
                                {!! Form::text('meter_number', null, ['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group label-floating">
                                {!! Form::label('amount', 'Amount: ', ['class'=>'control-label']) !!}
                                {!! Form::text('amount', null, ['class'=>'form-control']) !!}
                            </div>

                            <div class="row">
                                <div class="col-md-4 col-md-offset-4 text-center">
                                    {!! Form::submit('Buy Units', ['class' => 'btn btn-success btn-raised btn-lg']) !!}
                                </div>
                            </div>

                        {{--</form>--}}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>

            <!-- Tabs with icons on Card -->
            <div class="card">

                <div class="content">
                    <div>
                        <p>NOTE: A Convinience fee of N100 will be charged </p>
                    </div>
                </div>
            </div>


@stop