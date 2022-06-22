<!DOCTYPE html> 
<html lang="en">
	
<!-- doccure/index.html  30 Nov 2019 04:12:03 GMT -->
<head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		<title>@yield('title', 'Doctime')</title>
		
		<!-- Favicons -->
		<link type="image/x-icon" href="{{ asset('frontend/assets/img/favicon.png') }}" rel="icon">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
		
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="{{ asset('frontend/assets/plugins/fontawesome/css/fontawesome.min.css') }}">
		<link rel="stylesheet" href="{{ asset('frontend/assets/plugins/fontawesome/css/all.min.css') }}">
		
		<!-- Main CSS -->
		<link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
		
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="frontend/assets/js/html5shiv.min.js"></script>
			<script src="frontend/assets/js/respond.min.js"></script>
		<![endif]-->
	
	</head>
	<body>




		<!-- Main Wrapper -->
		<div class="main-wrapper">
		
			@include('frontend.layouts.header')
			
            @section('main')
            @show  
		   
		   <!-- Availabe Features -->
		   <section class="section section-features">
				<div class="container-fluid">
				   <div class="row">
						<div class="col-md-5 features-img">
							<img src="frontend/assets/img/features/feature.png" class="img-fluid" alt="Feature">
						</div>
						<div class="col-md-7">
							<div class="section-header">	
								<h2 class="mt-2">Availabe Features in Our Clinic</h2>
								<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
							</div>	
							<div class="features-slider slider">
								<!-- Slider Item -->
								<div class="feature-item text-center">
									<img src="frontend/assets/img/features/feature-01.jpg" class="img-fluid" alt="Feature">
									<p>Patient Ward</p>
								</div>
								<!-- /Slider Item -->
								
								<!-- Slider Item -->
								<div class="feature-item text-center">
									<img src="frontend/assets/img/features/feature-02.jpg" class="img-fluid" alt="Feature">
									<p>Test Room</p>
								</div>
								<!-- /Slider Item -->
								
								<!-- Slider Item -->
								<div class="feature-item text-center">
									<img src="frontend/assets/img/features/feature-03.jpg" class="img-fluid" alt="Feature">
									<p>ICU</p>
								</div>
								<!-- /Slider Item -->
								
								<!-- Slider Item -->
								<div class="feature-item text-center">
									<img src="frontend/assets/img/features/feature-04.jpg" class="img-fluid" alt="Feature">
									<p>Laboratory</p>
								</div>
								<!-- /Slider Item -->
								
								<!-- Slider Item -->
								<div class="feature-item text-center">
									<img src="frontend/assets/img/features/feature-05.jpg" class="img-fluid" alt="Feature">
									<p>Operation</p>
								</div>
								<!-- /Slider Item -->
								
								<!-- Slider Item -->
								<div class="feature-item text-center">
									<img src="frontend/assets/img/features/feature-06.jpg" class="img-fluid" alt="Feature">
									<p>Medical</p>
								</div>
								<!-- /Slider Item -->
							</div>
						</div>
				   </div>
				</div>
			</section>		
			<!-- Availabe Features -->
			
			@include('frontend.layouts.footer')
		   
	    </div>
	   <!-- /Main Wrapper -->



	  
		<!-- jQuery -->
		<script src="{{ asset('frontend/assets/js/jquery.min.js') }}"></script>
		
		<!-- Bootstrap Core JS -->
		<script src="{{ asset('frontend/assets/js/popper.min.js') }}"></script>
		<script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
		
		<!-- Slick JS -->
		<script src="{{ asset('frontend/assets/js/slick.js') }}"></script>
		
		<!-- Custom JS -->
		<script src="{{ asset('frontend/assets/js/script.js') }}"></script>
		
	</body>

<!-- doccure/index.html  30 Nov 2019 04:12:03 GMT -->
</html>