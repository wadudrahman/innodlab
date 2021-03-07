<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>{{ env('APP_NAME') }} - @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="{{ asset('font/iconsmind-s/css/iconsminds.css') }}"/>
    <link rel="stylesheet" href="{{ asset('font/simple-line-icons/css/simple-line-icons.css') }}"/>

    <link rel="stylesheet" href="{{ asset('css/vendor/bootstrap.min.css') }}"/>
    {{--    <link rel="stylesheet" href="{{ asset('css/vendor/bootstrap.rtl.only.min.css') }}"/>--}}
    <link rel="stylesheet" href="{{ asset('css/vendor/fullcalendar.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/vendor/dataTables.bootstrap4.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/vendor/datatables.responsive.bootstrap4.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/vendor/select2.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/vendor/perfect-scrollbar.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/vendor/glide.core.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/vendor/bootstrap-stars.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/vendor/nouislider.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/vendor/bootstrap-datepicker3.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/vendor/component-custom-switch.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}"/>
</head>

<body id="app-container" class="menu-default show-spinner">
@include('layouts.topBar')
@include('layouts.sideBar')
@yield('content')
@include('layouts.footer')
<script src="{{ asset('js/vendor/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('js/vendor/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/vendor/Chart.bundle.min.js') }}"></script>
<script src="{{ asset('js/vendor/chartjs-plugin-datalabels.js') }}"></script>
<script src="{{ asset('js/vendor/moment.min.js') }}"></script>
<script src="{{ asset('js/vendor/fullcalendar.min.js') }}"></script>
<script src="{{ asset('js/vendor/datatables.min.js') }}"></script>
<script src="{{ asset('js/vendor/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('js/vendor/progressbar.min.js') }}"></script>
<script src="{{ asset('js/vendor/jquery.barrating.min.js') }}"></script>
<script src="{{ asset('js/vendor/select2.full.js') }}"></script>
<script src="{{ asset('js/vendor/nouislider.min.js') }}"></script>
<script src="{{ asset('js/vendor/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('js/vendor/Sortable.js') }}"></script>
<script src="{{ asset('js/vendor/mousetrap.min.js') }}"></script>
<script src="{{ asset('js/vendor/glide.min.js') }}"></script>
<script src="{{ asset('js/dore.script.js') }}"></script>
<script src="{{ asset('js/scripts.js') }}"></script>
<script>
    //Disabling Right Click Option
    // document.addEventListener('contextmenu', event => event.preventDefault());
    setTimeout(function () {
        $('.alert-dismissible').fadeOut(1000);
    }, 5000);
</script>
</body>

</html>
