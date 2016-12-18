@extends('layouts.app')

@section('content')

    <h1>New Transaction</h1>

    <div class="col-sm-4"></div>

    <div class="col-sm-4">
        {!! Form::open(['method'=>'POST', 'action'=> 'UserTransactionsController@store']) !!}

        <div class="form-group">
            {!! Form::label('meter_number', 'Meter Number') !!}
            {!! Form::text('meter_number', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('amount', 'Amount: ') !!}
            {!! Form::text('amount', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Purchase', ['class' => 'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}

    </div>

    <div class="col-sm-4"></div>
@stop