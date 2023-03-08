<!DOCTYPE html>
<html lang="zxx">
	<head>
		<meta charset="utf-8" />
		<meta name="author" content="Themezhub" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
        <title>@yield('page_title') - JobScout</title>
		 
        <!-- Custom CSS -->
        <link href="{{ asset('frontEndAssets/css/styles.css') }}" rel="stylesheet">
		
    </head>
	
    <body>
	
		 <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
       <div class="preloader"></div>
		
        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">
		
            <!-- ============================================================== -->
            <!-- Top header  -->
            <!-- ============================================================== -->
			<div class="py-2 bg-dark">
				<div class="container">
					<div class="row">
						
						<div class="col-xl-4 col-lg-4 col-md-5 col-sm-12 hide-ipad">
							<div class="top_first"><a href="callto:(+84)0123456789" class="medium text-light">(+84) 0123 456 789</a></div>
						</div>
						
						<div class="col-xl-4 col-lg-4 col-md-5 col-sm-12 hide-ipad">
							<div class="top_second text-center"><p class="medium text-light m-0 p-0">Get Free delivery from $2000 <a href="#" class="medium text-light text-underline">Shop Now</a></p></div>
						</div>
						
						<!-- Right Menu -->
						<div class="col-xl-4 col-lg-4 col-md-5 col-sm-12">

							<div class="currency-selector dropdown js-dropdown float-right">
								<a href="javascript:void(0);" data-toggle="dropdown" class="popup-title"  title="Currency" aria-label="Currency dropdown">
									<span class="hidden-xl-down medium text-light">Currency:</span>
									<span class="iso_code medium text-light">$USD</span>
									<i class="fa fa-angle-down medium text-light"></i>
								</a>
								<ul class="popup-content dropdown-menu">  
									<li><a title="Euro" href="#" class="dropdown-item medium text-medium">EUR €</a></li>
									<li class="current"><a title="US Dollar" href="#" class="dropdown-item medium text-medium">USD $</a></li>
								</ul>
							</div>
							
							<!-- Choose Language -->
						
							<div class="language-selector-wrapper dropdown js-dropdown float-right mr-3">
								<a class="popup-title" href="javascript:void(0)" data-toggle="dropdown" title="Language" aria-label="Language dropdown">
									<span class="hidden-xl-down medium text-light">Language:</span>
									<span class="iso_code medium text-light">English</span>
									<i class="fa fa-angle-down medium text-light"></i>
								</a>
								<ul class="dropdown-menu popup-content link">
									<li class="current"><a href="javascript:void(0);" class="dropdown-item medium text-medium"><img src="assets/img/1.jpg" alt="en" width="16" height="11" /><span>English</span></a></li>
									<li><a href="javascript:void(0);" class="dropdown-item medium text-medium"><img src="assets/img/2.jpg" alt="fr" width="16" height="11" /><span>Français</span></a></li>
									<li><a href="javascript:void(0);" class="dropdown-item medium text-medium"><img src="assets/img/3.jpg" alt="de" width="16" height="11" /><span>Deutsch</span></a></li>
									<li><a href="javascript:void(0);" class="dropdown-item medium text-medium"><img src="assets/img/4.jpg" alt="it" width="16" height="11" /><span>Italiano</span></a></li>
									<li><a href="javascript:void(0);" class="dropdown-item medium text-medium"><img src="assets/img/5.jpg" alt="es" width="16" height="11" /><span>Español</span></a></li>
									<li ><a href="javascript:void(0);" class="dropdown-item medium text-medium"><img src="assets/img/6.jpg" alt="ar" width="16" height="11" /><span>اللغة العربية</span></a></li>
								</ul>
							</div>
							
							<div class="currency-selector dropdown js-dropdown float-right mr-3">
								<a href="javascript:void(0);" class="text-light medium">Wishlist</a>
							</div>
							
							<div class="currency-selector dropdown js-dropdown float-right mr-3">
								<a href="javascript:void(0);" class="text-light medium">My Account</a>
							</div>
							
						</div>
						
					</div>
				</div>
			</div>
            <!-- Start Navigation -->
			<div class="header header-light dark-text @yield('header_shadow')">
				<div class="container">
					<nav id="navigation" class="navigation navigation-landscape">
						<div class="nav-header">
							<a class="nav-brand" href="{{ route('home') }}">
								<img src="{{ asset('frontEndAssets/img/jobscout.png') }}" class="logo" alt="" />
							</a>
							<div class="nav-toggle"></div>
							<div class="mobile_nav">
								<ul>
								<li>
									<a href="#" data-toggle="modal" data-target="#login" class="theme-cl fs-lg">
										<i class="lni lni-user"></i>
									</a>
								</li>
								<li>
									<a href="dashboard-post-job.html" class="crs_yuo12 w-auto text-white theme-bg">
										<span class="embos_45"><i class="fas fa-plus-circle mr-1 mr-1"></i>Post Job</span>
									</a>
								</li>
								</ul>
							</div>
						</div>
						<div class="nav-menus-wrapper" style="transition-property: none;">
							@include('Frontend.layouts.nav')
							<ul class="nav-menu nav-menu-social align-to-right">
								<li>
									<a href="#" data-toggle="modal" data-target="#login" class="ft-medium">
										<i class="lni lni-user mr-2"></i>Sign In
									</a>
								</li>
								<li class="add-listing theme-bg">
									<a href="{{ route('employer.signin') }}" >
										<i class="lni lni-circle-plus mr-1"></i> Post a Job
									</a>
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
			<!-- End Navigation -->
			<div class="clearfix"></div>