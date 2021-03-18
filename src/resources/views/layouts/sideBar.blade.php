<div class="menu">
    <div class="main-menu">
        <div class="scroll">
            <ul class="list-unstyled">
                <li class="active">
                    <a href="{{ url('/dashboard') }}">
                        <i class="iconsminds-shop-4"></i>
                        <span>Dashboards</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <i class="iconsminds-mail"></i> Mail
                    </a>
                </li>
                <li>
                    <a href="#jobManagement">
                        <i class="iconsminds-digital-drawing"></i> Job
                    </a>
                </li>
                <li>
                    <a href="#payment">
                        <i class="iconsminds-financial"></i> Payment
                    </a>
                </li>

                <li>
                    <a href="#user">
                        <i class="iconsminds-business-mens"></i> User
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="sub-menu">
        <div class="scroll">
            <ul class="list-unstyled" data-link="jobManagement" id="jobManagement">
                <li>
                    <a href="{{ url('/jobCategories') }}">
                        <i class="simple-icon-folder"></i> <span
                            class="d-inline-block">Categories Management</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/addJob') }}">
                        <i class="simple-icon-plus"></i> <span
                            class="d-inline-block">Add Job</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/jobs') }}">
                        <i class="simple-icon-list"></i> <span
                            class="d-inline-block">Job List</span>
                    </a>
                </li>
            </ul>
            <ul class="list-unstyled" data-link="payment">
                <li>
                    <a href="{{ url('/paymentManagement') }}">
                        <i class="simple-icon-wallet"></i>
                        <span class="d-inline-block">Payment Management</span>
                    </a>
                </li>
            </ul>

            <ul class="list-unstyled" data-link="user" id="user">
                <li>
                    <a href="#userManagements" data-toggle="collapse" data-target="#userManagements" aria-expanded="true"
                       aria-controls="userManagements" class="rotate-arrow-icon">
                        <i class="simple-icon-arrow-down"></i>
                        <span class="d-inline-block">User Management</span>
                    </a>
                    <div id="userManagements" class="collapse show" data-parent="#user">
                        <ul class="list-unstyled inner-level-menu">
                            <li>
                                <a href="{{ url('/addUser') }}">
                                    <i class="simple-icon-plus"></i> <span
                                        class="d-inline-block">Add User</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/userList') }}">
                                    <i class="simple-icon-list"></i> <span
                                        class="d-inline-block">User List</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#" data-toggle="collapse" data-target="#packageManagement" aria-expanded="true"
                       aria-controls="packageManagement" class="rotate-arrow-icon">
                        <i class="simple-icon-arrow-down"></i>
                        <span class="d-inline-block">Package Management</span>
                    </a>
                    <div id="packageManagement" class="collapse show" data-parent="#user">
                        <ul class="list-unstyled inner-level-menu">
                            <li>
                                <a href="{{ url('/addPackage') }}">
                                    <i class="simple-icon-plus"></i> <span
                                        class="d-inline-block">Add Package</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/packageManagement') }}">
                                    <i class="simple-icon-list"></i> <span
                                        class="d-inline-block">Package Management</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
