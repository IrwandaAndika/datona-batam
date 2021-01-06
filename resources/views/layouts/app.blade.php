<!DOCTYPE html>
<html>
    <head>
        <!-- Basic -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>{{ config('app.name', 'Lembaga Pendidikan Manajemen Indonesia') }} @yield('title')</title>
        <meta name="keywords" content="HTML5 Template" />
        <meta name="description" content="LPMI Training Centre">
        <meta name="author" content="lpmi-tc.com">
        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ asset('img/LPMI.ico') }}" type="image/x-icon" />
        <link rel="apple-touch-icon" href="{{ asset('img/apple-touch-icon.png') }}">
        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
        <!-- Web Fonts  -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light%7CPlayfair+Display:400" rel="stylesheet" type="text/css">
        <!-- Vendor CSS -->
        @include('layouts.front.vendor-css-files')
        <!-- CSS -->        
        @include('layouts.front.css-files')
        <!-- Javascripts -->
        @include('layouts.front.js-top-files')
    </head>
    <body>
        <div class="body">
            <header id="header" class="header-semi-transparent-light header-transparent-dark-bottom-border header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
                <div class="header-body border-top-0 bg-light box-shadow-none">
                    <div class="header-container container">
                        <div class="header-row">
                            <div class="header-column">
                                <div class="header-row">
                                    <div class="header-logo">
                                        <a href="/">
                                            <img alt="Porto" width="60" height="60" src="{{ asset('img/DATONA-logo.png')}}">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="header-column justify-content-end">
                                <div class="header-row">
                                    <div class="header-nav header-nav-links header-nav-dropdowns-light header-nav-dark-text order-2 order-lg-1">
                                        <div class="header-nav-main header-nav-main-mobile-dark header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                            <nav class="collapse">
                                                <ul class="nav nav-pills" id="mainNav">
                                                    <li>
                                                        <a class="nav-link {{ set_active('home') }}" href="{{ url('/home') }}">
                                                        Home
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="nav-link {{ set_active('about') }}" href="{{ route('about') }}">
                                                        About Us
                                                        </a>
                                                    </li>
                                                    <li class="dropdown dropdown-primary">
														<a class="dropdown-toggle nav-link {{ set_active('expertise') }}" href="{{ route('expertise') }}">
															Expertise
														</a>
														<ul class="dropdown-menu">
															<li>
																<a class="dropdown-item" href="{{ route('expertise.hcm') }}">
																	HR Management Consulting
																</a>
															</li>
															<li>
																<a class="dropdown-item" href="{{ route('expertise.industrialrel') }}">
																	Industrial Relation Consulting
																</a>
															</li>
															<li>
																<a class="dropdown-item" href="{{ route('expertise.headhunting') }}">
																	Head Hunting Service
																</a>
															</li>
														</ul>
													</li>
                                                    <li>
                                                        <a class="nav-link {{ set_active('cases') }}" href="{{ route('cases') }}">
                                                        Cases
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="nav-link {{ set_active('testimonials') }}" href="{{ route('testimonials') }}">
                                                        Testimonials
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="nav-link {{ set_active('team') }}" href="{{ route('team') }}">
                                                        Team
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="nav-link {{ set_active('partnerships') }}" href="{{ route('partnerships') }}">
                                                        Partnerships
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="nav-link {{ set_active('gallery') }}" href="{{ route('gallery') }}">
                                                        Gallery
                                                        </a>
                                                        <ul class="dropdown-menu">
															<li>
																<a class="dropdown-item" href="{{ route('gallery.government') }}">
																	Government
																</a>
															</li>
															<li>
																<a class="dropdown-item" href="{{ route('gallery.private') }}">
																	Private
																</a>
															</li>
														</ul>
                                                    </li>
                                                    <li>
                                                        <a class="nav-link {{ set_active('contact') }}" href="{{ route('contact') }}">
                                                        Contact Us
                                                        </a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                        <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
                                        <i class="fas fa-bars"></i>
                                        </button>
                                    </div>
                                    <div class="ml-2 order-1 order-lg-2">
                                        <ul class="header-social-icons social-icons d-none d-sm-block social-icons-clean ml-0">
                                            <li class="social-icons-facebook"><a href="http://www.facebook.com/lpmibatam" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                            <li class="social-icons-twitter"><a href="http://www.twitter.com/lpmibatam" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                            <li class="social-icons-linkedin"><a href="http://www.linkedin.com/paimin-siahaan-se-m-hum-26557822" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li>
                                                @if (\Illuminate\Support\Facades\Auth::guard('web')->check())
                                                <a class="dropdown-item" href="{{ route('user.logout') }}">
                                                    <i class="fas fa-sign-out-alt"></i> {{ _('logout') }}
                                                </a>
                
                                                <form id="user-logout-form" action="{{ route('user.logout') }}" method="GET" style="...">
                                                    @csrf
                                                </form>
                                                @endif
                                            </li> 
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <div role="main" class="main">				
                @yield('content')
            </div>
            <footer id="footer">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 text-center pb-4">
							<p>2020 ©  <span class="text-color-light">Datona Consulting</span> - Copyright All Rights Reserved</p>
                        </div>
					</div>
				</div>
			</footer>
        </div>
        <!-- Vendor Javascript-->		
        @include('layouts.front.vendor-js-files')
        <!-- Javascript-->	
        @include('layouts.front.js-bottom-files')
    </body>
</html>