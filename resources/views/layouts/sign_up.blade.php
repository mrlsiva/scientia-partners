<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		@yield('title')

		<!-- Css -->
		<link rel="shortcut icon" type="image/x-icon" href="{{asset('public/assets/images/logo-abbr.png')}}" />
    	<link rel="stylesheet" href="{{asset('public/assets/css/bootstrap.min.css')}}">
    	<link rel="stylesheet" href="{{asset('public/assets/css/animate.min.css')}}">
    	<link rel="stylesheet" href="{{asset('public/assets/css/fontawesome-all.css')}}">
    	<link rel="stylesheet" href="{{asset('public/assets/css/style.css')}}">
    	<link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/colors/switch.css')}}">
    	<link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/select.scss')}}" />
    	<link href="{{asset('public/assets/css/select2.min.css')}}" rel="stylesheet" />
    	<link rel="stylesheet" href="{{asset('public/assets/css/main.css')}}">

		@yield('style')
	</head>

	<body>

		<div class="wrapper wizard d-flex clearfix multisteps-form position-relative">
			<div class="steps position-relative w-25">
				<div class="signup-logo">
					<img src="{{asset('public/assets/images/logo.svg')}}">
				</div>
				@if(Request::is('founders/*'))
					<div class="multisteps-form__progress d-flex flex-row flex-lg-column align-self-center">
						<span class="multisteps-form__progress-btn js-active" title="Basic Details"><i class="far fa-circle"></i><span>Basic Details</span></span>
						<span class="multisteps-form__progress-btn" title="Company Dtails"><i class="far fa-circle"></i><span>Company Details</span></span>
						<span class="multisteps-form__progress-btn" title="Founder Details"><i class="far fa-circle"></i><span>Founder Details</span></span>
						<span class="multisteps-form__progress-btn" title="Revenue & Product Details"><i class="far fa-circle"></i><span>Revenue & Product Details</span></span>
						<span class="multisteps-form__progress-btn" title="Completed"><i class="far fa-circle"></i><span>Completed </span></span>
					</div>
					<div class="step-progress float-end">
						<span class="progress-status">1 of 5 completed</span>
						<div class="step-progress-bar">
							<div class="progress">
								<div class="progress-bar step-2"></div>
							</div>
						</div>
					</div>
				@elseif(Request::is('investors/*'))
					<div class="multisteps-form__progress d-flex flex-row flex-lg-column align-self-center">
                		<span class="multisteps-form__progress-btn js-active" title="Basic Details"><i class="far fa-circle"></i><span>Basic Details</span></span>
                		<span class="multisteps-form__progress-btn" title="Email Confirmation"><i class="far fa-circle"></i><span>Email Confirmation</span></span>
            		</div>
            		<div class="step-progress float-end">
            			<span class="progress-status" id="progress-text">1 of 2 completed</span>
            			<div class="step-progress-bar">
            				<div class="progress">
            					<div class="progress-bar step-3"></div>
            				</div>
            			</div>
            		</div>
				@elseif(Request::is('partners/*'))
					<div class="multisteps-form__progress d-flex flex-row flex-lg-column align-self-center">
		                <span class="multisteps-form__progress-btn js-active" title="Basic Details"><i class="far fa-circle"></i><span>Basic Details</span></span>
		                <span class="multisteps-form__progress-btn" title="Review Your Profile"><i class="far fa-circle"></i><span>Types of Service</span></span>
		                <span class="multisteps-form__progress-btn" title="Email Confirmation"><i class="far fa-circle"></i><span>Email Confirmation</span></span>
            		</div>
            		<div class="step-progress float-end">
            			<span class="progress-status" id="progress-text">1 of 3 completed</span>
            			<div class="step-progress-bar">
            				<div class="progress">
            					<div class="progress-bar step-2"></div>
            				</div>
            			</div>
            		</div>
				@endif
				
			</div>
			@yield('body')
		</div>

		<!-- Script -->
		
		<script src="{{asset('public/assets/js/jquery-3.3.1.min.js')}}"></script>
    	<script src="{{asset('public/assets/js/popper.min.js')}}"></script>
    	<script src="{{asset('public/assets/js/bootstrap.min.js')}}"></script>
    	<script src="{{asset('public/assets/js/slick.min.js')}}"></script>
    	<script src="{{asset('public/assets/js/main.js')}}"></script>
    	<script src="{{asset('public/assets/js/switch.js')}}"></script>
    	<script src="{{asset('public/assets/js/select2.min.js')}}"></script>
    	<script src="{{asset('public/assets/js/select2-active.min.js')}}"></script>

	    <script>
	        $(document).ready(function() {
            	$('.js-example-basic-multiple').select2();
        	});
	    </script>

		@yield('script')
	</body>
</html>