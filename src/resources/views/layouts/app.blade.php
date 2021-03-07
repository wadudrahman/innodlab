<!DOCTYPE html>

<html lang="en" class="light-style">

<head>
    <title> {{ env('APP_NAME') }} - @yield('title')</title>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge,chrome=1">
    <meta name="description" content="">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{ url('favicon.ico') }}">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900"
          rel="stylesheet">

    <!-- Icon fonts -->
    <link rel="stylesheet" href="{{ asset('panel/vendor/fonts/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('panel/vendor/fonts/ionicons.css') }}">
    <link rel="stylesheet" href="{{ asset('panel/vendor/fonts/linearicons.css') }}">
    <link rel="stylesheet" href="{{ asset('panel/vendor/fonts/open-iconic.css') }}">
    <link rel="stylesheet" href="{{ asset('panel/vendor/fonts/pe-icon-7-stroke.css') }}">

    <!-- Core stylesheets -->
    <link rel="stylesheet" href="{{ asset('panel/vendor/css/rtl/bootstrap.css') }}" class="theme-settings-bootstrap-css">
    <link rel="stylesheet" href="{{ asset('panel/vendor/css/rtl/appwork.css') }}" class="theme-settings-appwork-css">
    <link rel="stylesheet" href="{{ asset('panel/vendor/css/rtl/theme-corporate.css') }}" class="theme-settings-theme-css">
    <link rel="stylesheet" href="{{ asset('panel/vendor/css/rtl/colors.css') }}" class="theme-settings-colors-css">
    <link rel="stylesheet" href="{{ asset('panel/vendor/css/rtl/uikit.css') }}">
    <link rel="stylesheet" href="{{ asset('panel/css/demo.css') }}">
{{--    <link rel="stylesheet" href="{{ asset('panel/css/custom.css') }}">--}}

<!-- Libs -->
    <link rel="stylesheet" href="{{ asset('panel/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}">
    @stack('stylesheet')
</head>

<body>
<!-- Preloader -->
@include('panel.layouts.preLoader')
<!-- Layout wrapper -->
<div class="layout-wrapper layout-2">
    <div class="layout-inner">
    {{-- Including Navigation --}}
    @include('panel.layouts.sideNav')
    <!-- Layout container -->
        <div class="layout-container">
            @include('panel.layouts.topNav')
            {{-- Page Content --}}
            @yield('content')
            {{-- Including Footer --}}
            @include('panel.layouts.footer')
        </div>

    </div>
</div>
<!-- Core scripts -->
<script src="{{ asset('panel/vendor/js/jquery_3.5.1.js') }}"></script>
<script src="{{ asset('panel/vendor/libs/popper/popper.js') }}"></script>
<script src="{{ asset('panel/vendor/js/bootstrap.js') }}"></script>
<script src="{{ asset('panel/vendor/js/pace.js') }}"></script>
<script src="{{ asset('panel/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('panel/vendor/js/sidenav.js') }}"></script>
<script src="{{ asset('panel/vendor/js/layouts-helpers.js') }}"></script>
<script src="{{ asset('panel/vendor/js/material-ripple.js') }}"></script>
<!-- Load polyfills -->
<script src="{{ asset('panel/vendor/js/polyfills.js') }}"></script>
<script>
    document['documentMode'] === 10 && document.write('<script src="https://polyfill.io/v3/polyfill.min.js?features=Intl.~locale.en"><\/script>')
</script>
<script src="{{ asset('panel/vendor/js/sideNavCollapse.js') }}"></script>
@stack('scripts')
<script>
    $(document).ready(function () {
        var message = null;
        message = {!!json_encode(session('unauthorizedMessage'))!!};
        if (message !== null) {
            alert(message);
        }
    });
</script>
</body>

</html>
