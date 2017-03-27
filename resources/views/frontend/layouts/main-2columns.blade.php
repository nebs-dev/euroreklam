<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Euroreklam Klime</title>
	<link rel="stylesheet" type="text/css" href="css/frontend/app.css">
	<link rel="stylesheet" href="/css/backend/font-awesome/font-awesome.css">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&amp;subset=latin-ext" rel="stylesheet">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>

	<header class="header">
		@include('frontend.partials.header')
	</header>

	<aside class="sidebar">
		@include('frontend.partials.sidebar')
	</aside>

	<section id="main-content">
		@yield('content')
	</section>
	
	<footer class="footer">
		@include('frontend.partials.footer')
	</footer>

	<script>
	window.Laravel = {!! json_encode(['csrfToken' => csrf_token()]) !!};
	</script>
	<script type="text/javascript" src="/js/frontend/frontend_app.js"></script>
	<script type="text/javascript" src="/js/frontend/owl.carousel.js"></script>
	@yield('js')

</body>
</html>
