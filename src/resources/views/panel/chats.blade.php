@extends('panel.layouts.app')

@section('title', 'Dashboard')

@section('content')

    <!-- Content -->
    <div class="container-fluid flex-grow-1 container-p-y">

        <h4 class="font-weight-bold py-3 mb-4">
            Chats
            @include('panel.partials.today')
        </h4>
        <!-- Layout navbar -->
        <nav class="layout-navbar navbar navbar-expand-lg align-items-lg-center bg-white container-p-x" id="layout-navbar">

            <!-- Brand demo (see assets/css/demo/demo.css) -->
            <a href="{{ url('panel/dashboard') }}" class="navbar-brand app-brand demo d-lg-none py-0 mr-4">
            <span class="app-brand-logo demo bg-primary">
              <svg viewBox="0 0 148 80" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><linearGradient id="a" x1="46.49" x2="62.46" y1="53.39" y2="48.2" gradientUnits="userSpaceOnUse"><stop stop-opacity=".25" offset="0"></stop><stop stop-opacity=".1" offset=".3"></stop><stop stop-opacity="0" offset=".9"></stop></linearGradient><linearGradient id="e" x1="76.9" x2="92.64" y1="26.38" y2="31.49" xlink:href="#a"></linearGradient><linearGradient id="d" x1="107.12" x2="122.74" y1="53.41" y2="48.33" xlink:href="#a"></linearGradient></defs><path style="fill: #fff;" transform="translate(-.1)" d="M121.36,0,104.42,45.08,88.71,3.28A5.09,5.09,0,0,0,83.93,0H64.27A5.09,5.09,0,0,0,59.5,3.28L43.79,45.08,26.85,0H.1L29.43,76.74A5.09,5.09,0,0,0,34.19,80H53.39a5.09,5.09,0,0,0,4.77-3.26L74.1,35l16,41.74A5.09,5.09,0,0,0,94.82,80h18.95a5.09,5.09,0,0,0,4.76-3.24L148.1,0Z"></path><path transform="translate(-.1)" d="M52.19,22.73l-8.4,22.35L56.51,78.94a5,5,0,0,0,1.64-2.19l7.34-19.2Z" fill="url(#a)"></path><path transform="translate(-.1)" d="M95.73,22l-7-18.69a5,5,0,0,0-1.64-2.21L74.1,35l8.33,21.79Z" fill="url(#e)"></path><path transform="translate(-.1)" d="M112.73,23l-8.31,22.12,12.66,33.7a5,5,0,0,0,1.45-2l7.3-18.93Z" fill="url(#d)"></path></svg>
            </span>
                <span class="app-brand-text demo font-weight-normal ml-2">Innodlab</span>
            </a>

            <!-- Sidenav toggle (see assets/css/demo/demo.css) -->
            <div class="layout-sidenav-toggle navbar-nav d-lg-none align-items-lg-center mr-auto">
                <a class="nav-item nav-link px-0 mr-lg-4" href="javascript:void(0)">
                    <i class="ion ion-md-menu text-large align-middle"></i>
                </a>
            </div>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#layout-navbar-collapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse collapse" id="layout-navbar-collapse">
                <!-- Divider -->
                <hr class="d-lg-none w-100 my-2">

                <div class="navbar-nav align-items-lg-center">
                    <!-- Search -->
                    <label class="nav-item navbar-text navbar-search-box p-0 active">
                        <i class="ion ion-ios-search navbar-icon align-middle"></i>
                        <span class="navbar-search-input pl-2">
                  <input type="text" class="form-control navbar-text mx-2" placeholder="Search..." style="width:200px">
                </span>
                    </label>
                </div>

                <div class="navbar-nav align-items-lg-center ml-auto">
                    <div class="demo-navbar-notifications nav-item dropdown mr-lg-3">
                        <a class="nav-link dropdown-toggle hide-arrow" href="#" data-toggle="dropdown">
                            <i class="ion ion-md-notifications-outline navbar-icon align-middle"></i>
                            <span class="badge badge-primary badge-dot indicator"></span>
                            <span class="d-lg-none align-middle">&nbsp; Notifications</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="bg-primary text-center text-white font-weight-bold p-3">
                                4 New Notifications
                            </div>
                            <div class="list-group list-group-flush">
                                <a href="javascript:void(0)" class="list-group-item list-group-item-action media d-flex align-items-center">
                                    <div class="ui-icon ui-icon-sm ion ion-md-home bg-secondary border-0 text-white"></div>
                                    <div class="media-body line-height-condenced ml-3">
                                        <div class="text-body">Login from 192.168.1.1</div>
                                        <div class="text-light small mt-1">
                                            Aliquam ex eros, imperdiet vulputate hendrerit et.
                                        </div>
                                        <div class="text-light small mt-1">12h ago</div>
                                    </div>
                                </a>

                                <a href="javascript:void(0)" class="list-group-item list-group-item-action media d-flex align-items-center">
                                    <div class="ui-icon ui-icon-sm ion ion-md-person-add bg-info border-0 text-white"></div>
                                    <div class="media-body line-height-condenced ml-3">
                                        <div class="text-body">You have <strong>4</strong> new followers</div>
                                        <div class="text-light small mt-1">
                                            Phasellus nunc nisl, posuere cursus pretium nec, dictum vehicula tellus.
                                        </div>
                                    </div>
                                </a>

                                <a href="javascript:void(0)" class="list-group-item list-group-item-action media d-flex align-items-center">
                                    <div class="ui-icon ui-icon-sm ion ion-md-power bg-danger border-0 text-white"></div>
                                    <div class="media-body line-height-condenced ml-3">
                                        <div class="text-body">Server restarted</div>
                                        <div class="text-light small mt-1">
                                            19h ago
                                        </div>
                                    </div>
                                </a>

                                <a href="javascript:void(0)" class="list-group-item list-group-item-action media d-flex align-items-center">
                                    <div class="ui-icon ui-icon-sm ion ion-md-warning bg-warning border-0 text-body"></div>
                                    <div class="media-body line-height-condenced ml-3">
                                        <div class="text-body">99% server load</div>
                                        <div class="text-light small mt-1">
                                            Etiam nec fringilla magna. Donec mi metus.
                                        </div>
                                        <div class="text-light small mt-1">
                                            20h ago
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <a href="javascript:void(0)" class="d-block text-center text-light small p-2 my-1">Show all notifications</a>
                        </div>
                    </div>

                    <div class="demo-navbar-messages nav-item dropdown mr-lg-3">
                        <a class="nav-link dropdown-toggle hide-arrow" href="#" data-toggle="dropdown">
                            <i class="ion ion-ios-mail navbar-icon align-middle"></i>
                            <span class="badge badge-primary badge-dot indicator"></span>
                            <span class="d-lg-none align-middle">&nbsp; Messages</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="bg-primary text-center text-white font-weight-bold p-3">
                                4 New Messages
                            </div>
                            <div class="list-group list-group-flush">
                                <a href="javascript:void(0)" class="list-group-item list-group-item-action media d-flex align-items-center">
                                    <img src="{{ url('panel/img/avatars/6-small.png') }}" class="d-block ui-w-40 rounded-circle" alt>
                                    <div class="media-body ml-3">
                                        <div class="text-body line-height-condenced">Sit meis deleniti eu, pri vidit meliore docendi ut.</div>
                                        <div class="text-light small mt-1">
                                            Mae Gibson &nbsp;·&nbsp; 58m ago
                                        </div>
                                    </div>
                                </a>

                                <a href="javascript:void(0)" class="list-group-item list-group-item-action media d-flex align-items-center">
                                    <img src="{{ url('panel/img/avatars/4-small.png') }}" class="d-block ui-w-40 rounded-circle" alt>
                                    <div class="media-body ml-3">
                                        <div class="text-body line-height-condenced">Mea et legere fuisset, ius amet purto luptatum te.</div>
                                        <div class="text-light small mt-1">
                                            Kenneth Frazier &nbsp;·&nbsp; 1h ago
                                        </div>
                                    </div>
                                </a>

                                <a href="javascript:void(0)" class="list-group-item list-group-item-action media d-flex align-items-center">
                                    <img src="{{ url('panel/img/avatars/5-small.png') }}" class="d-block ui-w-40 rounded-circle" alt>
                                    <div class="media-body ml-3">
                                        <div class="text-body line-height-condenced">Sit meis deleniti eu, pri vidit meliore docendi ut.</div>
                                        <div class="text-light small mt-1">
                                            Nelle Maxwell &nbsp;·&nbsp; 2h ago
                                        </div>
                                    </div>
                                </a>

                                <a href="javascript:void(0)" class="list-group-item list-group-item-action media d-flex align-items-center">
                                    <img src="{{ url('panel/img/avatars/11-small.png') }}" class="d-block ui-w-40 rounded-circle" alt>
                                    <div class="media-body ml-3">
                                        <div class="text-body line-height-condenced">Lorem ipsum dolor sit amet, vis erat denique in, dicunt prodesset te vix.</div>
                                        <div class="text-light small mt-1">
                                            Belle Ross &nbsp;·&nbsp; 5h ago
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <a href="javascript:void(0)" class="d-block text-center text-light small p-2 my-1">Show all messages</a>
                        </div>
                    </div>

                    <!-- Divider -->
                    <div class="nav-item d-none d-lg-block text-big font-weight-light line-height-1 opacity-25 mr-3 ml-1">|</div>

                    <div class="demo-navbar-user nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                  <span class="d-inline-flex flex-lg-row-reverse align-items-center align-middle">
                    <img src="{{ url('panel/img/avatars/1.png') }}" alt class="d-block ui-w-30 rounded-circle">
                    <span class="px-1 mr-lg-2 ml-2 ml-lg-0">Mike Greene</span>
                  </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="javascript:void(0)" class="dropdown-item"><i class="ion ion-ios-person text-lightest"></i> &nbsp; My profile</a>
                            <a href="javascript:void(0)" class="dropdown-item"><i class="ion ion-ios-mail text-lightest"></i> &nbsp; Messages</a>
                            <a href="javascript:void(0)" class="dropdown-item"><i class="ion ion-md-settings text-lightest"></i> &nbsp; Account settings</a>
                            <div class="dropdown-divider"></div>
                            <a href="javascript:void(0)" class="dropdown-item"><i class="ion ion-ios-log-out text-danger"></i> &nbsp; Log Out</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- / Layout navbar -->

        <!-- Layout content -->
        <div class="layout-content">

            <!-- Content -->
            <div class="container-fluid d-flex align-items-stretch flex-grow-1 p-0">

                <!-- `.chat-wrapper` fills all available space of container -->
                <div class="chat-wrapper container-p-x container-p-y">

                    <!-- Make card full height of `.chat-wrapper` -->
                    <div class="card flex-grow-1 position-relative overflow-hidden">

                        <!-- Make row full height of `.card` -->
                        <div class="row no-gutters h-100">
                            <div class="chat-sidebox col">

                                <!-- Chat contacts header -->
                                <div class="flex-grow-0 px-4">
                                    <div class="media align-items-center">
                                        <div class="media-body">
                                            <input type="text" class="form-control chat-search my-3" placeholder="Search...">
                                        </div>
                                        <a href="javascript:void(0)" class="chat-sidebox-toggler d-lg-none d-block text-muted text-large font-weight-light pl-3">&times;</a>
                                    </div>
                                    <hr class="border-light m-0">
                                </div>
                                <!-- / Chat contacts header -->

                                <!-- Wrap `.chat-scroll` to properly position scroll area. Remove this wtapper if you don't need scroll -->
                                <div class="flex-grow-1 position-relative">
                                    <div class="chat-contacts list-group chat-scroll py-3">

                                        <!-- Online -->
                                        <a href="javascript:void(0)" class="list-group-item list-group-item-action online">
                                            <img src="{{ url('panel/img/avatars/2-small.png') }}" class="d-block ui-w-40 rounded-circle" alt="">
                                            <div class="media-body ml-3">
                                                Leon Wilson
                                                <div class="chat-status small"><span class="badge badge-dot"></span>&nbsp; Online</div>
                                            </div>
                                            <div class="badge badge-outline-success">5</div>
                                        </a>

                                        <!-- Online -->
                                        <a href="javascript:void(0)" class="list-group-item list-group-item-action online">
                                            <img src="{{ url('panel/img/avatars/3-small.png') }}" class="d-block ui-w-40 rounded-circle" alt="">
                                            <div class="media-body ml-3">
                                                Allie Rodriguez
                                                <div class="chat-status small"><span class="badge badge-dot"></span>&nbsp; Online</div>
                                            </div>
                                        </a>

                                        <!-- Online & Active -->
                                        <a href="javascript:void(0)" class="list-group-item list-group-item-action online active">
                                            <img src="{{ url('panel/img/avatars/4-small.png') }}" class="d-block ui-w-40 rounded-circle" alt="">
                                            <div class="media-body ml-3">
                                                Kenneth Frazier
                                                <div class="chat-status small"><span class="badge badge-dot"></span>&nbsp; Online</div>
                                            </div>
                                        </a>

                                        <!-- Online -->
                                        <a href="javascript:void(0)" class="list-group-item list-group-item-action online">
                                            <img src="{{ url('panel/img/avatars/5-small.png') }}" class="d-block ui-w-40 rounded-circle" alt="">
                                            <div class="media-body ml-3">
                                                Nellie Maxwell
                                                <div class="chat-status small"><span class="badge badge-dot"></span>&nbsp; Online</div>
                                            </div>
                                            <div class="badge badge-outline-success">2</div>
                                        </a>

                                        <!-- Online -->
                                        <a href="javascript:void(0)" class="list-group-item list-group-item-action online">
                                            <img src="{{ url('panel/img/avatars/6-small.png') }}" class="d-block ui-w-40 rounded-circle" alt="">
                                            <div class="media-body ml-3">
                                                Mae Gibson
                                                <div class="chat-status small"><span class="badge badge-dot"></span>&nbsp; Online</div>
                                            </div>
                                        </a>

                                        <!-- Offline -->
                                        <a href="javascript:void(0)" class="list-group-item list-group-item-action">
                                            <img src="{{ url('panel/img/avatars/7-small.png') }}" class="d-block ui-w-40 rounded-circle" alt="">
                                            <div class="media-body ml-3">
                                                Alice Hampton
                                                <div class="chat-status small"><span class="badge badge-dot"></span>&nbsp; Offline</div>
                                            </div>
                                        </a>

                                        <!-- Offline -->
                                        <a href="javascript:void(0)" class="list-group-item list-group-item-action">
                                            <img src="{{ url('panel/img/avatars/8-small.png') }}" class="d-block ui-w-40 rounded-circle" alt="">
                                            <div class="media-body ml-3">
                                                Hallie Lewis
                                                <div class="chat-status small"><span class="badge badge-dot"></span>&nbsp; Offline</div>
                                            </div>
                                            <div class="badge badge-outline-success">1</div>
                                        </a>

                                        <!-- Offline -->
                                        <a href="javascript:void(0)" class="list-group-item list-group-item-action">
                                            <img src="{{ url('panel/img/avatars/9-small.png') }}" class="d-block ui-w-40 rounded-circle" alt="">
                                            <div class="media-body ml-3">
                                                Amanda Warner
                                                <div class="chat-status small"><span class="badge badge-dot"></span>&nbsp; Offline</div>
                                            </div>
                                        </a>

                                        <!-- Offline -->
                                        <a href="javascript:void(0)" class="list-group-item list-group-item-action">
                                            <img src="{{ url('panel/img/avatars/10-small.png') }}" class="d-block ui-w-40 rounded-circle" alt="">
                                            <div class="media-body ml-3">
                                                Wayne Morgan
                                                <div class="chat-status small"><span class="badge badge-dot"></span>&nbsp; Offline</div>
                                            </div>
                                        </a>

                                        <!-- Offline -->
                                        <a href="javascript:void(0)" class="list-group-item list-group-item-action">
                                            <img src="{{ url('panel/img/avatars/11-small.png') }}" class="d-block ui-w-40 rounded-circle" alt="">
                                            <div class="media-body ml-3">
                                                Belle Ross
                                                <div class="chat-status small"><span class="badge badge-dot"></span>&nbsp; Offline</div>
                                            </div>
                                        </a>

                                        <!-- Offline -->
                                        <a href="javascript:void(0)" class="list-group-item list-group-item-action">
                                            <img src="{{ url('panel/img/avatars/12-small.png') }}" class="d-block ui-w-40 rounded-circle" alt="">
                                            <div class="media-body ml-3">
                                                Arthur Duncan
                                                <div class="chat-status small"><span class="badge badge-dot"></span>&nbsp; Offline</div>
                                            </div>
                                        </a>

                                    </div><!-- / .chat-contacts -->
                                </div>

                            </div>
                            <div class="d-flex col flex-column">

                                <!-- Chat header -->
                                <div class="flex-grow-0 py-3 pr-4 pl-lg-4">

                                    <div class="media align-items-center">
                                        <a href="javascript:void(0)" class="chat-sidebox-toggler d-lg-none d-block text-muted text-large px-4 mr-2"><i class="ion ion-md-more"></i></a>

                                        <div class="position-relative">
                                            <span class="badge badge-dot badge-success indicator"></span>
                                            <img src="{{ url('panel/img/avatars/4-small.png') }}" class="ui-w-40 rounded-circle" alt="">
                                        </div>
                                        <div class="media-body pl-3">
                                            <strong>Kenneth Frazier</strong>
                                            <div class="text-muted small"><em>Typing...</em></div>
                                        </div>
                                        <div>
                                            <button type="button" class="btn btn-primary rounded-pill icon-btn mr-1"><i class="ion ion-ios-call"></i></button>
                                            <button type="button" class="btn btn-secondary rounded-pill icon-btn mr-1"><i class="ion ion-md-videocam"></i></button>
                                            <button type="button" class="btn btn-default rounded-pill icon-btn"><i class="ion ion-ios-more"></i></button>
                                        </div>
                                    </div>

                                </div>
                                <hr class="flex-grow-0 border-light m-0">
                                <!-- / Chat header -->

                                <!-- Wrap `.chat-scroll` to properly position scroll area. Remove this wtapper if you don't need scroll -->
                                <div class="flex-grow-1 position-relative">

                                    <!-- Remove `.chat-scroll` and add `.flex-grow-1` if you don't need scroll -->
                                    <div class="chat-messages chat-scroll p-4">

                                        <div class="chat-message-right mb-4">
                                            <div>
                                                <img src="{{ url('panel/img/avatars/1-small.png') }}" class="ui-w-40 rounded-circle" alt>
                                                <div class="text-muted small text-nowrap mt-2">2:33 am</div>
                                            </div>
                                            <div class="flex-shrink-1 bg-lighter rounded py-2 px-3 mr-3">
                                                <div class="font-weight-semibold mb-1">You</div>
                                                Lorem ipsum dolor sit amet, vis erat denique in, dicunt prodesset te vix.
                                            </div>
                                        </div>

                                        <div class="chat-message-left mb-4">
                                            <div>
                                                <img src="{{ url('panel/img/avatars/4-small.png') }}" class="ui-w-40 rounded-circle" alt>
                                                <div class="text-muted small text-nowrap mt-2">2:34 am</div>
                                            </div>
                                            <div class="flex-shrink-1 bg-lighter rounded py-2 px-3 ml-3">
                                                <div class="font-weight-semibold mb-1">Kenneth Frazier</div>
                                                Sit meis deleniti eu, pri vidit meliore docendi ut, an eum erat animal commodo.
                                            </div>
                                        </div>

                                        <div class="chat-message-right mb-4">
                                            <div>
                                                <img src="{{ url('panel/img/avatars/1-small.png') }}" class="ui-w-40 rounded-circle" alt>
                                                <div class="text-muted small text-nowrap mt-2">2:35 am</div>
                                            </div>
                                            <div class="flex-shrink-1 bg-lighter rounded py-2 px-3 mr-3">
                                                <div class="font-weight-semibold mb-1">You</div>
                                                Cum ea graeci tractatos.
                                            </div>
                                        </div>

                                        <div class="chat-message-left mb-4">
                                            <div>
                                                <img src="{{ url('panel/img/avatars/4-small.png') }}" class="ui-w-40 rounded-circle" alt>
                                                <div class="text-muted small text-nowrap mt-2">2:36 am</div>
                                            </div>
                                            <div class="flex-shrink-1 bg-lighter rounded py-2 px-3 ml-3">
                                                <div class="font-weight-semibold mb-1">Kenneth Frazier</div>
                                                Sed pulvinar, massa vitae interdum pulvinar, risus lectus porttitor magna, vitae commodo lectus mauris et velit. Proin ultricies placerat imperdiet. Morbi varius quam ac venenatis tempus.
                                            </div>
                                        </div>

                                        <div class="chat-message-left mb-4">
                                            <div>
                                                <img src="{{ url('panel/img/avatars/4-small.png') }}" class="ui-w-40 rounded-circle" alt>
                                                <div class="text-muted small text-nowrap mt-2">2:37 am</div>
                                            </div>
                                            <div class="flex-shrink-1 bg-lighter rounded py-2 px-3 ml-3">
                                                <div class="font-weight-semibold mb-1">Kenneth Frazier</div>
                                                Cras pulvinar, sapien id vehicula aliquet, diam velit elementum orci.
                                            </div>
                                        </div>

                                        <div class="chat-message-right mb-4">
                                            <div>
                                                <img src="{{ url('panel/img/avatars/1-small.png') }}" class="ui-w-40 rounded-circle" alt>
                                                <div class="text-muted small text-nowrap mt-2">2:38 am</div>
                                            </div>
                                            <div class="flex-shrink-1 bg-lighter rounded py-2 px-3 mr-3">
                                                <div class="font-weight-semibold mb-1">You</div>
                                                Lorem ipsum dolor sit amet, vis erat denique in, dicunt prodesset te vix.
                                            </div>
                                        </div>

                                        <div class="chat-message-left mb-4">
                                            <div>
                                                <img src="{{ url('panel/img/avatars/4-small.png') }}" class="ui-w-40 rounded-circle" alt>
                                                <div class="text-muted small text-nowrap mt-2">2:39 am</div>
                                            </div>
                                            <div class="flex-shrink-1 bg-lighter rounded py-2 px-3 ml-3">
                                                <div class="font-weight-semibold mb-1">Kenneth Frazier</div>
                                                Sit meis deleniti eu, pri vidit meliore docendi ut, an eum erat animal commodo.
                                            </div>
                                        </div>

                                        <div class="chat-message-right mb-4">
                                            <div>
                                                <img src="{{ url('panel/img/avatars/1-small.png') }}" class="ui-w-40 rounded-circle" alt>
                                                <div class="text-muted small text-nowrap mt-2">2:40 am</div>
                                            </div>
                                            <div class="flex-shrink-1 bg-lighter rounded py-2 px-3 mr-3">
                                                <div class="font-weight-semibold mb-1">You</div>
                                                Cum ea graeci tractatos.
                                            </div>
                                        </div>

                                        <div class="chat-message-right mb-4">
                                            <div>
                                                <img src="{{ url('panel/img/avatars/1-small.png') }}" class="ui-w-40 rounded-circle" alt>
                                                <div class="text-muted small text-nowrap mt-2">2:41 am</div>
                                            </div>
                                            <div class="flex-shrink-1 bg-lighter rounded py-2 px-3 mr-3">
                                                <div class="font-weight-semibold mb-1">You</div>
                                                Morbi finibus, lorem id placerat ullamcorper, nunc enim ultrices massa, id dignissim metus urna eget purus.
                                            </div>
                                        </div>

                                        <div class="chat-message-left mb-4">
                                            <div>
                                                <img src="{{ url('panel/img/avatars/4-small.png') }}" class="ui-w-40 rounded-circle" alt>
                                                <div class="text-muted small text-nowrap mt-2">2:42 am</div>
                                            </div>
                                            <div class="flex-shrink-1 bg-lighter rounded py-2 px-3 ml-3">
                                                <div class="font-weight-semibold mb-1">Kenneth Frazier</div>
                                                Sed pulvinar, massa vitae interdum pulvinar, risus lectus porttitor magna, vitae commodo lectus mauris et velit. Proin ultricies placerat imperdiet. Morbi varius quam ac venenatis tempus.
                                            </div>
                                        </div>

                                        <div class="chat-message-right mb-4">
                                            <div>
                                                <img src="{{ url('panel/img/avatars/1-small.png') }}" class="ui-w-40 rounded-circle" alt>
                                                <div class="text-muted small text-nowrap mt-2">2:43 am</div>
                                            </div>
                                            <div class="flex-shrink-1 bg-lighter rounded py-2 px-3 mr-3">
                                                <div class="font-weight-semibold mb-1">You</div>
                                                Lorem ipsum dolor sit amet, vis erat denique in, dicunt prodesset te vix.
                                            </div>
                                        </div>

                                        <div class="chat-message-left mb-4">
                                            <div>
                                                <img src="{{ url('panel/img/avatars/4-small.png') }}" class="ui-w-40 rounded-circle" alt>
                                                <div class="text-muted small text-nowrap mt-2">2:44 am</div>
                                            </div>
                                            <div class="flex-shrink-1 bg-lighter rounded py-2 px-3 ml-3">
                                                <div class="font-weight-semibold mb-1">Kenneth Frazier</div>
                                                Sit meis deleniti eu, pri vidit meliore docendi ut, an eum erat animal commodo.
                                            </div>
                                        </div>

                                    </div><!-- / .chat-messages -->
                                </div>

                                <!-- Chat footer -->
                                <hr class="border-light m-0">
                                <div class="flex-grow-0 py-3 px-4">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Type your message">
                                        <div class="input-group-append">
                                            <button type="button" class="btn btn-primary">Send</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- / Chat footer -->

                            </div>
                        </div><!-- / .row -->

                    </div><!-- / .card -->

                </div><!-- / .chat-wrapper -->

            </div>
            <!-- / Content -->


        </div>
        <!-- Layout container -->

    </div>
    <!-- / Content -->
@endsection
