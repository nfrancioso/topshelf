<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="{{ config('app.locale') }}"> <!--<![endif]-->
<head>

	<!--- basic page needs
	================================================== -->
	<meta charset="utf-8">
	<title>{{ isset($post) && $post->seo_title ? $post->seo_title :  __(lcfirst('Title')) }}</title>
	<meta name="description" content="{{ isset($post) && $post->meta_description ? $post->meta_description : __('description') }}">
	<meta name="author" content="@lang(lcfirst ('Author'))">
	@if(isset($post) && $post->meta_keywords)
		<meta name="keywords" content="{{ $post->meta_keywords }}">
	@endif
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<!-- mobile specific metas
	================================================== -->
	<meta name="format-detection" content="telephone=no">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSS
	================================================== -->
	<!-- Favicons -->
  <link href="{{ asset('img/favicon.png') }}" rel="icon">
  <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{ asset('lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{ asset('lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">

	<!-- Animations -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}">


	@yield('css')

</head>

<body id="top">

	        @include('frontend/includes/header')

					@yield('content')

	        @include('frontend/includes/footer')

			<!-- script
			================================================== -->
			<!-- Template Javascript Files
			================================================== -->
			<!-- Main jQuery -->
			<!-- <script src="{{ asset('js/jquery-1.11.0.min.js') }}"></script> -->
		  <script src="{{ asset('lib/jquery/jquery.min.js') }}"></script>
		  <script src="{{ asset('lib/jquery/jquery-migrate.min.js') }}"></script>
		  <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
		  <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
		  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>

		  <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
		  <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
		  <script src="{{ asset('lib/superfish/hoverIntent.js') }}"></script>
		  <script src="{{ asset('lib/superfish/superfish.min.js') }}"></script>
			<script src="{{ asset('js/typewriter.js') }}"></script>
			<!-- Custom Scrollbar -->
			<script src="{{ asset('js/jquery.nicescroll.min.js') }}"></script>
			<!-- Highlight menu item -->
			<script src="{{ asset('js/jquery.nav.js') }}"></script>
		  <!-- Contact Form JavaScript File -->
		  <script src="{{ asset('contactform/contactform.js') }}"></script>
			<!-- Custom js scripts-->
			<script src="{{ asset('js/custom.js') }}"></script>
		  <!-- Template Main Javascript File -->
			<script src="{{ asset('lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
		  <script src="{{ asset('js/main.js') }}"></script>


	</body>

	</html>
