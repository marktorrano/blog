<!DOCTYPE HTML>
<html>
	<head>
		<title>Future Imperfect</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="{{asset('css/main.css')}}" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="{{url('posts')}}">Future Imperfect</a></h1>
						<nav class="links">
							<ul>
                                @if(!Auth::check())
								<li><a href="{{url('login')}}">Log in</a></li>
                                <li><a href="{{url('users/create')}}">Register</a></li>
                                @else
                                <li><a href="{{url('logout')}}">Logout</a></li>
                                <li><a href="{{url('users/'.Auth::user()->id)}}">User Details</a></li>
                                <li><a href="{{url('posts/create')}}">New Post</a></li>
                                @endif
								
								
							</ul>
						</nav>
						<nav class="main">
							<ul>
								
								<li class="menu">
									<a class="fa-bars" href="#menu">Menu</a>
								</li>
							</ul>
						</nav>
					</header>

				<!-- Menu -->
					<section id="menu">

	

						<!-- Links -->
							<section>
								<ul class="links">
								@if(!Auth::check())
									<li>
										<a href="{{url('login')}}">
											<h3>Log in</h3>
										</a>
									</li>
									<li>
										<a href="{{url('users/create')}}">
											<h3>Register</h3>
										</a>
									</li>
								@else
								    <li>
										<a href="{{url('logout')}}">
											<h3>Logout</h3>
										</a>
									</li>
									<li>
										<a href="{{url('users/'.Auth::user()->id)}}">
											<h3>User Details</h3>
										</a>
									</li>
									<li>
										<a href="{{url('posts/create')}}"><h3>New Post</h3></a>
									</li>
									
								@endif
									
								</ul>
							</section>



					</section>

				<!-- Main -->
					<div id="main">
					
					@yield('content')    

					</div>

				<!-- Sidebar -->
					<section id="sidebar">

						<!-- Intro -->
							<section id="intro">
								<a href="{{url('posts')}}" class="logo"><img src="{{url('images/logo.jpg')}}" alt="" /></a>
								<header>
									<h2>Future Imperfect</h2>
									<p>Another fine responsive site template in HTML5</a></p>
								</header>
							</section>

						
						

						<!-- Footer -->
							<section id="footer">
								<ul class="icons">
									<li><a href="#" class="fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="fa-facebook"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="fa-rss"><span class="label">RSS</span></a></li>
									<li><a href="#" class="fa-envelope"><span class="label">Email</span></a></li>
								</ul>
								<p class="copyright">&copy; Untitled. Crafted: <a href="http://designscrazed.org/">HTML5</a>.</p>
							</section>

					</section>

			</div>

		<!-- Scripts -->
			<script src="{{asset('js/jquery.min.js')}}"></script>
			<script src="{{asset('js/skel.min.js')}}"></script>
			<script src="{{asset('js/util.js')}}"></script>
			<script src="{{asset('js/moment.min.js')}}"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="{{asset('js/main.js')}}"></script>

	</body>
</html>