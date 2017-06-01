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
			<a class="navbar-brand" href="#">Your Company</a>
		</div>

		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#px-navbar-collapse" aria-expanded="false"><i class="navbar-toggle-icon"></i></button>

		<div class="collapse navbar-collapse" id="px-navbar-collapse">
			<ul class="nav navbar-nav">
			<li><a href="#">Link</a></a>
			</ul>

			<ul class="nav navbar-nav navbar-right">
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
				Dropdown
				</a>
				<ul class="dropdown-menu">
				<li><a href="#">First item</a></li>
				<li><a href="#">Second item</a></li>
				<li class="divider"></li>
				<li><a href="#">Third item</a></li>
				</ul>
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