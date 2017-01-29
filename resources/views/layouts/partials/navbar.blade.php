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
                    <li>
                        <a href="{{ url('/logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fa fa-btn fa-sign-out"></i>
                            Logout</a>


                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>

                    </li>
                </ul>
            </li>

        @endif
    </ul>
</div>
