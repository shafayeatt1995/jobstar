
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') - {{ config('app.name') }}</title>
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('public/images/favicon.png') }}">

    @include('layouts.dashboard.partial.styles')

    @stack('css')

</head>
<body>
<!-- start per-loader
<div class="loader-container">
    <div class="loader-circle">
        <div class="loader">
            <div class="loader-dot"></div>
            <div class="loader-dot"></div>
            <div class="loader-dot"></div>
            <div class="loader-dot"></div>
            <div class="loader-dot"></div>
            <div class="loader-dot"></div>
        </div>
    </div>
</div>
<!-- end per-loader -->

@include('layouts.dashboard.partial.header')

<!-- ================================
    START DASHBOARD AREA
================================= -->
<section class="dashboard-area">
    @include('layouts.dashboard.partial.sidebar')

    <div class="dashboard-content-wrap">
        @yield('content')

        @include('layouts.dashboard.partial.footer')
    </div>

</section><!-- end profile-area -->
<!-- ================================
    END DASHBOARD AREA
================================= -->

<!-- start back-to-top -->
<div id="back-to-top">
    <i class="fa fa-angle-up" title="Go top"></i>
</div>
<!-- end back-to-top -->

@include('layouts.dashboard.partial.scripts')

@stack('js')

</body>
</html>
