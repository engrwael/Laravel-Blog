<!DOCTYPE html>
<html lang="IR-fa" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Janblog">
    <meta name="author" content="Janblog">
    <meta name="keyword" content="Janblog">

    <title>@yield('pageTitle')</title>

    {{-- Icons --}}
    <link href="{{ asset('dashboard-assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard-assets/css/simple-line-icons.css') }}" rel="stylesheet">

    {{-- Main styles for this application --}}
    <link href="{{ asset('dashboard-assets/dest/style.css') }}" rel="stylesheet">

    @yield('styles')
</head>

<body class="navbar-fixed sidebar-nav fixed-nav">
    <header class="navbar">
        @include('dashboard.layouts.navbar')
    </header>

    @include('dashboard.layouts.sidebar')

    {{-- Main content  --}}
    <main class="main">

        @include('dashboard.layouts.breadcrumb')

        <div class="container-fluid">
            <div class="animated fadeIn">
                @yield('content')
            </div>
        </div>
        {{-- container-fluid --}}
    </main>

    {{-- Bootstrap and necessary plugins  --}}
    <script src="{{ asset('dashboard-assets/js/libs/jquery.min.js') }}"></script>
    <script src="{{ asset('dashboard-assets/js/libs/tether.min.js') }}"></script>
    <script src="{{ asset('dashboard-assets/js/libs/bootstrap.min.js') }}"></script>
    <script src="{{ asset('dashboard-assets/js/libs/pace.min.js') }}"></script>

    {{-- Plugins and scripts required by all views  --}}
    <script src="{{ asset('dashboard-assets/js/libs/Chart.min.js') }}"></script>

    {{-- CoreUI main scripts  --}}
    <script src="{{ asset('dashboard-assets/js/app.js') }}"></script>

    {{-- Plugins and scripts required by this views Custom scripts required by this view  --}}
    <script src="{{ asset('dashboard-assets/js/views/main.js') }}"></script>

    @yield('scripts')
</body>

</html>
