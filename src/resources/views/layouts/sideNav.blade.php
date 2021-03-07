<!-- Layout sidenav -->
<div id="layout-sidenav" class="layout-sidenav sidenav sidenav-vertical bg-dark">
    <!-- Brand demo (see assets/css/demo/demo.css) -->
    <div class="app-brand demo">
          <span class="app-brand-logo demo bg-primary">
{{--               @include('panel.partials.logoSvg') --}}
          </span>
        <a href="#" class="app-brand-text demo sidenav-text font-weight-normal ml-2">Innodlab </a>
        <a href="javascript:void(0)" class="layout-sidenav-toggle sidenav-link text-large ml-auto">
            <i class="ion ion-md-menu align-middle"></i>
        </a>
    </div>

    <div class="sidenav-divider mt-0"></div>

    <!-- Links -->
    <ul class="sidenav-inner py-1">
        <!-- Dashboard -->
        <li class="sidenav-item">
            <a href="{{ url('panel/dashboard') }}" class="sidenav-link"><i class="sidenav-icon ion ion-md-speedometer"></i>
                <div>Dashboard</div>
            </a>
        </li>
        <!-- SideNav Divider -->
        <li class="sidenav-divider mb-1"></li>
        <li class="sidenav-header small font-weight-semibold">Emails</li>
        <!-- Sports Management -->
        <li class="sidenav-item">
            <a href="{{ url('panel/#') }}" class="sidenav-link"><i class="sidenav-icon ion ion-logo-game-controller-b"></i>
                <div>Email</div>
            </a>
        </li>
        <li class="sidenav-item">
            <a href="{{ url('panel/chats') }}" class="sidenav-link"><i class="sidenav-icon ion ion-logo-game-controller-b"></i>
                <div>Chats</div>
            </a>
        </li>
        <!-- SideNav Divider -->
        <li class="sidenav-divider mb-1"></li>
        <li class="sidenav-header small font-weight-semibold">USER</li>
        <li class="sidenav-item">
            <a href="{{ url('panel/users') }}" class="sidenav-link"><i class="sidenav-icon ion ion-md-git-network"></i>
                <div>User Management</div>
            </a>
        </li>

    </ul>
</div>

