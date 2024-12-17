<!DOCTYPE html>
<html lang="zxx">

	<head>
	    <meta charset="utf-8" />
	    <meta http-equiv="x-ua-compatible" content="IE=edge" />
	    <meta name="viewport" content="width=device-width, initial-scale=1" />
	    <meta name="description" content="" />
	    <meta name="keyword" content="" />
	    <meta name="author" content="WRAPCODERS" />
	    @yield('title')

	    <!-- Css -->
	    <link rel="shortcut icon" type="image/x-icon" href="{{asset('public/assets/images/logo-abbr.png')}}" />
    	<link rel="stylesheet" href="{{asset('public/assets/css/bootstrap.min.css')}}">
    	<link rel="stylesheet" href="{{asset('public/assets/css/style.css')}}">
	    <link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/vendors.min.css')}}" />
	    <link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/theme.min.css')}}" />
	    <link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/jquery.time-to.min.css')}}" />

	    @yield('style')
	</head>

	<body>

		<!-- Sidebar -->
	    <nav class="nxl-navigation">
	        <div class="navbar-wrapper">
	            <div class="m-header">
	                <a href="index.html" class="b-brand">

	                    <img src="{{asset('public/assets/images/logo.svg')}}" alt="" class="logo logo-lg" />
	                    <img src="{{asset('public/assets/images/logo-abbr.png')}}" alt="" class="logo logo-sm" />
	                </a>
	            </div>
	            <div class="navbar-content">
	                <ul class="nxl-navbar">
	                    <li class="nxl-item nxl-hasmenu">
	                        <a href="javascript:void(0);" class="nxl-link ">
	                            <span class="nxl-micon"><i class="feather-pie-chart"></i></span>
	                            <span class="nxl-mtext">Investor CRM</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
	                        </a>
	                        <ul class="nxl-submenu">
	                            <li class="nxl-item"><a class="nxl-link" href="{{route('founders.dashboard')}}">Dashboard</a></li>
	                            <li class="nxl-item"><a class="nxl-link" href="{{route('founders.prospects')}}">My Prospects</a></li>
	                            <li class="nxl-item"><a class="nxl-link" href="{{route('founders.service_requests')}}">SR Status</a></li>
	                            
	                        </ul>
	                    </li>
	                    <li class="nxl-item nxl-hasmenu">
	                        <a href="javascript:void(0);" class="nxl-link">
	                            <span class="nxl-micon"><i class="feather-hard-drive"></i></span>
	                            <span class="nxl-mtext">Pitch Deck Hosting</span>
	                            <span class="nxl-arrow">
	                                <i class="feather-chevron-right"></i>
	                            </span>
	                        </a>
	                        <ul class="nxl-submenu">
	                            <li class="nxl-item"><a class="nxl-link" href="{{route('founders.pitch_decks.create')}}">Deck Creation/ Upload</a></li>
	                            <li class="nxl-item"><a class="nxl-link" href="{{route('founders.pitch_decks.template')}}">Deck Designer Templates</a></li>
	                            <li class="nxl-item"><a class="nxl-link" href="{{route('founders.pitch_decks.review')}}">Deck Review</a></li>
	                            <li class="nxl-item"><a class="nxl-link" href="{{route('founders.pitch_decks.status')}}">Deck Lock/ Release</a></li>
	                            <li class="nxl-item"><a class="nxl-link" href="{{route('founders.pitch_decks.outreach_email')}}">Outreach Email</a></li>
	                            <li class="nxl-item"><a class="nxl-link" href="{{route('founders.pitch_decks.cv')}}">Your CV for Investor View</a></li>
	                        </ul>
	                    </li>
	                    <li class="nxl-item nxl-hasmenu">
	                        <a href="javascript:void(0);" class="nxl-link">
	                            <span class="nxl-micon"><i class="feather-database"></i></span>
	                            <span class="nxl-mtext">Investor Database</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
	                        </a>
	                        <ul class="nxl-submenu">
	                            <li class="nxl-item"><a class="nxl-link" href="{{route('founders.databases.free_db')}}">Sample (Free)</a></li>
	                            <li class="nxl-item"><a class="nxl-link" href="{{route('founders.databases.full_db')}}">Full Database (Curated)</a></li>
	                            <li class="nxl-item"><a class="nxl-link" href="{{route('founders.databases.addition_to_db')}}">Addition to DB</a></li>
	                           
	                        </ul>
	                    </li>
	                    <li class="nxl-item nxl-hasmenu">
	                        <a href="javascript:void(0);" class="nxl-link">
	                            <span class="nxl-micon"><i class="feather-book-open"></i></span>
	                            <span class="nxl-mtext">Scientia Library</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
	                        </a>
	                        <ul class="nxl-submenu">
	                            <li class="nxl-item nxl-hasmenu">
	                                <a href="javascript:void(0);" class="nxl-link">
	                                    <span class="nxl-micon"><i class="feather-folder"></i></span>
	                                    <span class="nxl-mtext">Startup Docs</span>
	                                    <span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
	                                </a>
	                                <ul class="nxl-submenu">
	                                    <li class="nxl-item"><a class="nxl-link" href="{{route('founders.scientia_libraries.deck_designer')}}">Deck Designer</a></li>
	                                    <li class="nxl-item"><a class="nxl-link" href="{{route('founders.scientia_libraries.deck_template')}}">Deck Templates</a></li>
	                                    <li class="nxl-item"><a class="nxl-link" href="{{route('founders.scientia_libraries.financal_modeling')}}">Financial Modeling </a></li>
	                                </ul>
	                            </li>
	                            <li class="nxl-item nxl-hasmenu">
	                                <a href="javascript:void(0);" class="nxl-link">
	                                    <span class="nxl-micon"><i class="feather-book"></i></span>
	                                    <span class="nxl-mtext">Essential Readings</span>
	                                    <span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
	                                </a>
	                                <ul class="nxl-submenu">
	                                    <li class="nxl-item"><a class="nxl-link" href="{{route('founders.scientia_libraries.blog')}}">Blogs </a></li>
	                            		<li class="nxl-item"><a class="nxl-link" href="{{route('founders.scientia_libraries.podcast')}}">Podcasts</a></li>
	                            		<li class="nxl-item"><a class="nxl-link" href="{{route('founders.scientia_libraries.YT')}}">YT</a></li>
	                                </ul>
	                            </li>
	                           
	                            <li class="nxl-item nxl-hasmenu"><a class="nxl-link" href="{{route('founders.scientia_libraries.market_watch')}}">Market Watch</a></li>
	                        </ul>
	                    </li>
	                    <li class="nxl-item nxl-hasmenu">
	                        <a href="javascript:void(0);" class="nxl-link nohover">
	                            <span class="nxl-mtext">Partner's Hub: Service Request</span>
	                        </a>
	                        
	                    </li>
	                    <li class="nxl-item nxl-hasmenu">
	                        <a href="javascript:void(0);" class="nxl-link">
	                            <span class="nxl-micon"><i class="feather-sliders"></i></span>
	                            <span class="nxl-mtext">Core Services</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
	                        </a>
	                        <ul class="nxl-submenu">
	                            <li class="nxl-item"><a class="nxl-link" href="{{route('founders.core_services.pitch_deck')}}">Pitch Deck Preparation</a></li>
	                            <li class="nxl-item"><a class="nxl-link" href="{{route('founders.core_services.financial_modeling')}}">Financial Modeling</a></li>
	                            <li class="nxl-item"><a class="nxl-link" href="{{route('founders.core_services.market_research')}}">Market Research & Data</a></li>
	                            <li class="nxl-item"><a class="nxl-link" href="{{route('founders.core_services.comprehensive')}}">Comprehensive</a></li>
	                        </ul>
	                    </li>
	                    <li class="nxl-item nxl-hasmenu">
	                        <a href="javascript:void(0);" class="nxl-link">
	                            <span class="nxl-micon"><i class="feather-tool"></i></span>
	                            <span class="nxl-mtext">Allied Services</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
	                        </a>
	                        <ul class="nxl-submenu">
	                            <li class="nxl-item"><a class="nxl-link" href="{{route('founders.allied_services.legal')}}">Legal</a></li>
	                            <li class="nxl-item"><a class="nxl-link" href="{{route('founders.allied_services.regulatory')}}">Regulatory</a></li>
	                            <li class="nxl-item"><a class="nxl-link" href="{{route('founders.allied_services.copyright')}}">Patent & Copyright</a></li>
	                            <li class="nxl-item"><a class="nxl-link" href="{{route('founders.allied_services.development')}}">IT & Development</a></li>
	                            <li class="nxl-item"><a class="nxl-link" href="{{route('founders.allied_services.accounting')}}">Accouting & Taxation</a></li>
	                            
	                        </ul>
	                    </li>
	                    
	                </ul>
	                <div class="card text-center">
	                    <div class="card-body">
	                        <i class="feather-credit-card fs-4 text-dark"></i>
	                        <h6 class="mt-2 text-dark fw-bolder">Lorem Ipsum</h6>
	                        <p class="fs-11 my-3 text-dark">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
	                        <a href="dashboard_subscribe.html" class="btn btn-primary text-dark w-100">Go Premium</a>
	                    </div>
	                </div>
	                <!-- <div class="card text-center">
	                	<div class="card-body">
	                		<h6 class="mb-3  text-dark fw-bolder">Plan Expire Soon</h6>
	                		<div data-time-countdown="countdown_1"></div>
	                		<p class="fs-11 my-3 text-dark">Your Subscription is about to expire. Renew your subscription to get uninterrupted services </p>
	                		<a href="dashboard.html" class="btn btn-primary text-dark w-100">Subscribe</a>
	                	</div>
                	</div> -->
	                
	            </div>
	        </div>
	    </nav>

	    <!-- Header -->
	    <header class="nxl-header">
	        <div class="header-wrapper">
	            <div class="header-left d-flex align-items-center gap-4">
	                <a href="javascript:void(0);" class="nxl-head-mobile-toggler" id="mobile-collapse">
	                    <div class="hamburger hamburger--arrowturn">
	                        <div class="hamburger-box">
	                            <div class="hamburger-inner"></div>
	                        </div>
	                    </div>
	                </a>
	                <div class="nxl-navigation-toggle">
	                    <a href="javascript:void(0);" id="menu-mini-button">
	                        <i class="feather-align-left"></i>
	                    </a>
	                    <a href="javascript:void(0);" id="menu-expend-button" style="display: none">
	                        <i class="feather-arrow-right"></i>
	                    </a>
	                </div>
	            </div>
	            <div class="header-right ms-auto">
	                <div class="d-flex align-items-center">  
	                    <div class="nxl-h-item d-none d-sm-flex">
	                        <div class="full-screen-switcher">
	                            <a href="javascript:void(0);" class="nxl-head-link me-0" onclick="$('body').fullScreenHelper('toggle');">
	                                <i class="feather-maximize maximize"></i>
	                                <i class="feather-minimize minimize"></i>
	                            </a>
	                        </div>
	                    </div> 

	                    <div class="dropdown nxl-h-item">
	                        <a class="nxl-head-link" data-bs-toggle="dropdown" href="#" role="button" data-bs-auto-close="outside">
	                            <i class="feather-bell"></i>
	                            <span class="badge bg-danger nxl-h-badge">3</span>
	                        </a>
	                        <div class="dropdown-menu dropdown-menu-end nxl-h-dropdown nxl-notifications-menu">
	                            <div class="d-flex justify-content-between align-items-center notifications-head">
	                                <h6 class="fw-bold text-dark mb-0">Notifications</h6>
	                                <a href="javascript:void(0);" class="fs-11 text-success text-end ms-auto" data-bs-toggle="tooltip" title="Make as Read">
	                                    <i class="feather-check"></i>
	                                    <span>Make as Read</span>
	                                </a>
	                            </div>
	                            <div class="notifications-item">
	                            	<img src="{{asset('public/assets/images/profile-placeholder.png')}}" alt="" class="rounded me-3 border" />
	                                <div class="notifications-desc">
	                                    <a href="javascript:void(0);" class="font-body text-truncate-2-line"> <span class="fw-semibold text-dark">Malanie Hanvey</span> We should talk about that at lunch!</a>
	                                    <div class="d-flex justify-content-between align-items-center">
	                                        <div class="notifications-date text-muted border-bottom border-bottom-dashed">2 minutes ago</div>
	                                        <div class="d-flex align-items-center float-end gap-2">
	                                            <a href="javascript:void(0);" class="d-block wd-8 ht-8 rounded-circle bg-gray-300" data-bs-toggle="tooltip" title="Make as Read"></a>
	                                            <a href="javascript:void(0);" class="text-danger" data-bs-toggle="tooltip" title="Remove">
	                                                <i class="feather-x fs-12"></i>
	                                            </a>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="notifications-item">
	                            	<img src="{{asset('public/assets/images/profile-placeholder.png')}}" alt="" class="rounded me-3 border" />
	                                <div class="notifications-desc">
	                                    <a href="javascript:void(0);" class="font-body text-truncate-2-line"> <span class="fw-semibold text-dark">Valentine Maton</span> You can download the latest invoices now.</a>
	                                    <div class="d-flex justify-content-between align-items-center">
	                                        <div class="notifications-date text-muted border-bottom border-bottom-dashed">36 minutes ago</div>
	                                        <div class="d-flex align-items-center float-end gap-2">
	                                            <a href="javascript:void(0);" class="d-block wd-8 ht-8 rounded-circle bg-gray-300" data-bs-toggle="tooltip" title="Make as Read"></a>
	                                            <a href="javascript:void(0);" class="text-danger" data-bs-toggle="tooltip" title="Remove">
	                                                <i class="feather-x fs-12"></i>
	                                            </a>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="notifications-item">
	                                <img src="{{asset('public/assets/images/profile-placeholder.png')}}" alt="" class="rounded me-3 border" />
	                                <div class="notifications-desc">
	                                    <a href="javascript:void(0);" class="font-body text-truncate-2-line"> <span class="fw-semibold text-dark">Archie Cantones</span> Don't forget to pickup Jeremy after school!</a>
	                                    <div class="d-flex justify-content-between align-items-center">
	                                        <div class="notifications-date text-muted border-bottom border-bottom-dashed">53 minutes ago</div>
	                                        <div class="d-flex align-items-center float-end gap-2">
	                                            <a href="javascript:void(0);" class="d-block wd-8 ht-8 rounded-circle bg-gray-300" data-bs-toggle="tooltip" title="Make as Read"></a>
	                                            <a href="javascript:void(0);" class="text-danger" data-bs-toggle="tooltip" title="Remove">
	                                                <i class="feather-x fs-12"></i>
	                                            </a>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="text-center notifications-footer">
	                                <a href="javascript:void(0);" class="fs-13 fw-semibold text-dark">Alls Notifications</a>
	                            </div>
	                        </div>
	                    </div>
	                    
	                    <div class="dropdown nxl-h-item ">
	                        <a href="javascript:void(0);" data-bs-toggle="dropdown" role="button" data-bs-auto-close="outside" class="ms-3 me-3">
	                            <img src="{{asset('public/assets/images/profile-placeholder.png')}}" alt="user-image" class="img-fluid user-avtar me-0" />
	                        </a>
	                        <div class="dropdown-menu dropdown-menu-end nxl-h-dropdown nxl-user-dropdown">
	                            <div class="dropdown-header">
	                                <div class="d-flex align-items-center">
	                                    <img src="{{asset('public/assets/images/profile-placeholder.png')}}" alt="user-image" class="img-fluid user-avtar" />
	                                    <div>
	                                        <h6 class="text-dark mb-0">Alexandra Della <span class="badge bg-soft-success text-success ms-1">PRO</span></h6>
	                                        <span class="fs-12 fw-medium text-muted">alex.della@outlook.com</span>
	                                    </div>
	                                </div>
	                            </div>
	                           
	                        
	                            <a href="javascript:void(0);" class="dropdown-item">
	                                <i class="feather-bell"></i>
	                                <span>Notifications</span>
	                            </a>
	                            
	                            <div class="dropdown-divider"></div>
	                            <a href="{{route('login')}}" class="dropdown-item">
	                                <i class="feather-log-out"></i>
	                                <span>Logout</span>
	                            </a>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </header>

	    <!-- Main Body -->
	    <main class="nxl-container">

	    	<!-- Body -->
	        <div class="nxl-content">

	        	@yield('body')

	        </div>

	        <!-- Footer -->
	        <footer class="footer">
	            <p class="fs-11 text-muted fw-medium text-uppercase mb-0 copyright">
	                <span>Copyright © <?php echo date('Y'); ?></span>
	            </p>
	            <div class="d-flex align-items-center gap-4">
	                <a href="javascript:void(0);" class="fs-11 fw-semibold text-uppercase">Help</a>
	                <a href="javascript:void(0);" class="fs-11 fw-semibold text-uppercase">Terms</a>
	                <a href="javascript:void(0);" class="fs-11 fw-semibold text-uppercase">Privacy</a>
	            </div>
	        </footer>

	    </main>
	   	
	   	<!-- Script -->
		<script src="{{asset('public/assets/js/vendors.min.js')}}"></script>
		<script src="{{asset('public/assets/js/circle-progress.min.js')}}"></script>
		<script src="{{asset('public/assets/js/jquery.time-to.min.js')}}"></script>
		<script src="{{asset('public/assets/js/common-init.min.js')}}"></script>
		<script src="{{asset('public/assets/js/dashboard-init.min.js')}}"></script>
		<script src="{{asset('public/assets/js/daterangepicker.min.js')}}"></script>
		<script src="{{asset('public/assets/js/widgets-tables-init.min.js')}}"></script>
		<script src="{{asset('public/assets/js/theme-customizer-init.min.js')}}"></script>

		@yield('script')

	</body>

</html>