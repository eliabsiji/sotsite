
<!DOCTYPE html>
<html lang="en" data-style-switcher-options="{'showBordersStyle': true, 'showLayoutStyle': false, 'showBackgroundColor': false, 'changeLogo': false, 'borderRadius': 0, 'colorPrimary': '#da7940', 'colorSecondary': '#312227', 'colorTertiary': '#efece8', 'colorQuaternary': '#101019'}">


<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Home</title>

		<meta name="keywords" content="WebSite Template" />
		<meta name="description" content="">
		<meta name="author" content="">

		<!-- Favicon -->
		<link rel="shortcut icon" href="{{ asset('html/img/logo.png') }}" type="image/x-icon" />
		<link rel="apple-touch-icon" href="{{ asset('html/img/apple-touch-icon.png') }}">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->
		<link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CPlayfair+Display:400,400i,700%7CSintony:400,700,800&amp;display=swap" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{ asset('html/vendor/bootstrap/css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('html/vendor/fontawesome-free/css/all.min.css') }}">
		<link rel="stylesheet" href="{{ asset('html/vendor/animate/animate.compat.css') }}">
		<link rel="stylesheet" href="{{ asset('html/vendor/simple-line-icons/css/simple-line-icons.min.css') }}">
		<link rel="stylesheet" href="{{ asset('html/vendor/owl.carousel/assets/owl.carousel.min.css') }}">
		<link rel="stylesheet" href="{{ asset('html/vendor/owl.carousel/assets/owl.theme.default.min.css') }}">
		<link rel="stylesheet" href="{{ asset('html/vendor/magnific-popup/magnific-popup.min.css') }}">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{ asset('html/css/theme.css') }}">
		<link rel="stylesheet" href="{{ asset('html/css/theme-elements.css') }}">
		<link rel="stylesheet" href="{{ asset('html/css/theme-blog.css') }}">
		<link rel="stylesheet" href="{{ asset('html/css/theme-shop.css') }}">

		<!-- Demo CSS -->
		<link rel="stylesheet" href="{{ asset('html/css/demos/demo-church.css') }}">

		<!-- Skin CSS -->
		<link id="skinCSS" rel="stylesheet" href="{{ asset('html/css/skins/skin-church.css') }}">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="{{ asset('html/css/custom.css') }}">


		{{-- <!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-42715764-11"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-42715764-11');
		</script> --}}

	</head>
	<body>

		<div class="body">
			<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': false, 'stickyStartAt': 100, 'stickyHeaderContainerHeight': 70}">
				<div class="header-body border-top-0">
					<div class="header-top">
						<div class="container">
							<div class="row justify-content-between">
								<div class="col-auto">
									<p class="alternative-font-4 mb-0"><strong class="text-color-dark">Sword Of The Spirit Ministries, A Place to Belong!</strong></p>
								</div>
								<div class="col-auto d-flex align-items-center">
									<nav>
										<ul class="list list-unstyled d-flex text-1 mb-0">
											<li class="mb-0"><a href="{{ asset('html/demo-church-about-us.html#talkus') }}" class="alternative-font-4 text-decoration-none text-3-5 font-weight-bold">PLAN YOUR VISIT</a></li>
											<li class="mb-0 ms-4-5 d-none d-sm-block"><a href="{{ asset('html/demo-church-events.html') }}" class="alternative-font-4 text-decoration-none text-3-5 font-weight-bold">CALENDAR</a></li>
										</ul>
									</nav>
									<div class="header-nav-features d-none d-md-block ms-5-5">
										<ul class="header-social-icons social-icons social-icons-clean social-icons-icon-dark social-icons-medium me-2 mb-0 d-none d-sm-block ms-1">
											<li class="social-icons-instagram">
												<a href="https://www.instagram.com/clwocnorthampton?igshid=OGQ5ZDc2ODk2ZA==" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a>
											</li>
											<li class="social-icons-youtube">
												<a href="https://youtube.com/@SOTSMnorthampton" target="_blank" title="Youtube"><i class="fab fa-twitter"></i></a>
											</li>
											<li class="social-icons-facebook">
												<a href="https://m.facebook.com/story.php?story_fbid=pfbid02zDQF8c8XkrBbUC46x3EJFGi61MqntQETqSuEDFY9EEkmNsNKfM8xQ7bYbZZyAnvhl&id=100070144230445&sfnsn=scwspwa" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-row">
									<div class="header-logo">
										<a href="{{ asset('html/demo-church.html') }}">
											<img alt="" width="150" height="50" src="{{  asset('html/img/demos/church/logo2.png') }}">
										</a>
									</div>
								</div>
							</div>
							<div class="header-column justify-content-end">
								<div class="header-row">
									<div class="header-nav order-2 order-lg-1 alternative-font-4">
										<div class="header-nav-main header-nav-main-square header-nav-main-dark-text header-nav-main-effect-1 header-nav-main-sub-effect-1">
											<nav class="collapse">
												<ul class="nav nav-pills" id="mainNav">
													<li>
														<a class="nav-link {{ request()->is('/')
                                                            ? ' active' : '' }}" href="{{ route('home') }}">
															Home
														</a>
													</li>
													<li class="dropdown dropdown-full-color dropdown-primary">
														<a class="dropdown-item dropdown-toggle {{ request()->is('aboutus')
                                                            ? ' active' : '' }}" href="{{ route('aboutus') }}">
															Who We Are
														</a>
														<ul class="dropdown-menu">
															<li>
																<a class="dropdown-item" href="{{ route('aboutus') }}">Overview</a>
															</li>
															<li>
																<a class="dropdown-item" href="{{ route('ministers') }}">Our Minister</a>
															</li>

														</ul>
													</li>
													<li>
														<a class="nav-link {{ request()->is('sermons')
                                                            ? ' active' : '' }}" href="{{ route('sermons') }}">
															Sermons
														</a>
													</li>
													<li>
														<a class="nav-link {{ request()->is('programs')
                                                            ? ' active' : '' }}" href="{{ route('programs') }}">
															Our Events
														</a>
													</li>
													{{-- <li>
														<a class="nav-link {{ request()->is('gallery')
                                                            ? ' active' : '' }}" href="{{ route('gallery') }}">
															Gallery
														</a>
													</li> --}}
													<li>
														<a class="nav-link {{ request()->is('giving')
                                                            ? ' active' : '' }}" href="{{ route('giving') }}">
															Giving
														</a>
													</li>

                                                    <li>
														<a class="nav-link {{ request()->is('contact')
                                                            ? ' active' : '' }}" href="{{ route('contact') }}">
															Contact Us
														</a>
													</li>
												</ul>
											</nav>
										</div>
										<button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
											<i class="fas fa-bars"></i>
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
