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
	
	<link rel='dns-prefetch' href='http://use.fontawesome.com/' />
	<link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
	<link rel="stylesheet" href="/css/frontend/frontend.css">

</head>
<body class="body_filled home page page-id-8 airsupply_body scheme_original top_panel_show top_panel_above sidebar_hide sidebar_outer_hide">

	<a id="toc_home" class="sc_anchor" title="Home" data-description="&lt;i&gt;Return to Home&lt;/i&gt; - &lt;br&gt;navigate to home page of the site" data-icon="icon-home" data-separator="yes"></a>
	<a id="toc_top" class="sc_anchor" title="To Top" data-description="&lt;i&gt;Back to top&lt;/i&gt; - &lt;br&gt;scroll to top of the page" data-icon="icon-double-up" data-url="" data-separator="yes"></a>
	<div class="body_wrap">
		<div class="page_wrap">
			
			@include('frontend/partials/header')
			
			@yield('content')

			@include('frontend/partials/footer')
			
		</div>
		<!-- /.page_wrap -->
	</div>
	<!-- /.body_wrap -->
	<a href="#" class="scroll_to_top icon-up" title="Scroll to top"></a>
	<div class="custom_html_section"></div>
	
	<script type="text/javascript" src="/js/frontend/theme.js"></script>
	<script>
	window.Laravel = {!! json_encode(['csrfToken' => csrf_token()]) !!};
	</script>

	@yield('js')

</body>
</html>
