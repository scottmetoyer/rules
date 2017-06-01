<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

	<title>RULES</title>
	<link href="css/app.css" rel="stylesheet" type="text/css">
	<link href="css/custom.css" rel="stylesheet" type="text/css">
</head>
<body>

	<nav class="px-nav px-nav-left">
		<button type="button" class="px-nav-toggle" data-toggle="px-nav">
			<span class="px-nav-toggle-arrow"></span>
			<span class="navbar-toggle-icon"></span>
			<span class="px-nav-toggle-label font-size-11">HIDE MENU</span>
		</button>

		<ul class="px-nav-content">
			<li class="px-nav-item active">
				<a href="index.html"><i class="px-nav-icon ion-home"></i><span class="px-nav-label">Sequence</span></a>
			</li>
			<li class="px-nav-item">
				<a href="second.html"><i class="px-nav-icon ion-star"></i><span class="px-nav-label">Synthesize</span></a>
			</li>
			<li class="px-nav-item">
				<a href="second.html"><i class="px-nav-icon ion-star"></i><span class="px-nav-label">Effect</span></a>
			</li>
				<li class="px-nav-item">
			<a href="second.html"><i class="px-nav-icon ion-star"></i><span class="px-nav-label">Mix</span></a>
				</li>
			<li class="px-nav-item">
				<a href="second.html"><i class="px-nav-icon ion-star"></i><span class="px-nav-label">Configuration</span></a>
			</li>
		</ul>
	</nav>
 
	<nav class="navbar px-navbar">
		<div class="navbar-header">
			<a class="navbar-brand" href="#"><img src="{{ asset('images/logo_small.png') }}" alt="logo" class="logo" /></a>
		</div>

		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#px-navbar-collapse" aria-expanded="false"><i class="navbar-toggle-icon"></i></button>

		<div class="collapse navbar-collapse" id="px-navbar-collapse">
			<ul class="nav navbar-nav">
				<li><a href="#">Link</a></a>
			</ul>

			<ul class="nav navbar-nav navbar-right">
				<li>
					<a href="#">
						<span>00:00:00</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span id="global-bpm"></span>&nbsp;BPM
					</a>		
				</li>
				<li class="border-left">
					<a href="#" id="transport-back-button"><i class="fa fa-step-backward"></i></a>
				</li>
				<li>
					<a href="#" id="transport-stop-button"><i class="fa fa-stop"></i></a>
				</li>
				<li>
					<a href="#" id="transport-play-button"><i class="fa fa-play"></i></a>
				</li>
				<li class="border-right">
					<a href="#" id="transport-forward-button"><i class="fa fa-step-forward"></i></a>
				</li>
				<li>
					<a href="#"><i class="fa fa-cog"></i>&nbsp;&nbsp;Config</a>
				</li>
			</ul>
		</div>
	</nav>

	<div class="px-content">
		@yield('content')
	</div>

	<!-- Footer -->
	<footer class="px-footer px-footer-bottom">
		Footer content goes here
	</footer>
	
	<script src="{{ URL::asset('js/manifest.js')}}"></script>
	<script src="{{ URL::asset('js/vendor.js')}}"></script>
	<script src="{{ URL::asset('js/app.js')}}"></script>

	<script src="{{ URL::asset('js/pixeladmin.js')}}"></script>
</body>
</html>