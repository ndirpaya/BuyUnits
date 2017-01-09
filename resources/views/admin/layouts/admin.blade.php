<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="admin-themes-lab">
    <meta name="author" content="themes-lab">
    <link rel="shortcut icon" href="../assets/global/images/favicon.png" type="image/png">
    <title>Make Admin Template &amp; Builder</title>
    <link href="{{asset('make/global/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('make/global/css/theme.css')}}" rel="stylesheet">
    <link href="{{asset('make/global/css/ui.css')}}" rel="stylesheet">
    <link href="{{asset('make/md-layout2/material-design/css/material.css')}}" rel="stylesheet">
    <link href="{{asset('make/md-layout2/css/layout.css')}}" rel="stylesheet">
    <!-- BEGIN PAGE STYLE -->
    <link href="{{asset('make/global/plugins/metrojs/metrojs.min.css')}}" rel="stylesheet">
    <link href="{{asset('make/global/plugins/maps-amcharts/ammap/ammap.css')}}" rel="stylesheet">
    <!-- END PAGE STYLE -->
    <script src="{{asset('make/global/plugins/modernizr/modernizr-2.6.2-respond-1.1.0.min.js')}}"></script>
</head>
<!-- LAYOUT: Apply "submenu-hover" class to body element to have sidebar submenu show on mouse hover -->
<!-- LAYOUT: Apply "sidebar-collapsed" class to body element to have collapsed sidebar -->
<!-- LAYOUT: Apply "sidebar-top" class to body element to have sidebar on top of the page -->
<!-- LAYOUT: Apply "sidebar-hover" class to body element to show sidebar only when your mouse is on left / right corner -->
<!-- LAYOUT: Apply "submenu-hover" class to body element to show sidebar submenu on mouse hover -->
<!-- LAYOUT: Apply "fixed-sidebar" class to body to have fixed sidebar -->
<!-- LAYOUT: Apply "fixed-topbar" class to body to have fixed topbar -->
<!-- LAYOUT: Apply "rtl" class to body to put the sidebar on the right side -->
<!-- LAYOUT: Apply "boxed" class to body to have your page with 1200px max width -->

<!-- THEME STYLE: Apply "theme-sdtl" for Sidebar Dark / Topbar Light -->
<!-- THEME STYLE: Apply  "theme sdtd" for Sidebar Dark / Topbar Dark -->
<!-- THEME STYLE: Apply "theme sltd" for Sidebar Light / Topbar Dark -->
<!-- THEME STYLE: Apply "theme sltl" for Sidebar Light / Topbar Light -->

<!-- THEME COLOR: Apply "color-default" for dark color: #2B2E33 -->
<!-- THEME COLOR: Apply "color-primary" for primary color: #319DB5 -->
<!-- THEME COLOR: Apply "color-red" for red color: #C9625F -->
<!-- THEME COLOR: Apply "color-green" for green color: #18A689 -->
<!-- THEME COLOR: Apply "color-orange" for orange color: #B66D39 -->
<!-- THEME COLOR: Apply "color-purple" for purple color: #6E62B5 -->
<!-- THEME COLOR: Apply "color-blue" for blue color: #4A89DC -->
<!-- BEGIN BODY -->
<body class="sidebar-condensed fixed-topbar fixed-sidebar theme-sdtl color-default dashboard">
<!--[if lt IE 7]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<section>
    <!-- BEGIN SIDEBAR -->
    @include('admin.layouts.partials.sidebar')
    <!-- END SIDEBAR -->
    <div class="main-content">
        <!-- BEGIN TOPBAR -->
        @include('admin.layouts.partials.topbar')
        <!-- END TOPBAR -->
        <!-- BEGIN PAGE CONTENT -->
        <div class="page-content page-thin">
            @yield('content')

            <div class="footer">
                <div class="copyright">
                    <p class="pull-left sm-pull-reset">
                        <span>Copyright <span class="copyright">©</span> 2016 </span>
                        <span>THEMES LAB</span>.
                        <span>All rights reserved. </span>
                    </p>
                    <p class="pull-right sm-pull-reset">
                        <span><a href="#" class="m-r-10">Support</a> | <a href="#" class="m-l-10 m-r-10">Terms of use</a> | <a href="#" class="m-l-10">Privacy Policy</a></span>
                    </p>
                </div>
            </div>
        </div>
        <!-- END PAGE CONTENT -->
    </div>
    <!-- END MAIN CONTENT -->

</section>
<!-- BEGIN QUICKVIEW SIDEBAR -->
@include('admin.layouts.partials.quickview-sidebar')
<!-- END QUICKVIEW SIDEBAR -->
<!-- BEGIN SEARCH -->
@include('admin.layouts.partials.search')
<!-- END SEARCH -->
<!-- BEGIN PRELOADER -->
<div class="loader-overlay">
    <h1 style="text-align: center; padding-top: 20%">...Loading...</h1>
    <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
</div>
<!-- END PRELOADER -->
<a href="#" class="scrollup"><i class="fa fa-angle-up"></i></a>
<script src="{{asset('make/global/plugins/jquery/jquery-3.1.0.min.js')}}"></script>
<script src="{{asset('make/global/plugins/jquery/jquery-migrate-3.0.0.min.js')}}"></script>
<script src="{{asset('make/global/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<script src="{{asset('make/global/plugins/gsap/main-gsap.min.js')}}"></script>
<script src="{{asset('make/global/plugins/tether/js/tether.min.js')}}"></script>
<script src="{{asset('make/global/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('make/global/plugins/appear/jquery.appear.js')}}"></script>
<script src="{{asset('make/global/plugins/jquery-cookies/jquery.cookies.min.js')}}"></script> <!-- Jquery Cookies, for theme -->
<script src="{{asset('make/global/plugins/jquery-block-ui/jquery.blockUI.min.js')}}"></script> <!-- simulate synchronous behavior when using AJAX -->
<script src="{{asset('make/global/plugins/bootbox/bootbox.min.js')}}"></script> <!-- Modal with Validation -->
<script src="{{asset('make/global/plugins/mcustom-scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script> <!-- Custom Scrollbar sidebar -->
<script src="{{asset('make/global/plugins/bootstrap-dropdown/bootstrap-hover-dropdown.min.js')}}"></script> <!-- Show Dropdown on Mouseover -->
<script src="{{asset('make/global/plugins/charts-sparkline/sparkline.min.js')}}"></script> <!-- Charts Sparkline -->
<script src="{{asset('make/global/plugins/retina/retina.min.js')}}"></script> <!-- Retina Display -->
<script src="{{asset('make/global/plugins/select2/dist/js/select2.full.min.js')}}"></script> <!-- Select Inputs -->
<script src="{{asset('make/global/plugins/icheck/icheck.min.js')}}"></script> <!-- Checkbox & Radio Inputs -->
<script src="{{asset('make/global/plugins/backstretch/backstretch.min.js')}}"></script> <!-- Background Image -->
<script src="{{asset('make/global/plugins/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script> <!-- Animated Progress Bar -->
<script src="{{asset('make/global/js/builder.js')}}"></script> <!-- Theme Builder -->
<script src="{{asset('make/global/js/sidebar_hover.js')}}"></script> <!-- Sidebar on Hover -->
<script src="{{asset('make/global/js/application.js')}}"></script> <!-- Main Application Script -->
<script src="{{asset('make/global/js/plugins.js')}}"></script> <!-- Main Plugin Initialization Script -->
<script src="{{asset('make/global/js/widgets/notes.js')}}"></script> <!-- Notes Widget -->
<script src="{{asset('make/global/js/quickview.js')}}"></script> <!-- Chat Script -->
<script src="{{asset('make/global/js/pages/search.js')}}"></script> <!-- Search Script -->
<!-- BEGIN PAGE SCRIPT -->
<script src="{{asset('make/global/plugins/noty/jquery.noty.packaged.min.js')}}"></script>  <!-- Notifications -->
<script src="{{asset('make/global/plugins/bootstrap-editable/js/bootstrap-editable.min.js')}}"></script> <!-- Inline Edition X-editable -->
<script src="{{asset('make/global/plugins/bootstrap-context-menu/bootstrap-contextmenu.min.js')}}"></script> <!-- Context Menu -->
<script src="{{asset('make/global/plugins/multidatepicker/multidatespicker.min.js')}}"></script> <!-- Multi dates Picker -->
<script src="{{asset('make/global/js/widgets/todo_list.js')}}"></script>
<script src="{{asset('make/global/plugins/metrojs/metrojs.min.js')}}"></script> <!-- Flipping Panel -->
<script src="{{asset('make/global/plugins/charts-chartjs/Chart.min.js')}}"></script>  <!-- ChartJS Chart -->
<script src="{{asset('make/global/plugins/charts-highstock/js/highstock.js')}}"></script> <!-- financial Charts -->
<script src="{{asset('make/global/plugins/charts-highstock/js/modules/exporting.js')}}"></script> <!-- Financial Charts Export Tool -->
<script src="{{asset('make/global/plugins/maps-amcharts/ammap/ammap.js')}}"></script> <!-- Vector Map -->
<script src="{{asset('make/global/plugins/maps-amcharts/ammap/maps/js/worldLow.js')}}"></script> <!-- Vector World Map  -->
<script src="{{asset('make/global/plugins/maps-amcharts/ammap/themes/black.js')}}"></script> <!-- Vector Map Black Theme -->
<script src="{{asset('')}}make/global/js/pages/dashboard.js"></script>
<!-- END PAGE SCRIPT -->
<script src="{{asset('make/md-layout2/material-design/js/material.js')}}"></script>
<script src="{{asset('make/md-layout2/js/layout.js')}}"></script>
<script>
    $.material.init();
</script>
</body>
</html>

