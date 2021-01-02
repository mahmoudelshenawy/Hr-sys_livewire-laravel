<!DOCTYPE html>
<html lang="{{lang()}}">
	
@include('layouts.partials.header')
	<body class="horizontalmenu">

		

		<!-- Loader -->
		<div id="global-loader">
			<img src="{{ asset('assets/img/loader.svg') }}" class="loader-img" alt="Loader">
		</div>
		<!-- End Loader -->

		<!-- Page -->
		<div class="page">

			<!-- Main Header-->
			<div class="main-header side-header">
				<div class="container">
					<div class="main-header-left">
						<a class="main-header-menu-icon d-lg-none" href="" id="mainNavShow"><span></span></a>
						<a class="main-logo" href="/">
							<img src="../../assets/img/brand/logo.png" class="header-brand-img desktop-logo" alt="logo">
							<img src="../../assets/img/brand/logo-light.png" class="header-brand-img desktop-logo theme-logo" alt="logo">
						</a>
					</div>
					<div class="main-header-center">
						<div class="responsive-logo">
							<a href="/"><img src="../../assets/img/brand/logo.png" class="mobile-logo" alt="logo"></a>
							<a href="/"><img src="../../assets/img/brand/logo-light.png" class="mobile-logo-dark" alt="logo"></a>
						</div>
						<div class="input-group">
							<div class="input-group-btn search-panel">
								<select class="form-control select2-no-search">
									<option label="All categories">
									</option>
									<option value="IT Projects">
										IT Projects
									</option>
									<option value="Business Case">
										Business Case
									</option>
									<option value="Microsoft Project">
										Microsoft Project
									</option>
									<option value="Risk Management">
										Risk Management
									</option>
									<option value="Team Building">
										Team Building
									</option>
								</select>
							</div>
							<input type="search" class="form-control" placeholder="Search for anything...">
							<button class="btn search-btn"><i class="fe fe-search"></i></button>
						</div>
					</div>
					<div class="main-header-right">
						<div class="dropdown header-search">
							<a class="nav-link icon header-search">
								<i class="fe fe-search"></i>
							</a>
							<div class="dropdown-menu">
								<div class="main-form-search p-2">
									<div class="input-group">
										<div class="input-group-btn search-panel">
											<select class="form-control select2-no-search">
												<option label="All categories">
												</option>
												<option value="IT Projects">
													IT Projects
												</option>
												<option value="Business Case">
													Business Case
												</option>
												<option value="Microsoft Project">
													Microsoft Project
												</option>
												<option value="Risk Management">
													Risk Management
												</option>
												<option value="Team Building">
													Team Building
												</option>
											</select>
										</div>
										<input type="search" class="form-control" placeholder="Search for anything...">
										<button class="btn search-btn"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></button>
									</div>
								</div>
							</div>
						</div>
						<div class="dropdown main-header-notification flag-dropdown">
							<a class="nav-link icon country-Flag d-flex">
                                <span class="avatar mx-auto align-self-center bg-transparent">
                                    @if (lang() == 'ar')
                                    <img src="{{ asset('assets/img/flags/eg.svg') }}" alt="img" class="" height="23" width="30"> 
                                    @else
                                    <img src="{{ asset('assets/img/flags/us_flag.jpg') }}" alt="img" class="" height="23" width="30">
                                    @endif
                                </span>
							</a>
							<div class="dropdown-menu">
								<a href="#" class="dropdown-item d-flex ">
									<span class="avatar  ml-3 align-self-center bg-transparent"><img src="{{ asset('assets/img/flags/eg.svg') }}" alt="img"></span>
									<div class="d-flex">
										<span class="mt-2">Arabic</span>
									</div>
								</a>
								<a href="#" class="dropdown-item d-flex">
									<span class="avatar  ml-3 align-self-center bg-transparent"><img src="../../assets/img/flags/us_flag.jpg" alt="img"></span>
									<div class="d-flex">
										<span class="mt-2">English</span>
									</div>
								</a>
							</div>
						</div>
						<div class="dropdown d-md-flex">
							<a class="nav-link icon full-screen-link" href="">
								<i class="fe fe-maximize fullscreen-button fullscreen header-icons"></i>
								<i class="fe fe-minimize fullscreen-button exit-fullscreen header-icons"></i>
							</a>
                        </div>
                        
						<div class="dropdown d-md-flex header-settings">
							<a href="#" class="nav-link icon" data-toggle="sidebar-left" data-target=".sidebar-left">
								<i class="fe fe-align-left header-icons"></i>
							</a>
						</div>
						<button class="navbar-toggler navresponsive-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
							aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
							<i class="fe fe-more-vertical header-icons navbar-toggler-icon"></i>
						</button><!-- Navresponsive closed -->
					</div>
				</div>
			</div>
			<!-- End Main Header-->

			<!-- Mobile-header -->
			<div class="mobile-main-header">
				<div class="mb-1 navbar navbar-expand-lg  nav nav-item  navbar-nav-right responsive-navbar navbar-dark  ">
					<div class="collapse navbar-collapse" id="navbarSupportedContent-4">
						<div class="d-flex order-lg-2 mr-auto">
							<div class="dropdown header-search">
								<a class="nav-link icon header-search">
									<i class="fe fe-search"></i>
								</a>
								<div class="dropdown-menu">
									<div class="main-form-search p-2">
										<div class="input-group">
											<div class="input-group-btn search-panel">
												<select class="form-control select2-no-search">
													<option label="All categories">
													</option>
													<option value="IT Projects">
														IT Projects
													</option>
													<option value="Business Case">
														Business Case
													</option>
													<option value="Microsoft Project">
														Microsoft Project
													</option>
													<option value="Risk Management">
														Risk Management
													</option>
													<option value="Team Building">
														Team Building
													</option>
												</select>
											</div>
											<input type="search" class="form-control" placeholder="Search for anything...">
											<button class="btn search-btn"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></button>
										</div>
									</div>
								</div>
							</div>
						<div class="dropdown main-profile-menu">
							<a class="d-flex" href="#">
								<span class="main-img-user" ><img alt="avatar" src="../../assets/img/users/1.jpg"></span>
							</a>
							<div class="dropdown-menu">
								<div class="header-navheading">
									<h6 class="main-notification-title">Sonia Taylor</h6>
									<p class="main-notification-text">Web Designer</p>
								</div>
								<a class="dropdown-item border-top" href="profile.html">
									<i class="fe fe-user"></i> My Profile
								</a>
								<a class="dropdown-item" href="profile.html">
									<i class="fe fe-edit"></i> Edit Profile
								</a>
								<a class="dropdown-item" href="profile.html">
									<i class="fe fe-settings"></i> Account Settings
								</a>
								<a class="dropdown-item" href="profile.html">
									<i class="fe fe-settings"></i> Support
								</a>
								<a class="dropdown-item" href="profile.html">
									<i class="fe fe-compass"></i> Activity
								</a>
								<a class="dropdown-item" href="signin.html">
									<i class="fe fe-power"></i> Sign Out
								</a>
							</div>
						</div>
						<div class="dropdown  header-settings">
							<a href="#" class="nav-link icon" data-toggle="sidebar-left" data-target=".sidebar-left">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-align-right header-icons"><line x1="21" y1="10" x2="7" y2="10"></line><line x1="21" y1="6" x2="3" y2="6"></line><line x1="21" y1="14" x2="3" y2="14"></line><line x1="21" y1="18" x2="7" y2="18"></line></svg>
							</a>
						</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Mobile-header closed -->

			<!-- Horizonatal menu-->
			<div class="main-navbar hor-menu sticky">
				<div class="container">
					<ul class="nav">
						<li class="nav-item">
							<a class="nav-link" href="/"><i class="ti-home"></i>Dashboard</a>
						</li>
						<li class="nav-item">
							<a class="nav-link with-sub" href=""><i class="ti-wallet"></i>Crypto Currencies</a>
							<ul class="nav-sub">
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="crypto-dashbaord.html">Dashboard</a>
								</li>
							</ul>
						</li>
						
						
						<li class="nav-item nav-item-mega">
							<a class="nav-link with-sub" href=""><i class="ti-package"></i>Components</a>
							<div class="nav-sub nav-sub-mega">
								<div class="container">
									<div>
										<ul class="nav">
											<li><span>Elements</span></li>
											<li class="nav-sub-item">
												<a class="nav-sub-link" href="alerts.html">Alerts</a>
											</li>
											<li class="nav-sub-item">
												<a class="nav-sub-link" href="avatar.html">Avatar</a>
											</li>
											<li class="nav-sub-item">
												<a class="nav-sub-link" href="breadcrumbs.html">Breadcrumbs</a>
											</li>
											<li class="nav-sub-item">
												<a class="nav-sub-link" href="buttons.html">Buttons</a>
											</li>
											<li class="nav-sub-item">
												<a class="nav-sub-link" href="badge.html">Badge</a>
											</li>
											<li class="nav-sub-item">
												<a class="nav-sub-link" href="dropdown.html">Dropdown</a>
											</li>
											<li class="nav-sub-item">
												<a class="nav-sub-link" href="thumbnails.html">Thumbnails</a>
											</li>
											<li class="nav-sub-item">
												<a class="nav-sub-link" href="list-group.html">List Group</a>
											</li>
										</ul>
										<ul class="nav pt-2">
											<li class="nav-sub-item">
												<a class="nav-sub-link" href="spinners.html">Spinners</a>
											</li>
											<li class="nav-sub-item">
												<a class="nav-sub-link" href="media-object.html">Media Object</a>
											</li>
											<li class="nav-sub-item">
												<a class="nav-sub-link" href="navigation.html">Navigation</a>
											</li>
											<li class="nav-sub-item">
												<a class="nav-sub-link" href="pagination.html">Pagination</a>
											</li>
											<li class="nav-sub-item">
												<a class="nav-sub-link" href="popover.html">Popover</a>
											</li>
											<li class="nav-sub-item">
												<a class="nav-sub-link" href="progress.html">Progress</a>
											</li>
											<li class="nav-sub-item">
												<a class="nav-sub-link" href="typography.html">Typography</a>
											</li>
											<li class="nav-sub-item">
												<a class="nav-sub-link" href="tooltip.html">Tooltip</a>
											</li>
										</ul>
										<ul class="nav">
											<li class="nav-sub-item">
												<a class="nav-sub-link" href="toast.html">Toast</a>
											</li>
											<li class="nav-sub-item">
												<a class="nav-sub-link" href="tags.html">Tags</a>
											</li>
											<li class="pt-2"><span>Maps</span></li>
											<li class="nav-sub-item">
												<a class="nav-sub-link" href="map-mapel.html">Mapel  Maps</a>
											</li>
											<li class="nav-sub-item">
												<a class="nav-sub-link" href="map-vector.html">Vector Maps</a>
											</li>
											<li class="pt-2"><span>Tables</span></li>
											<li class="nav-sub-item">
												<a class="nav-sub-link" href="table-basic.html">Basic Tables</a>
											</li>
											<li class="nav-sub-item">
												<a class="nav-sub-link" href="table-data.html">Data Tables</a>
											</li>
										</ul>
									</div>
									<div>
										<ul class="nav">
											<li><span>Advanced UI</span></li>
											<li class="nav-sub-item">
												<a class="nav-sub-link" href="accordion.html">Accordion</a>
											</li>
											<li class="nav-sub-item">
												<a class="nav-sub-link" href="carousel.html">Carousel</a>
											</li>
											<li class="nav-sub-item">
												<a class="nav-sub-link" href="collapse.html">Collapse</a>
											</li>
											<li class="nav-sub-item">
												<a class="nav-sub-link" href="modals.html">Modals</a>
											</li>
											<li class="nav-sub-item">
												<a class="nav-sub-link" href="timeline.html">Timeline</a>
											</li>
											<li class="nav-sub-item">
												<a class="nav-sub-link" href="darggablecard.html">Darggable-Cards</a>
											</li>
											<li class="nav-sub-item">
												<a class="nav-sub-link" href="sweet-alert.html">Sweet Alert</a>
											</li>
											<li class="nav-sub-item">
												<a class="nav-sub-link" href="rating.html">Ratings</a>
											</li>
										</ul>
										<ul class="nav">
											<li class="nav-sub-item">
												<a class="nav-sub-link" href="search.html">Search</a>
											</li>
											<li class="nav-sub-item">
												<a class="nav-sub-link" href="userlist.html">Userlist</a>
											</li>
											<li class="nav-sub-item">
												<a class="nav-sub-link" href="blog.html">Blog</a>
											</li>
										</ul>
									</div>
									<div>
										<ul class="nav">
											<li><span>Chart</span></li>
											<li class="nav-sub-item">
												<a class="nav-sub-link" href="chart-morris.html">Morris Charts</a>
											</li>
											<li class="nav-sub-item">
												<a class="nav-sub-link" href="chart-flot.html">Flot Charts</a>
											</li>
											<li class="nav-sub-item">
												<a class="nav-sub-link" href="chart-chartjs.html">ChartJS</a>
											</li>
											<li class="nav-sub-item">
												<a class="nav-sub-link" href="chart-spark-peity.html">Sparkline & Peity </a>
											</li>
											<li class="nav-sub-item">
												<a class="nav-sub-link" href="chart-echart.html">Echart</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<!--End  Horizonatal menu-->

			<!-- Main Content-->
			<div class="main-content pt-0">
				<div class="container">

					<!-- Page Header -->
					<div class="page-header">
						<div>
							<h2 class="main-content-title tx-24 mg-b-5">Welcome To Dashboard</h2>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Project Dashboard</li>
							</ol>
						</div>
						<div class="d-flex">
							<div class="justify-content-center">
								<button type="button" class="btn btn-white btn-icon-text my-2 ml-2">
								   Import<i class="fe fe-download ml-2"></i>
								</button>
								<button type="button" class="btn btn-white btn-icon-text my-2 ml-2">
								   Filter<i class="fe fe-filter ml-2"></i>
								</button>
								<button type="button" class="btn btn-primary my-2 btn-icon-text">
								   Download Report<i class="fe fe-download-cloud ml-2"></i>
								</button>
							</div>
						</div>
					</div>
					<!-- End Page Header -->

					<!--Row-->
					<div class="row row-sm">
						
			</div>
			<!-- End Main Content-->

			<!-- Sidebar -->
			<div class="sidebar sidebar-left sidebar-animate">
				<div class="sidebar-icon">
					<a href="#" class="text-left float-left text-dark fs-20" data-toggle="sidebar-left" data-target=".sidebar-left"><i class="fe fe-x"></i></a>
				</div>
				<div class="sidebar-body">
					<h5>Todo</h5>
					<div class="d-flex p-2">
						<label class="ckbox"><input checked  type="checkbox"><span>Hangout With friends</span></label>
						<span class="mr-auto">
							<i class="fe fe-edit-2 text-primary mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Edit"></i>
							<i class="fe fe-trash-2 text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
						</span>
					</div>
					<div class="d-flex p-2 border-top">
						<label class="ckbox"><input type="checkbox"><span>Prepare for presentation</span></label>
						<span class="mr-auto">
							<i class="fe fe-edit-2 text-primary mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Edit"></i>
							<i class="fe fe-trash-2 text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
						</span>
					</div>
					
				
				
					
			</div>
			<!-- End Sidebar -->

			<!-- Main Footer-->
			<div class="main-footer text-center">
				<div class="container">
					<div class="row row-sm">
						<div class="col-md-12">
							<span>Copyright © 2020 <a href="#">Spruha</a>. Designed by <a href="https://www.spruko.com/">Spruko</a> All rights reserved.</span>
						</div>
					</div>
				</div>
			</div>
			<!--End Footer-->

		</div>
		<!-- End Page -->

		<!-- Back-to-top -->
		<a href="#top" id="back-to-top"><i class="fe fe-arrow-up"></i></a>

		<!-- Jquery js-->
		<script src="{{ asset('/assets/plugins/jquery/jquery.min.js') }}"></script>

		<!-- Bootstrap js-->
		<script src="{{ asset('/assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>


		<!-- Peity js-->
		<script src="{{ asset('assets/plugins/peity/jquery.peity.min.js') }}"></script>


		<!-- Jquery-Ui js-->
		<script src="{{ asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js') }}"></script>

		<!-- Select2 js-->
		<script src="{{ asset('/assets/plugins/select2/js/select2.min.js') }}../../"></script>

		<!--MutipleSelect js-->
		<script src="{{ asset('assets/plugins/multipleselect/multiple-select.js') }}"></script>
		<script src="{{ asset('assets/plugins/multipleselect/multi-select.js') }}"></script>

		<!-- Internal Morris js -->
		<script src="{{ asset('assets/plugins/raphael/raphael.min.js') }}"></script>
		<script src="{{ asset('assets/plugins/morris.js/morris.min.js') }}"></script>

		<!-- Sidebar js-->
		<script src="{{ asset('assets/plugins/sidebar/sidebar-rtl.js') }}"></script>

		<!-- Perfect-scrollbar js-->
		<script src="{{ asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min-rtl.js') }}"></script>

		<!-- Sticky js-->
		<script src="{{ asset('assets/js/sticky.js') }}"></script>

		<!-- Circle Progress js-->
		<script src="{{ asset('assets/js/circle-progress.min.js') }}"></script>

		<!-- Dashboard js-->
		<script src="{{ asset('assets/js/index.js') }}"></script>

		<!-- Custom js-->
		<script src="{{ asset('assets/js/custom.js') }}"></script>

	</body>
</html>