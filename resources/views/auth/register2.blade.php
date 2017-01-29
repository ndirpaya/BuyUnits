@extends('layouts.register')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
                <div class="card card-signup">
                    <form class="form" method="POST" action="{{ url('/register') }}">
                        {{--{{ csrf_field() }}--}}
                        <div class="header header-primary text-center">
                            <h4>Sign Up</h4>
                            <div class="social-line">
                                <a href="#pablo" class="btn btn-simple btn-just-icon" data-toggle="tooltip" data-placement="top" title="Sign Up with FACEBOOK">
                                    <i class="fa fa-facebook-square"></i>
                                    <p style="font-size: 10px">facebook</p>
                                </a>
                                <a href="#pablo" class="btn btn-simple btn-just-icon" data-toggle="tooltip" data-placement="top" title="Sign Up with TWITTER">
                                    <i class="fa fa-twitter"></i>
                                    <p style="font-size: 10px">twitter</p>
                                </a>
                                <a href="#pablo" class="btn btn-simple btn-just-icon" data-toggle="tooltip" data-placement="top" title="Sign Up with GOOGLE">
                                    <i class="fa fa-google-plus"></i>
                                    <p style="font-size: 10px">google</p>
                                </a>
                            </div>
                        </div>
                        <p class="text-divider">Or go old school...</p>
                        <div class="content">

                            <div>
                                <div class="input-group col-md-6" style="float:left">
										<span class="input-group-addon">
											<i class="material-icons">face</i>
										</span>
                                    <input id="first_name" name="first_name" type="text" class="form-control" placeholder="First Name...">
                                </div>

                                <div class="input-group col-md-6" style="float:right">
                                            <span class="input-group-addon">
                                                <i class="material-icons">face</i>
                                            </span>
                                    <input id="last_name" name="last_name" type="text" class="form-control" placeholder="Last Name...">
                                </div>


                            </div>


                            <div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">email</i>
										</span>
                                <input id="email" name="email" type="email" class="form-control" placeholder="Email...">
                            </div>

                        <div>
                            <div class="input-group col-md-6"  style="float:left">
										<span class="input-group-addon">
											<i class="material-icons">lock_outline</i>
										</span>
                                <input id="password" type="password" placeholder="Password..." class="form-control" />
                            </div>

                            <div class="input-group col-md-6"  style="float:right">
										<span class="input-group-addon">
											<i class="material-icons">lock_outline</i>
										</span>
                                <input id="password-confirm" type="password" placeholder="Confirm Password" class="form-control" />
                            </div>

                        </div>

                            <!-- If you want to add a checkbox to this form, uncomment this code

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="optionsCheckboxes" checked>
                                    Subscribe to newsletter
                                </label>
                            </div> -->
                        </div>
                        <div class="footer text-center">
                            <button type="submit" class="btn btn-primary btn-lg">Sign Up</button>
                            {{--<a type="submit" class="btn btn-simple btn-primary btn-lg">Sign Up</a>--}}
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection