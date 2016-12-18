@extends('layouts.app')

@section('content')


    <div class="col-sm-3"></div>

    <div class="col-sm-6">


        <h1>Create Admin User</h1>

        {!! Form::open(['method'=>'POST', 'action'=> 'Admin\AdminUsersController@store']) !!}

        <div>
            <div class="form-group col-md-6">
                {!! Form::label('first_name', 'First Name:') !!}
                {!! Form::text('first_name', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group col-md-6">
                {!! Form::label('last_name', 'Last Name:') !!}
                {!! Form::text('last_name', null, ['class'=>'form-control']) !!}
            </div>

        </div>

        <div class="form-group">
            {!! Form::label('email', 'Email: ') !!}
            {!! Form::email('email', null, ['class'=>'form-control']) !!}
        </div>


        {{--<div class="form-group">--}}
            {{--{!! Form::label('status_id', 'Status: ') !!}--}}
            {{--{!! Form::select('status_id', [''=>'Choose Options'] + $statuses, null, ['class'=>'form-control']) !!}--}}
        {{--</div>--}}

        <div class="form-group">
            {!! Form::label('password', 'Password: ') !!}
            {!! Form::password('password', ['class'=>'form-control']) !!}
        </div>


        <div class="form-group">
            {!! Form::submit('Create User', ['class' => 'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}
    </div>


    <div class="col-sm-3"></div>


@stop