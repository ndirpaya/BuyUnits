@extends('layouts.app')

@section('content')

    <h1>MY PROFILE</h1>

    {{-- PROFILE EDIT --}}
    <div class="col-lg-7">
        {!! Form::model($user, ['method'=>'PATCH', 'action'=> ['UserProfileController@updateDetails', $user->id]]) !!}

        <div class="form-group">
            {!! Form::label('first_name', 'First Name') !!}
            {!! Form::text('first_name', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('last_name', 'Last Name') !!}
            {!! Form::text('last_name', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('email', 'Email: ') !!}
            {!! Form::email('email', null, ['class'=>'form-control']) !!}
        </div>


        <div class="form-group">
            {!! Form::submit('Update Profile', ['class' => 'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}
    </div>

    {{--CHANGE PASSWORD--}}
    <div class="col-lg-5">
        {!! Form::model($user, ['method'=>'PATCH', 'action'=> ['UserProfileController@updateDetails', $user->id]]) !!}

        <div class="form-group">
            {!! Form::label('password', 'Password: ') !!}
            {!! Form::password('password', ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Update Password', ['class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}
    </div>
@stop