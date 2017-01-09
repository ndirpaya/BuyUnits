@extends('layouts.profile')

@section('content')


    <div class="text-center">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h2 class="title">My Profile</h2>
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
                    <h4>Update Information</h4>
                </div>
                <div class="content">

                    {!! Form::model($user, ['method'=>'PATCH', 'action'=> ['UserProfileController@updateDetails', $user->id]]) !!}
                    {{--<form class="form">--}}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group label-floating">
                                    {!! Form::label('first_name', 'First Name', ['class'=>'control-label']) !!}
                                    {!! Form::text('first_name', null, ['class'=>'form-control']) !!}
                                    {{--<span class="material-input"></span>--}}
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-group label-floating">
                                    {!! Form::label('last_name', 'Last Name', ['class'=>'control-label']) !!}
                                    {!! Form::text('last_name', null, ['class'=>'form-control']) !!}
                                    {{--<span class="material-input"></span>--}}
                                </div>
                            </div>
                    </div>

                        {{--<div class="form-group label-floating is-empty">--}}
                            {{--<label class="control-label">Phone Number</label>--}}
                            {{--<input type="text" class="form-control">--}}
                            {{--<span class="material-input"></span>--}}
                        {{--</div>--}}

                    <div class="form-group label-floating">
                        {!! Form::label('email', 'Email', ['class'=>'control-label']) !!}
                        {!! Form::text('email', null, ['class'=>'form-control']) !!}
                        {{--<span class="material-input"></span>--}}
                    </div>

                        <div class="row">
                            <div class="col-md-4 col-md-offset-4 text-center">
                                <button class="btn btn-primary btn-raised btn-lg">
                                    Update Profile
                                </button>
                            </div>
                        </div>
                    {{--</form>--}}
                    {!! Form::close() !!}
                </div>
            </div>



            <!-- Tabs with icons on Card -->
            <div class="card">

                <form class="form" method="" action="">
                    <div class="header header-primary text-center" style="height:70px;">
                        <h4>Change Password</h4>
                    </div>
                    <div class="content">

                        <div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">lock_outline</i>
										</span>
                            <div class="form-group is-empty"><input type="password" placeholder="Old Password..." class="form-control"><span class="material-input"></span></div>
                        </div>

                        <div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">lock_outline</i>
										</span>
                            <div class="form-group is-empty"><input type="password" placeholder="New Password..." class="form-control"><span class="material-input"></span></div>
                        </div>

                        <div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">lock_outline</i>
										</span>
                            <div class="form-group is-empty"><input type="password" placeholder="Confirm New Password..." class="form-control"><span class="material-input"></span></div>
                        </div>

                        <!-- If you want to add a checkbox to this form, uncomment this code

                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="optionsCheckboxes" checked>
                                Subscribe to newsletter
                            </label>
                        </div> -->
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-md-offset-4 text-center">
                            <button class="btn btn-primary btn-raised btn-lg">
                                Change Password
                            </button>
                        </div>
                    </div>
                </form>

            </div>

        </div>




@stop