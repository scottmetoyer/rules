<!DOCTYPE html>
<html lang="en">
<!--[if IE 8]>         <html class="ie8"> <![endif]-->
<!--[if IE 9]>         <html class="ie9 gt-ie8"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="gt-ie8 gt-ie9 not-ie"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>EmberTribe Jobsite - Dashboard</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
	<meta name="csrf-token" content="{{ csrf_token() }}" />

	<!-- Open Sans font from Google CDN -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300&subset=latin" rel="stylesheet" type="text/css">

	<!-- Pixel Admin stylesheets -->
	<link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ URL::asset('css/pixel-admin.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ URL::asset('css/widgets.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ URL::asset('css/rtl.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ URL::asset('css/themes.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ URL::asset('css/app.css?v=0001') }}" rel="stylesheet" type="text/css">
	<!--[if lt IE 9]>
		<script src="assets/javascripts/ie.min.js"></script>
	<![endif]-->

    <script>
		// Auto close alerts
		window.setTimeout(function() {
			$(".alert").fadeTo(500, 0).slideUp(500, function(){
				$(this).remove(); 
			});
		}, 4000);

        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>

		var root = "#";
    </script>
</head>

<body class="theme-default main-menu-animated">
<script>var init = [];</script>
<div id="main-wrapper">
	<div id="main-navbar" class="navbar navbar-inverse" role="navigation">
		<button type="button" id="main-menu-toggle"><i class="navbar-icon fa fa-bars icon"></i><span class="hide-menu-text">HIDE MENU</span></button>
		<div class="navbar-inner">
			<div class="navbar-header">
				<a href="#" class="navbar-brand">
					<img src="{{ asset('images/logo_small.png') }}" alt="logo" class="logo" />
				</a>
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar-collapse"><i class="navbar-icon fa fa-bars"></i></button>
			</div>

			<div id="main-navbar-collapse" class="collapse navbar-collapse main-navbar-collapse">
				<div>
					<ul class="nav navbar-nav">
						<li>
							<a href="#">Home</a>
						</li>
					</ul>

					<div class="right clearfix">
						<ul class="nav navbar-nav pull-right right-navbar-nav">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle user-menu" data-toggle="dropdown">
									<img src="{{ 'https://www.gravatar.com/avatar/'.md5('scott.metoyer@gmail.com') }} />" alt="">
									<span>Scott Metoyer</span>
								</a>
								<ul class="dropdown-menu">
									<li><a href="#"><i class="dropdown-icon fa fa-user"></i>&nbsp;&nbsp;Account</a></li>
									<li><a href="#"><i class="dropdown-icon fa fa-cog"></i>&nbsp;&nbsp;Settings</a></li>
									<li class="divider"></li>
									<li><a href="#"><i class="dropdown-icon fa fa-power-off"></i>&nbsp;&nbsp;Log Out</a></li>
								</ul>
					        </li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="main-menu" role="navigation">
		<div id="main-menu-inner">
			<div class="menu-content top" id="menu-content-demo">
				<div>
					<div class="text-bg"><span class="text-semibold">Scott Metoyer</span></div>

					<img src="{{ 'https://www.gravatar.com/avatar/'.md5("scott.metoyer@gmail.com") }} />" alt="">
					<div class="btn-group">
						<a href="#" class="btn btn-xs btn-primary btn-outline dark"><i class="fa fa-user"></i></a>
						<a href="#" class="btn btn-xs btn-primary btn-outline dark"><i class="fa fa-cog"></i></a>
						<a href="#" class="btn btn-xs btn-danger btn-outline dark"><i class="fa fa-power-off"></i></a>
					</div>
				</div>
			</div>
			<ul class="navigation">
				<li>
					<a href="#"><i class="menu-icon fa fa-check-square"></i><span class="mm-text">Submissions</span></a>
				</li>
				<li>
					<a href="#"><i class="menu-icon fa fa-question-circle"></i><span class="mm-text">Questions</span></a>
				</li>
				<li>
					<a href="#"><i class="menu-icon fa fa-sun-o"></i><span class="mm-text">Spotlights</span></a>
				</li>
				<li>
					<a href="{{ url('/admin/configuration') }}"><i class="menu-icon fa fa-gear"></i><span class="mm-text">Configuration</span></a>
				</li>
			</ul>
		</div>
	</div>
    <div id="content-wrapper">

	@if ($errors->all())
    <div class="alert alert-danger alert-page">
    	<h5><strong><span class="fa fa-exclamation-circle"></span>&nbsp;&nbsp;ERROR NOTICE</strong></h5>
    	<ul class="list-unstyled">
        @foreach ($errors->all() as $error)
        	<li><span class="fa fa-remove"></span>&nbsp;&nbsp;{!! $error !!}</li>
        @endforeach
        </ul>
    </div>
    @endif
	
    @if (Session::get('message'))
	<div class="alert alert-success alert-page">
    	<button type="button" class="close" data-dismiss="alert">&times;</button>
        {!! Session::get('message') !!}
    </div>
    @endif

	@if (Session::get('error'))
	<div class="alert alert-danger alert-page">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		{!! Session::get('error') !!}
	</div>
	@endif

    @yield('content')
    
    </div>

    <div id="main-menu-bg"></div>
    <!-- Get jQuery from Google CDN -->
    <!--[if !IE]> -->
	    <script type="text/javascript"> window.jQuery || document.write('<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js">'+"<"+"/script>"); </script>
    <!-- <![endif]-->
    <!--[if lte IE 9]>
	    <script type="text/javascript"> window.jQuery || document.write('<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js">'+"<"+"/script>"); </script>
    <![endif]-->

    <!-- Pixel Admin javascript -->
    <script src="{{ URL::asset('js/bootstrap.min.js')}}"></script>
    <script src="{{ URL::asset('js/pixel-admin.min.js')}}"></script>
    <script type="text/javascript">
        window.PixelAdmin.start(init);
    </script>

	 @yield('script')
</div>
</body>
</html>