@include('layouts.head')
<body id="login" class="animated fadeInDown">
<!-- possible classes: minified, no-right-panel, fixed-ribbon, fixed-header, fixed-width-->
<header id="header">
    <!--<span id="logo"></span>-->

    <div id="logo-group">
        <span id="logo"> <img src="{{ asset('img/logo.png') }}" alt="SmartAdmin"> </span>

        <!-- END AJAX-DROPDOWN -->
    </div>
    @can('super_admin')
        <span id="login-header-space"> <a href="{{ action('Auth\AuthController@logout') }}" class="btn btn-danger">Logout</a> </span>
    @else
        <span id="login-header-space"> <a href="{{action('Auth\AuthController@login')}}" class="hidden-mobile">Login</a> <a href="register.html" class="btn btn-danger">Create account</a> </span>
    @endcan


</header>

<div id="main" role="main">

    <!-- MAIN CONTENT -->
    <div id="content" class="container">

        @yield('content')
    </div>
</div>
@include('shared_script._default_script')
@yield('page_script')
@include('shared._validate')
</body>