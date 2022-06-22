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