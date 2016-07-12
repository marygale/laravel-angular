@include('layouts.head')
<body id="login" class="animated fadeInDown">
@yield('header')

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