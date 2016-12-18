@extends('layouts.app')

@section('content')

    <h1>Edit Admin User</h1>

    <div class="col-sm-3"></div>

    <div class="col-sm-6">


        {!! Form::model($user, ['method'=>'PATCH', 'action'=> ['Admin\AdminUsersController@update', $user->id]]) !!}

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
            {!! Form::submit('Update User', ['class' => 'btn btn-primary col-sm-6']) !!}
        </div>

        {!! Form::close() !!}

        {{-- DELETE USER--}}
        {!! Form::open(['method'=>'DELETE', 'action'=> ['Admin\AdminUsersController@destroy', $user->id]]) !!}


        <div class="form-group">
            {!! Form::submit('Delete User', ['class' => 'btn btn-danger col-sm-6']) !!}
        </div>

        {!! Form::close() !!}


    </div>




    <div class="col-sm-3"></div>


@stop