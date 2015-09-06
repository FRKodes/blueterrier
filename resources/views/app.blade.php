<html>
	<head>
		@include('partials.metas')
		@include('partials.styles')
	</head>
	<body>
		
		<header>
			@include('partials.header')
		</header>
		
		<section>
			@yield('content')
		</section>

		<footer>
			@include('partials.footer')
		</footer>
		
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/slick.min.js"></script>
		<script type="text/javascript" src="js/custom.js"></script>
		
	</body>
</html>