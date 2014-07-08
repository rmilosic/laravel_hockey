<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title> {{ $title }} </title>

		

		<!-- Latest compiled and minified CSS -->
		{{ HTML::style('/assets/bootstrap/dist/css/bootstrap.css') }}
		

	  	{{ HTML::style('/assets/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}

		
		 <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	    <![endif]--> 
	 
		 
		<!-- Latest compiled and minified JavaScript -->

		{{ HTML::script('assets/jquery/jquery.min.js') }}

		{{ HTML::script('assets/bootstrap/dist/js/bootstrap.js') }}

		{{ HTML::script('assets/bootstrap-datepicker/js/bootstrap-datepicker.js') }}
		{{ HTML::script('assets/bootstrap-datepicker/js/locales/bootstrap-datepicker.sl.js')}}

		{{ HTML::script('assets/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}

		{{ HTML::script('assets/bootstrap/dist/js/custom.js') }}
		

	
</head>
	<body>
		
	

	<!--style="background-image:url( {{ asset('assets/bootstrap/img/bckgrd.jpg') }} ); background-size: auto 100% ;
    background-repeat: no-repeat;" -->




		<div id="wrap">												<!-- WRAP -->

			

				<header id="header">
					@include('includes.header')
				</header>

				<nav role="navigation">
					@include('includes.navbar')
				</nav>


				<div class="container"  style="background: rgba(255,255,255, 0.86);; height: 1020px;"> 					<!-- CONTAINER -->
					<div class="row">
						<div class="col-md-12">

							<div id="main" role="main">
								@if(Session::has('message'))
								<p style="color: green;"> {{ Session::get('message')}} 
								</p>
								@endif
								<!--<div class="container">-->


								@yield('content')
								<!--  </div> -->
							</div>
							

						</div>
						
						

					</div>
				</div>																									<!-- CONTAINER -->

			
				<footer id="footer">
					@include('includes.footer')
				</footer>

			
		</div> 														<!-- WRAP -->
	

		

	</body>
</html>
