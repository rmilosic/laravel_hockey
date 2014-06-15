<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>

		

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
		 
		<!-- Optional theme -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">
		 
		<!-- Latest compiled and minified JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>

	
</head>
	<body>
		
		<div class="container">

			<header class="header">
					@include('includes.header')
			</header>
		
			<div id="main" role="main">

				@yield('content')
			
			</div>
		
			<footer class="footer">
				@include('includes.footer')
			</footer>

		</div>

	</body>
</html>
