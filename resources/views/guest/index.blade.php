@extends('layouts.front')
@section('header')
        <!-- possible classes: minified, no-right-panel, fixed-ribbon, fixed-header, fixed-width-->
<header id="header">
    <!--<span id="logo"></span>-->

    <div id="logo-group">
        <span id="logo"> <img src="{{ asset('img/logo.png') }}" alt="SmartAdmin"> </span>

        <!-- END AJAX-DROPDOWN -->
    </div>

    <span id="login-header-space"> <span class="hidden-mobile">Need an account?</span> <a href="register.html" class="btn btn-danger">Creat account</a> </span>

</header>
@endsection