@extends('layouts.register')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                <div class="card card-signup">

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="header header-primary text-center">
                            <h4>LOGIN</h4>
                            <div class="social-line">
                                <a href="#pablo" class="btn btn-simple btn-just-icon" data-toggle="tooltip" data-placement="top" title="Login with FACEBOOK">
                                    <i class="fa fa-facebook-square"></i>
                                    <p style="font-size: 10px">facebook</p>
                                </a>
                                <a href="#pablo" class="btn btn-simple btn-just-icon" data-toggle="tooltip" data-placement="top" title="Login with TWITTER">
                                    <i class="fa fa-twitter"></i>
                                    <p style="font-size: 10px">twitter</p>
                                </a>
                                <a href="#pablo" class="btn btn-simple btn-just-icon" data-toggle="tooltip" data-placement="top" title="Login with GOOGLE">
                                    <i class="fa fa-google-plus"></i>
                                    <p style="font-size: 10px">google</p>
                                </a>
                            </div>
                        </div>


                        <p class="text-divider">Or go old school...</p>
                        <div class="content">

                            <div class="input-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                                <span class="input-group-addon">
                                                    <i class="material-icons">email</i>
                                                </span>
                                <input id="email" name="email" type="email" class="form-control" placeholder="Email..." value="{{old('email')}}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                @endif
                            </div>

                            <div class="input-group{{ $errors->has('password') ? 'has-error' : ''}} "  style="float:left">
                                    <span class="input-group-addon">
                                        <i class="material-icons">lock_outline</i>
                                    </span>
                                <input id="password" type="password" name="password" placeholder="Password..." class="form-control" required />

                                @if ($errors->has('password'))
                                    <span class="help-block text-center">
                                            <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif


                            </div>


                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember"> Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary">
                                        Login
                                    </button>

                                    <a class="" href="{{ url('/password/reset') }}">
                                        Forgot Your Password?
                                    </a>
                                </div>
                            </div>


                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
