<div class="ecaps-page-wrapper">
    <!-- Sidemenu Area -->
    <div class="ecaps-sidemenu-area">
        <!-- Desktop Logo -->
        <div class="ecaps-logo">
            <a href="{{route('administrator.dashboard')}}"><img class="desktop-logo" src="img/core-img/logo.png" alt="Desktop Logo"> <img class="small-logo" src="img/core-img/small-logo.png" alt="Mobile Logo"></a>
        </div>

        <!-- Side Nav -->
        <div class="ecaps-sidenav" id="ecapsSideNav">
            <!-- Side Menu Area -->
            <div class="side-menu-area">
                <!-- Sidebar Menu -->
                <nav>
                    <ul class="sidebar-menu" data-widget="tree">
                        <li class="sidemenu-user-profile d-flex align-items-center">
                            <div class="user-thumbnail">
                                <img src="img/rent.png" alt="">
                            </div>
                            <div class="user-content">
                                <h6>{{auth()->user()->name}}</h6>
                                <span>{{auth()->user()->role}}</span>
                            </div>
                        </li>

                        <li class="active"><a href="{{route('administrator.dashboard')}}"><i class="icon_lifesaver"></i> <span> DASHBOARD</span></a></li>
                        <li><a href="{{route('user.create')}}"><i class="fa fa-users"></i> <span> USERS</span></a></li>
                        <li><a href="{{route('project.type.create')}}"><i class="fa fa-language"></i> <span> PROJECT TYPES</span></a></li>
                        <li><a href="{{route('project.category.create')}}"><i class="fa fa-list"></i> <span> PRO CATEGORy</span></a></li>
                        <li><a href="{{route('clients.create')}}"><i class="icon_cogs"></i> <span> CLIENTS</span></a></li>
                        <li><a href="brands"><i class="icon_cog"></i> <span> PROJECTS</span></a></li>
                        <li><a href="drivers"><i class="fa fa-cogs"></i> <span> TEAM</span></a></li>
                        <li><a href="cars"><i class="fa fa-sitemap"></i> <span>SERVICES</span></a></li>
                        <li><a href="orders"><i class="fa fa-shopping-cart"></i> <span> ORDERS</span></a></li>
                        <!-- <li><a href="payments"><i class="fa fa-bank"></i> <span> PAYMENTS</span></a></li> -->
                        <li><a href="{{route('logout')}}"><i class="fa fa-lock"></i> <span> LOGOUT</span></a></li>

                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="ecaps-page-content">
            <!-- Top Header Area -->
        <header class="top-header-area d-flex align-items-center justify-content-between">
            <div class="left-side-content-area d-flex align-items-center">
                <!-- Mobile Logo -->
                <div class="mobile-logo mr-3 mr-sm-4">
                    <a href="./"><img src="img/core-img/small-logo.png" alt="Mobile Logo"></a>
                </div>

                <!-- Triggers -->
                <div class="ecaps-triggers mr-1 mr-sm-3">
                    <div class="menu-collasped" id="menuCollasped">
                        <i class="zmdi zmdi-menu"></i>
                    </div>
                    <div class="mobile-menu-open" id="mobileMenuOpen">
                        <i class="zmdi zmdi-menu"></i>
                    </div>
                </div>

                <!-- Left Side Nav -->
                <ul class="left-side-navbar d-flex align-items-center">
                    <li class="hide-phone app-search mr-15">
                        <form role="search" class=""><input type="text" placeholder="Search..." class="form-control"> <button type="submit" class="mr-0"><i class="fa fa-search"></i></button></form>
                    </li>
                </ul>
            </div>

            <div class="right-side-navbar d-flex align-items-center justify-content-end">
                <!-- Mobile Trigger -->
                <div class="right-side-trigger" id="rightSideTrigger">
                    <i class="ti-align-left"></i>
                </div>

                <!-- Top Bar Nav -->
                <ul class="right-side-content d-flex align-items-center">



                    <li class="nav-item dropdown">
                        <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="border-radius-50" src="img/member-img/1.png" alt=""></button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <!-- User Profile Area -->
                            <div class="user-profile-area">
                                <div class="user-profile-heading">
                                    <!-- Thumb -->
                                    <div class="profile-thumbnail">
                                        <img class="border-radius-50" src="img/member-img/1.png" alt="">
                                    </div>
                                    <!-- Profile Text -->
                                    <div class="profile-text">
                                        <h6>Ajoy Das</h6>
                                        <span>ajoydas@example.com</span>
                                    </div>
                                </div>
                                <a href="#" class="dropdown-item"><i class="ti-user text-default" aria-hidden="true"></i> My profile</a>

                                <a href="#" class="dropdown-item"><i class="ti-unlink text-warning" aria-hidden="true"></i> Sign-out</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </header>
