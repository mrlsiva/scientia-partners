<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
	<link href="{{ asset('public/assets/css/main.css') }}" rel="stylesheet" type="text/css" />
	@yield('title')
</head>
<body class="demo">
	<div class="container">
		<div class="row">
			<div class="col-6">
				HELLO
			</div>
			@yield('body')
		</div>
	</div>

	<!-- Script -->
	<script src="{{ asset('public/assets/js/') }}"></script>
</body>
</html>