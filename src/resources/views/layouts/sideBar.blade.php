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
                    <a href="#menu">
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

                <li>
                    <a href="Blank.Page.html">
                        <i class="iconsminds-bucket"></i> Blank Page
                    </a>
                </li>
                <li>
                    <a href="https://dore-jquery-docs.coloredstrategies.com" target="_blank">
                        <i class="iconsminds-library"></i> Docs
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
                        <i class="simple-icon-plus"></i> <span
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
                <li>
                    <a href="{{ url('/myJobBoard') }}">
                        <i class="simple-icon-list"></i> <span
                            class="d-inline-block">My Job Board</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/jobBoard') }}">
                        <i class="simple-icon-list"></i> <span
                            class="d-inline-block">Job Board</span>
                    </a>
                </li>
            </ul>
            <ul class="list-unstyled" data-link="payment">
                <li>
                    <a href="{{ url('/paymentManagement') }}">
                        <i class="simple-icon-plus"></i>
                        <span class="d-inline-block">Payment Management</span>
                    </a>
                </li>
            </ul>

            <ul class="list-unstyled" data-link="user" id="user">
                <li>
                    <a href="#" data-toggle="collapse" data-target="#collapseMenuTypes" aria-expanded="true"
                       aria-controls="collapseMenuTypes" class="rotate-arrow-icon">
                        <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">User Management</span>
                    </a>
                    <div id="collapseMenuTypes" class="collapse show" data-parent="#menuTypes">
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
                    <a href="#" data-toggle="collapse" data-target="#collapseMenuTypes" aria-expanded="true"
                       aria-controls="collapseMenuTypes" class="rotate-arrow-icon">
                        <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Package Management</span>
                    </a>
                    <div id="collapseMenuTypes" class="collapse show" data-parent="#menuTypes">
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

            <ul class="list-unstyled" data-link="menu" id="menuTypes">
                <li>
                    <a href="#" data-toggle="collapse" data-target="#collapseMenuTypes" aria-expanded="true"
                       aria-controls="collapseMenuTypes" class="rotate-arrow-icon">
                        <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Menu Types</span>
                    </a>
                    <div id="collapseMenuTypes" class="collapse show" data-parent="#menuTypes">
                        <ul class="list-unstyled inner-level-menu">
                            <li>
                                <a href="Menu.Default.html">
                                    <i class="simple-icon-control-pause"></i> <span
                                        class="d-inline-block">Default</span>
                                </a>
                            </li>
                            <li>
                                <a href="Menu.Subhidden.html">
                                    <i class="simple-icon-arrow-left mi-subhidden"></i> <span
                                        class="d-inline-block">Subhidden</span>
                                </a>
                            </li>
                            <li>
                                <a href="Menu.Hidden.html">
                                    <i class="simple-icon-control-start mi-hidden"></i> <span
                                        class="d-inline-block">Hidden</span>
                                </a>
                            </li>
                            <li>
                                <a href="Menu.Mainhidden.html">
                                    <i class="simple-icon-control-rewind mi-hidden"></i> <span
                                        class="d-inline-block">Mainhidden</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#" data-toggle="collapse" data-target="#collapseMenuLevel" aria-expanded="true"
                       aria-controls="collapseMenuLevel" class="rotate-arrow-icon collapsed">
                        <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Menu Levels</span>
                    </a>
                    <div id="collapseMenuLevel" class="collapse" data-parent="#menuTypes">
                        <ul class="list-unstyled inner-level-menu">
                            <li>
                                <a href="#">
                                    <i class="simple-icon-layers"></i> <span class="d-inline-block">Sub
                                            Level</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" data-toggle="collapse" data-target="#collapseMenuLevel2"
                                   aria-expanded="true" aria-controls="collapseMenuLevel2"
                                   class="rotate-arrow-icon collapsed">
                                    <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Another
                                            Level</span>
                                </a>
                                <div id="collapseMenuLevel2" class="collapse">
                                    <ul class="list-unstyled inner-level-menu">
                                        <li>
                                            <a href="#">
                                                <i class="simple-icon-layers"></i> <span class="d-inline-block">Sub
                                                        Level</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#" data-toggle="collapse" data-target="#collapseMenuDetached" aria-expanded="true"
                       aria-controls="collapseMenuDetached" class="rotate-arrow-icon collapsed">
                        <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Detached</span>
                    </a>
                    <div id="collapseMenuDetached" class="collapse">
                        <ul class="list-unstyled inner-level-menu">
                            <li>
                                <a href="#">
                                    <i class="simple-icon-layers"></i> <span class="d-inline-block">Sub
                                            Level</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>

        </div>
    </div>
</div>
