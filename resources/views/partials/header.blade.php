<!DOCTYPE html>
<html>
	<head>
    	<title>Goramode</title>
    	<base href="{{ url('/') }}" />
    	
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    	<!-- Bootstrap -->
    	<link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap.min.css') }}" />

    	<!-- Font awesome -->
    	<link href="{{ asset('css/bootstrap/font-awesome/css/font-awesome.min.css') }}" type="text/css" rel="stylesheet" />

    	<!-- Bootstrap 3 Glyphicons -->
    	<link href="{{ asset('css/bootstrap/bootstrap-glyphicons.css') }}" type="text/css" rel="stylesheet" />

		<!-- Animate.CSS -->
		<link type="text/css" href="{{ asset('css/animate.css') }}" rel="stylesheet" media="screen" />
	
		<!-- UTop -->
		<link rel="stylesheet" media="screen,projection" href="{{ asset('js/utop/css/ui.totop.css') }}" />

	    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	    <![endif]-->
    	
    	<!-- Custom styles for landing page-->
    	<link rel="stylesheet" type="text/css" href="{{ asset( elixir('css/app.css') ) }}" />

    	<!-- Custom Styles -->
		@yield('styles')
  </head>
	<body>
	<div id="header">
		<div class="outer-table">
			<div class="middle-cell">
				<div class="inner-data">
					<div class="col-xs-3">
						<a href="{{ url('/') }}"><img alt="Goramode" class="img-responsive" src="{{ asset('img/logo.png') }}"></a>
					</div>
					<div class="col-xs-5" id="header-calendar">
						<div id="header-calendar-cell">	
							<a href="#">
								<img src="{{ asset('img/header-calendar.png') }}" />
								<span class="badge badge-success pull-right">1</span>
							</a>
						</div>
					</div>	
					<div class="col-xs-4 pull-right" id="search-bar">
						<div id="search-bar-cell">
							<input type="button" class="form-control" value="GO!"/>					
							<input type="text" class="form-control" placeholder="Search for your pals or destination" />						
						</div>
					</div>
				</div>
			</div>
		</div>				
	</div>
	
	<div id="content">	
		<div class="outer-table">
			<div class="top-cell">
				<div class="inner-data">					

