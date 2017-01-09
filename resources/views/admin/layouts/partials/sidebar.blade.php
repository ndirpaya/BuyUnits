<div class="sidebar">
    <div class="logopanel">
        <h1>
            <a href="dashboard.html"></a>
        </h1>
    </div>
    <div class="sidebar-inner">
        <div class="sidebar-top">
            <form action="#" method="post" class="searchform" id="search-results">
                <input type="text" class="form-control" name="keyword" placeholder="Search here...">
            </form>
            <div class="userlogged clearfix">
                <i class="icon icons-faces-users-01"></i>
                <div class="user-details">
                    <h4>{{ Auth::guard('admin_user')->user()->first_name}} {{ Auth::guard('admin_user')->user()->last_name}}</h4>
                    <div class="dropdown user-login">
                        <button class="btn btn-xs dropdown-toggle btn-rounded" type="button" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" data-delay="300">
                            <i class="online"></i><span>Available</span><i class="fa fa-angle-down"></i>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="#"><i class="busy"></i><span>Busy</span></a></li>
                            <li><a href="#"><i class="turquoise"></i><span>Invisible</span></a></li>
                            <li><a href="#"><i class="away"></i><span>Away</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-title">
            Navigation
            <div class="pull-right menu-settings">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" data-delay="300">
                    <i class="icon-settings"></i>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="#" id="reorder-menu" class="reorder-menu">Reorder menu</a></li>
                    <li><a href="#" id="remove-menu" class="remove-menu">Remove elements</a></li>
                    <li><a href="#" id="hide-top-sidebar" class="hide-top-sidebar">Hide user &amp; search</a></li>
                </ul>
            </div>
        </div>
        <ul class="nav nav-sidebar">
            <li class=" nav-active active"><a href="{{ url('admin/dashboard')}}"><i class="icon-home"></i><span>Dashboard</span></a></li>

            <li class="nav-parent">
                <a href=""><i class="icon-user"></i><span>Customers </span><span class="fa arrow"></span></a>
                <ul class="children collapse">
                    <li><a href="{{ url('/admin/customers') }}">All Customers</a></li>
                    <li><a href="{{ url('/admin/customers/create') }}">Add Customer</a></li>
                </ul>
            </li>


            <li class="nav-parent">
                <a href=""><i class="icon-user"></i><span>Admin Users </span><span class="fa arrow"></span></a>
                <ul class="children collapse">
                    <li><a href="{{ url('/admin/users') }}">Admin Users</a></li>
                    <li><a href="{{ url('/admin/users/create') }}">Add Admin User</a></li>
                </ul>
            </li>


            <li class="nav-parent">
                <a href=""><i class="icon-layers"></i><span>Transactions </span><span class="fa arrow"></span></a>
                <ul class="children collapse">
                    <li><a href="{{ url('/admin/transactions') }}">All Transactions</a></li>
                    <li><a href="{{ url('/admin/users/create') }}">New Transaction</a></li>
                </ul>
            </li>


        </ul>
        <!-- SIDEBAR WIDGET FOLDERS -->
        <div class="sidebar-widgets">
            <p class="menu-title widget-title">Statistics <span class="pull-right"><a href="#" class="hide-widget"> <i class="icons-office-52"></i></a></span></p>
            <div class="charts-sidebar progress-chart">
                <div class="sidebar-charts-inner">
                    <div class="progress visible">
                        <progress class="progress-bar-primary stat1" value="82" max="100"></progress>
                        <div class="progress-info">
                            <span class="progress-name sidebar-chart-title">Stat 1</span>
                            <span class="progress-value">82%</span>
                        </div>
                    </div>
                </div>
                <div class="sidebar-charts-inner">
                    <div class="progress visible">
                        <progress class="progress-bar-primary stat2" value="43" max="100"></progress>
                        <div class="progress-info">
                            <span class="progress-name sidebar-chart-title">Stat 2</span>
                            <span class="progress-value">43%</span>
                        </div>
                    </div>
                </div>
                <div class="sidebar-charts-inner">
                    <div class="progress visible">
                        <progress class="progress-bar-primary stat3" value="93" max="100"></progress>
                        <div class="progress-info">
                            <span class="progress-name sidebar-chart-title">Stat 3</span>
                            <span class="progress-value">93%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sidebar-footer clearfix">
            <a class="pull-left footer-settings" href="#" data-rel="tooltip" data-placement="top" data-original-title="Settings">
                <i class="icon-settings"></i></a>
            <a class="pull-left toggle_fullscreen" href="#" data-rel="tooltip" data-placement="top" data-original-title="Fullscreen">
                <i class="icon-size-fullscreen"></i></a>
            <a class="pull-left" href="user-lockscreen.html" data-rel="tooltip" data-placement="top" data-original-title="Lockscreen">
                <i class="icon-lock"></i></a>
            <a class="pull-left btn-effect" href="user-login-v1.html" data-modal="modal-1" data-rel="tooltip" data-placement="top" data-original-title="Logout">
                <i class="icon-power"></i></a>
        </div>
    </div>
</div>