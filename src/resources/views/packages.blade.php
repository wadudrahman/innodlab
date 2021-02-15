<!DOCTYPE html>

<html lang="en" class="light-style">

<head>
    <title>{{ env('APP_NAME') }} - Login</title>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge,chrome=1">
    <meta name="description" content="">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <link rel="icon" type="image/x-icon" href="favicon.ico">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900"
          rel="stylesheet">

    <!-- Icon fonts -->
    <link rel="stylesheet" href="{{ asset('vendor/fonts/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/fonts/ionicons.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/fonts/linearicons.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/fonts/open-iconic.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/fonts/pe-icon-7-stroke.css') }}">

    <!-- Core stylesheets -->
    <link rel="stylesheet" href="{{ asset('vendor/css/rtl/bootstrap.css') }}" class="theme-settings-bootstrap-css">
    <link rel="stylesheet" href="{{ asset('vendor/css/rtl/appwork.css') }}" class="theme-settings-appwork-css">
    <link rel="stylesheet" href="{{ asset('vendor/css/rtl/theme-corporate.css') }}" class="theme-settings-theme-css">
    <link rel="stylesheet" href="{{ asset('vendor/css/rtl/colors.css') }}" class="theme-settings-colors-css">
    <link rel="stylesheet" href="{{ asset('vendor/css/rtl/uikit.css') }}">
    <link rel="stylesheet" href="{{ asset('css/demo.css') }}">

    <!-- Load polyfills -->
    <script src="{{ asset('vendor/js/polyfills.js') }}"></script>
    <script>document['documentMode'] === 10 && document.write('<script src="https://polyfill.io/v3/polyfill.min.js?features=Intl.~locale.en"><\/script>')</script>

    <script src="{{ asset('vendor/js/material-ripple.js') }}"></script>
    <script src="{{ asset('vendor/js/layout-helpers.js') }}"></script>

    <!-- Core scripts -->
    <script src="{{ asset('vendor/js/pace.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Libs -->
    <link rel="stylesheet" href="{{ asset('vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}">
    <!-- Page -->
    <link rel="stylesheet" href="{{ asset('vendor/css/pages/authentication.css') }}">
</head>

<body>
<div class="page-loader">
    <div class="bg-primary"></div>
</div>
<!-- Content -->
<div class="layout-wrapper layout-2">
    <div class="layout-inner">
        <!-- Layout container -->
        <div class="layout-container">
            <!-- Layout content -->
            <div class="layout-content">
                <!-- Content -->
                <div class="container-fluid flex-grow-1 container-p-y">
                    <div class="container px-0">
                        <h1 class="text-center font-weight-bolder pt-5 mb-3">
                            Pricing plans
                        </h1>
                        <div class="text-center text-muted text-large font-weight-light">
                            Choose the best plan that fits your needs
                        </div><br>
                        <div class="row no-gutters row-bordered ui-bordered text-center">
                            <div class="d-flex col-md flex-column py-4">
                                <div class="display-1 text-primary my-4"><i class="lnr lnr-rocket text-big"></i>
                                </div>
                                <h5 class="m-0">Starter</h5>
                                <div class="flex-grow-1">
                                    <div class="py-4 my-2">
                                        <span class="d-inline-block text-muted text-big align-middle mr-2">BDT</span>
                                        <span class="display-3 d-inline-block font-weight-bold align-middle">5000</span>
                                    </div>
                                    <div class="pb-5">
                                        <p class="ui-company-text"><b>100 Designs</b></p>
                                        <p class="ui-company-text mb-0">Send & Receive Design File via Email</p>
                                        <p class="ui-company-text mb-0">Add up to <b>15 Emails</b></p>
                                        <p class="ui-company-text mb-0">Same Day Delivery</p>
                                        <p class="ui-company-text mb-0">Multiple Revisions</p>
                                        <p class="ui-company-text mb-0"><b>30 Days</b> File Storage</p>
                                        <p class="ui-company-text"><b>7 Days</b> or <b>20 Designs</b> Trail</p>
                                    </div>
                                </div>
                                <div class="px-md-3 px-lg-5">
                                    <a href="javascript:void(0)" class="btn btn-outline-primary btn-lg rounded-pill">Get
                                        Started</a>
                                </div>
                            </div>
                            <div class="d-flex col-md flex-column py-4">
                                <div class="display-1 text-primary my-4"><i class="lnr lnr-briefcase text-big"></i></div>
                                <h5 class="m-0">Basic</h5>
                                <div class="flex-grow-1">
                                    <div class="py-4 my-2">
                                        <span class="d-inline-block text-muted text-big align-middle mr-2">$</span>
                                        <span class="display-3 d-inline-block font-weight-bold align-middle">20</span>
                                        <span class="d-inline-block text-muted text-big align-middle ml-2">/ mo</span>
                                    </div>
                                    <div class="pb-5">
                                        <p class="ui-company-text mb-2">20 users</p>
                                        <p class="ui-company-text mb-2">100 projects</p>
                                        <p class="ui-company-text mb-0">300GB space</p>
                                    </div>
                                </div>
                                <div class="px-md-3 px-lg-5">
                                    <a href="javascript:void(0)" class="btn btn-primary btn-lg rounded-pill">Get
                                        Started</a>
                                </div>
                            </div>
                            <div class="d-flex col-md flex-column py-4">
                                <div class="display-1 text-primary my-4"><i class="lnr lnr-diamond text-big"></i>
                                </div>
                                <h5 class="m-0">Premium</h5>
                                <div class="flex-grow-1">
                                    <div class="py-4 my-2">
                                        <span class="d-inline-block text-muted text-big align-middle mr-2">$</span>
                                        <span class="display-3 d-inline-block font-weight-bold align-middle">50</span>
                                        <span class="d-inline-block text-muted text-big align-middle ml-2">/ mo</span>
                                    </div>
                                    <div class="pb-5">
                                        <p class="ui-company-text mb-2">Unlimited users</p>
                                        <p class="ui-company-text mb-2">Unlimited projects</p>
                                        <p class="ui-company-text mb-0">1000GB space</p>
                                    </div>
                                </div>
                                <div class="px-md-3 px-lg-5">
                                    <a href="javascript:void(0)" class="btn btn-outline-primary btn-lg rounded-pill">Get
                                        Started</a>
                                </div>
                            </div>
                            <div class="d-flex col-md flex-column py-4">
                                <div class="display-1 text-primary my-4"><i class="lnr lnr-hourglass text-big"></i>
                                </div>
                                <h5 class="m-0">Pay As You GO</h5>
                                <div class="flex-grow-1">
                                    <div class="py-4 my-2">
                                        <span class="d-inline-block text-muted text-big align-middle mr-2">$</span>
                                        <span class="display-3 d-inline-block font-weight-bold align-middle">50</span>
                                        <span class="d-inline-block text-muted text-big align-middle ml-2">/ mo</span>
                                    </div>
                                    <div class="pb-5">
                                        <p class="ui-company-text mb-2">Unlimited users</p>
                                        <p class="ui-company-text mb-2">Unlimited projects</p>
                                        <p class="ui-company-text mb-0">1000GB space</p>
                                    </div>
                                </div>
                                <div class="px-md-3 px-lg-5">
                                    <a href="javascript:void(0)" class="btn btn-outline-primary btn-lg rounded-pill">Get
                                        Started</a>
                                </div>
                            </div>
                        </div>
                        <div class="text-center text-big mt-5">
                            <a href="javascript:void(0)">I want to Join as a Designer</a>
                        </div>
                    </div>
                </div>
                <!-- / Content -->
            </div>
            <!-- Layout content -->
        </div>
        <!-- / Layout container -->
    </div>
    <!-- Overlay -->
    <div class="layout-overlay layout-sidenav-toggle"></div>
</div>

<!-- / Content -->

<!-- Core scripts -->
<script src="{{ asset('vendor/libs/popper/popper.js') }}"></script>
<script src="{{ asset('vendor/js/bootstrap.js') }}"></script>
<script src="{{ asset('vendor/js/sidenav.js') }}"></script>

<!-- Libs -->
<script src="{{ asset('vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

<!-- Demo -->
<script src="{{ asset('js/demo.js') }}"></script>

</body>

</html>
