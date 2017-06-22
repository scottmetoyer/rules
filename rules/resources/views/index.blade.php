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
	<div id="app">
		<nav class="px-nav px-nav-left">
			<button type="button" class="px-nav-toggle" data-toggle="px-nav">
				<span class="px-nav-toggle-arrow"></span>
				<span class="navbar-toggle-icon"></span>
				<span class="px-nav-toggle-label font-size-11">HIDE MENU</span>
			</button>

			<ul class="px-nav-content">
                <router-link class="px-nav-item" tag="li" to="/seq" active-class="active">
                    <a><i class="px-nav-icon ion-grid"></i><span class="px-nav-label">Seq</span></a>
                </router-link>

                <router-link class="px-nav-item" tag="li" to="/synth" active-class="active">
                    <a><i class="px-nav-icon ion-radio-waves"></i><span class="px-nav-label">Synth</span></a>
                </router-link>

                <router-link class="px-nav-item" tag="li" to="/fx" active-class="active">
                    <a><i class="px-nav-icon ion-erlenmeyer-flask"></i><span class="px-nav-label">FX</span></a>
                </router-link>

				<router-link class="px-nav-item" tag="li" to="/timeline" active-class="active">
                    <a><i class="px-nav-icon ion-code-working"></i><span class="px-nav-label">Timeline</span></a>
                </router-link>

                <router-link class="px-nav-item" tag="li" to="/mix" active-class="active">
                    <a><i class="px-nav-icon ion-levels"></i><span class="px-nav-label">Mix</span></a>
                </router-link>

                <router-link class="px-nav-item" tag="li" to="/config" active-class="active">
                    <a><i class="px-nav-icon ion-gear-b"></i><span class="px-nav-label">Config</span></a>
                </router-link>
			</ul>
		</nav>

		<nav class="navbar px-navbar">
			<div class="navbar-header">
				<span class="navbar-brand"><span class="logo">RULES</span></span>
			</div>

			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#px-navbar-collapse" aria-expanded="false"><i class="navbar-toggle-icon"></i></button>

			<div class="collapse navbar-collapse" id="px-navbar-collapse">
				<transport></transport>
			</div>
		</nav>

		<div class="px-content">
            <keep-alive>
		        <router-view></router-view>
            </keep-alive>
		</div>
	
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