<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('img/favicon.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    {{--<!-- CSRF Token -->--}}
    {{--<meta name="csrf-token" content="{{ csrf_token() }}">--}}


    <title>Profile Page - @yield('title')</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <!-- CSS Files -->
    {{--<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" />--}}
    {{--<link href="{{asset('css/material-kit.css')}}" rel="stylesheet"/>--}}

    <!-- CSS Files -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet" />
    <link href="{{asset('css/material-kit.css')}}" rel="stylesheet"/>

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{asset('css/demo.css')}}" rel="stylesheet" />

</head>

<body class="profile-page">
<nav class="navbar navbar-transparent navbar-fixed-top navbar-color-on-scroll">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            {{-- LOGO AND BRAND NAME--}}
            <a href="{{ url('/') }}">
                <div class="logo-container">
                    <div class="logo">
                        <img src="{{asset('img/logo.png')}}" alt="Creative Tim Logo" rel="tooltip" title="<b>Material Kit</b> was Designed & Coded with care by the staff from <b>Creative Tim</b>" data-placement="bottom" data-html="true">
                    </div>
                    <div class="brand">
                        Buy
                        <br>Units
                    </div>


                </div>
            </a>

        </div>

        <div class="collapse navbar-collapse" id="navigation-example">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ url('/home') }}"><i class="material-icons">home</i>Home</a></li>
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <i class="material-icons">account_circle</i>{{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>

<div class="wrapper">
    <div class="header header-filter" style="background-image: url('{{asset('img/examples/city.jpg')}}');"></div>

    <div class="main main-raised">
        {{--<div class="profile-content">--}}
            <div class="container">

                @yield('content')

            </div>
        </div>
    </div>

</div>
<footer class="footer">
    <div class="container">
        <nav class="pull-left">
            <ul>
                <li>
                    <a href="http://www.techurve.com">
                        Techurve
                    </a>
                </li>
                <li>
                    <a href="http://jamesregler.com">
                        James Regler
                    </a>
                </li>
                <li>
                    <a href="http://blog.creative-tim.com">
                        Blog
                    </a>
                </li>
                <li>
                    <a href="http://www.creative-tim.com/license">
                        Licenses
                    </a>
                </li>
            </ul>
        </nav>
        <div class="copyright pull-right">
            &copy; 2016, made with <i class="fa fa-heart heart"></i>
        </div>
    </div>
</footer>


</body>


<!--   Core JS Files   -->
{{--<script src="{{asset('js/libs.js')}}"></script>--}}
{{--<script src="{{asset('js/jquery.min.js')}}" type="text/javascript"></script>--}}
{{--<script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>--}}
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/material.min.js')}}"></script>

{{--<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->--}}
<script src="{{asset('js/nouislider.min.js')}}" type="text/javascript"></script>

<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
<script src="{{asset('js/bootstrap-datepicker.js')}}" type="text/javascript"></script>

<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
<script src="{{asset('js/material-kit.js')}}" type="text/javascript"></script>

@yield('scripts')

</html>
