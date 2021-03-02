<!DOCTYPE html>
<html lang="">
	
@include('layouts.partials.header')


	<body class="horizontalmenu">

		

		<!-- Loader -->
		<div id="global-loader">
			<img src="{{ asset('assets/img/loader.svg') }}" class="loader-img" alt="Loader">
		</div>
		<!-- End Loader -->

		<!-- Page -->
		<div class="page">

			@include('layouts.partials.main_header')

		@include('layouts.partials.mobile_header')

		@include('layouts.partials.horizontal_menu')
		
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
					
					</div>
					@if(Session::has('success'))
					<script>toastr.success('Success')</script> 
					@endif
					@if(session()->get('errors'))
                    <script>  toastr.error("{{ session()->get('errors')->first() }}")</script>
				 @endif
					<!-- End Page Header -->
				@yield('content')
				</div>
			</div>
			<!-- End Main Content-->

		@include('layouts.partials.sidebar_todo')

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
		
		@include('layouts.partials.footer')
	</body>
   
</html>