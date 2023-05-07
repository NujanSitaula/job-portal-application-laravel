
<div class="navbar-header">
    <div class="d-flex">
        <!-- LOGO -->
        <div class="navbar-brand-box">
            <a href="index.html" class="logo logo-dark">
                <span class="logo-sm">
                    <img src="{{ asset('assets/images/logo-sm-dark.png') }}" alt="" height="20">
                </span>
                <span class="logo-lg">
                    <img src="{{ asset('assets/images/logo-dark.png') }}" alt="" height="18">
                </span>
            </a>

            <a href="index.html" class="logo logo-light">
                <span class="logo-sm">
                    <img src="{{ asset('assets/images/logo-sm-dark.png') }}" alt="" height="20">
                </span>
                <span class="logo-lg">
                    <img src="{{ asset('assets/images/logo-light.png') }}" alt="" height="18">
                </span>
            </a>
        </div>

        <button type="button" class="btn btn-sm px-3 font-size-16 d-lg-none header-item waves-effect waves-light" data-toggle="collapse" data-target="#topnav-menu-content">
            <i class="fa fa-fw fa-bars"></i>
        </button>

        <div class="topnav">
            <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

                <div class="collapse navbar-collapse" id="topnav-menu-content">
                    <ul class="navbar-nav">
                        <li class="nav-item ">
                            <a class="nav-link arrow-none" href="#" id="topnav-dashboard" role="button" aria-expanded="false">
                                Dashboard 
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-components" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Page Setting<div class="arrow-down"></div>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="topnav-components">
                                <a href="{{ route('admin.homepage.edit') }}" class="dropdown-item">Edit Homepage</a>
                                <a href="calendar.html" class="dropdown-item">Manage Testimonial</a>
                                <a href="calendar.html" class="dropdown-item">Menu Item</a>
                                <a href="calendar.html" class="dropdown-item">Menu Item</a>
                               

                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-pages" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               Job Section  <div class="arrow-down"></div>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="topnav-pages">

                                <a href="{{ route('admin.job.category') }}" class="dropdown-item">Category</a>
                                <a href="{{ route('admin.job.location') }}" class="dropdown-item">Location</a>
                                <a href="calendar.html" class="dropdown-item">Salary</a>
                                <a href="{{ route('admin.job.type') }}" class="dropdown-item">Job Type</a>
                                <a href="{{ route('admin.job.experience') }}" class="dropdown-item">Experience</a>


                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-charts" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Management <div class="arrow-down"></div>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="topnav-charts">
                                <div class="dropdown">
                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-form" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        User Management <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-form">
                                        <a href="form-elements.html" class="dropdown-item">Manage Employees</a>
                                        <a href="form-validation.html" class="dropdown-item">Manage Employers</a>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-table" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Hiring Management <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-table">
                                        <a href="tables-basic.html" class="dropdown-item">Manage Hirings</a>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-table" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Application Management <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-table">
                                        <a href="charts-apex.html" class="dropdown-item">Manage Applications</a>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-table" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Icons <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-table">
                                        <a href="icons-boxicons.html" class="dropdown-item">Boxicons</a>
                                        <a href="icons-materialdesign.html" class="dropdown-item">Material Design</a>
                                        <a href="icons-dripicons.html" class="dropdown-item">Dripicons</a>
                                        <a href="icons-fontawesome.html" class="dropdown-item">Font awesome</a>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-map" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Logs <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-map">
                                        <a href="maps-google.html" class="dropdown-item">Activity Log</a>
                                        <a href="maps-vector.html" class="dropdown-item">System Log</a>
                                    </div>
                                </div>

                                <div class="dropdown">
                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-layouts" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Layouts <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-layouts">
                                        <a href="layouts-vertical.html" class="dropdown-item">Vertical</a>
                                        <a href="layouts-preloader.html" class="dropdown-item">Preloader</a>
                                        <a href="layouts-boxed.html" class="dropdown-item">Boxed</a>
                                        <a href="layouts-topbar-light.html" class="dropdown-item">Topbar Light</a>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-pages" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Pages  <div class="arrow-down"></div>
                            </a>

                            <div class="dropdown-menu mega-dropdown-menu px-2 dropdown-mega-menu-lg dropdown-menu-right" aria-labelledby="topnav-pages">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div>

                                            <a href="pages-login.html" class="dropdown-item">Login</a>
                                            <a href="pages-register.html" class="dropdown-item">Register</a>
                                            <a href="pages-recoverpw.html" class="dropdown-item">Recover Password</a>
                                            <a href="pages-lock-screen.html" class="dropdown-item">Lock Screen</a>
                                            <a href="pages-starter.html" class="dropdown-item">Starter Page</a>
                                            <a href="pages-invoice.html" class="dropdown-item">Invoice</a>
                                            <a href="pages-profile.html" class="dropdown-item">Profile</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div>

                                            <a href="pages-maintenance.html" class="dropdown-item">Maintenance</a>
                                            <a href="pages-comingsoon.html" class="dropdown-item">Coming Soon</a>
                                            <a href="pages-timeline.html" class="dropdown-item">Timeline</a>
                                            <a href="pages-faqs.html" class="dropdown-item">FAQs</a>
                                            <a href="pages-pricing.html" class="dropdown-item">Pricing</a>
                                            <a href="pages-404.html" class="dropdown-item">Error 404</a>
                                            <a href="pages-500.html" class="dropdown-item">Error 500</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-pages" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               Logs  <div class="arrow-down"></div>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="topnav-pages">
                                <a href="{{ route('admin.job.location') }}" class="dropdown-item">Activity Log</a>
                                <a href="{{ route('admin.job.category') }}" class="dropdown-item">System Logs</a>
                                <a href="calendar.html" class="dropdown-item">Gateway Log</a>


                            </div>
                        </li>
                        

                    </ul>
                </div>
            </nav>
        </div>
    </div>

    <div class="d-flex">
        <div class="dropdown d-inline-block d-lg-none ml-2">
            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="mdi mdi-magnify"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0" aria-labelledby="page-header-search-dropdown">

                <form class="p-3">
                    <div class="form-group m-0">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="dropdown d-none d-sm-inline-block">
            <button type="button" class="btn header-item waves-effect" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img class="" src="{{ asset('assets/images/flags/us.jpg') }}" alt="Header Language" height="16">
            </button>
            <div class="dropdown-menu dropdown-menu-right">

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <img src="assets/images/flags/spain.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle">Spanish</span>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <img src="assets/images/flags/germany.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle">German</span>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <img src="assets/images/flags/italy.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle">Italian</span>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <img src="assets/images/flags/russia.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle">Russian</span>
                </a>
            </div>
        </div>

        <div class="dropdown d-none d-lg-inline-block ml-1">
            <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                <i class="mdi mdi-fullscreen"></i>
            </button>
        </div>

        <div class="dropdown d-inline-block">
            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="mdi mdi-bell-outline"></i>
                <span class="badge badge-danger badge-pill">3</span>
            </button>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0" aria-labelledby="page-header-notifications-dropdown">
                <div class="p-3">
                    <div class="row align-items-center">
                        <div class="col">
                            <h6 class="m-0"> Notifications </h6>
                        </div>
                        <div class="col-auto">
                            <a href="#!" class="small"> View All</a>
                        </div>
                    </div>
                </div>
                <div data-simplebar style="max-height: 230px;">
                    <a href="" class="text-reset notification-item">
                        <div class="media">
                            <div class="avatar-xs mr-3">
                                <span class="avatar-title bg-primary rounded-circle font-size-16">
                                    <i class="bx bx-cart"></i>
                                </span>
                            </div>
                            <div class="media-body">
                                <h6 class="mt-0 mb-1">Your order is placed</h6>
                                <div class="font-size-12 text-muted">
                                    <p class="mb-1">If several languages coalesce the grammar</p>
                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="" class="text-reset notification-item">
                        <div class="media">
                            <img src="assets/images/users/avatar-3.jpg" class="mr-3 rounded-circle avatar-xs" alt="user-pic">
                            <div class="media-body">
                                <h6 class="mt-0 mb-1">James Lemire</h6>
                                <div class="font-size-12 text-muted">
                                    <p class="mb-1">It will seem like simplified English.</p>
                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 hours ago</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="" class="text-reset notification-item">
                        <div class="media">
                            <div class="avatar-xs mr-3">
                                <span class="avatar-title bg-success rounded-circle font-size-16">
                                    <i class="bx bx-badge-check"></i>
                                </span>
                            </div>
                            <div class="media-body">
                                <h6 class="mt-0 mb-1">Your item is shipped</h6>
                                <div class="font-size-12 text-muted">
                                    <p class="mb-1">If several languages coalesce the grammar</p>
                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="" class="text-reset notification-item">
                        <div class="media">
                            <img src="assets/images/users/avatar-4.jpg" class="mr-3 rounded-circle avatar-xs" alt="user-pic">
                            <div class="media-body">
                                <h6 class="mt-0 mb-1">Salena Layfield</h6>
                                <div class="font-size-12 text-muted">
                                    <p class="mb-1">As a skeptical Cambridge friend of mine occidental.</p>
                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 hours ago</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="p-2 border-top">
                    <a class="btn btn-sm btn-link font-size-14 btn-block text-center" href="javascript:void(0)">
                        <i class="mdi mdi-arrow-right-circle mr-1"></i> View More..
                    </a>
                </div>
            </div>
        </div>

        <div class="dropdown d-inline-block">
            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img class="rounded-circle header-profile-user" src="{{ asset('assets/images/users/'.Auth::guard('admin')->user()->photo) }}" alt="Header Avatar">
                <span class="d-none d-xl-inline-block ml-1">{{ Auth::guard('admin')->user()->name }}</span>
                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-right">
                <!-- item-->
                <a class="dropdown-item" href="{{ route('admin.profile') }}"><i class="bx bx-user font-size-16 align-middle mr-1"></i> Profile</a>
                <a class="dropdown-item" href="#"><i class="bx bx-wallet font-size-16 align-middle mr-1"></i> My Wallet</a>
                <a class="dropdown-item d-block" href="#"><span class="badge badge-success float-right">11</span><i class="bx bx-wrench font-size-16 align-middle mr-1"></i> Settings</a>
                <a class="dropdown-item" href="#"><i class="bx bx-lock-open font-size-16 align-middle mr-1"></i> Lock screen</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item text-danger" href="{{ route('admin.logout') }}"><i class="bx bx-power-off font-size-16 align-middle mr-1 text-danger"></i> Logout</a>
            </div>
        </div>
    </div>
</div>
