<!DOCTYPE html>
<html lang="en">

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
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('user/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="{{ asset('user/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css') }}" rel="stylesheet">
    <!-- toast CSS -->
    <link href="{{ asset('user/plugins/bower_components/toast-master/css/jquery.toast.css') }}" rel="stylesheet">
    <!-- morris CSS -->
    <link href="{{ asset('user/plugins/bower_components/morrisjs/morris.css') }}" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="{{ asset('user/plugins/bower_components/chartist-js/dist/chartist.min.css') }}" rel="stylesheet">
    <link href="{{ asset('user/plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css') }}" rel="stylesheet">
    <!-- animation CSS -->
    <link href="{{ asset('user/css/animate.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('user/css/style.css') }}" rel="stylesheet">
    <!-- color CSS -->
    <link href="{{ asset('user/css/colors/default.css') }}" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
@yield('css')

</head>

<body class="fix-header" id='usertop'>
    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>

	        @include('user.includes.nav')

					@yield('contents')


	<!-- ============================================================== -->
	<!-- All Jquery -->
	<!-- ============================================================== -->
	<script src="{{ asset('/plugins/bower_components/jquery/dist/jquery.min.js') }}"></script>
	<!-- Bootstrap Core JavaScript -->
	<script src="{{ asset('bootstrap/dist/js/bootstrap.min.js') }}"></script>
	<!-- Menu Plugin JavaScript -->
	<script src="{{ asset('/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js') }}"></script>
	<!--slimscroll JavaScript -->
	<script src="{{ asset('js/jquery.slimscroll.js') }}"></script>
	<!--Wave Effects -->
	<script src="{{ asset('js/waves.js') }}"></script>
	<!--Counter js -->
	<script src="{{ asset('/plugins/bower_components/waypoints/lib/jquery.waypoints.js') }}"></script>
	<script src="{{ asset('/plugins/bower_components/counterup/jquery.counterup.min.js') }}"></script>
	<!-- chartist chart -->
	<script src="{{ asset('/plugins/bower_components/chartist-js/dist/chartist.min.js') }}"></script>
	<script src="{{ asset('/plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js') }}"></script>
	<!-- Sparkline chart JavaScript -->
	<script src="{{ asset('/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
	<!-- Custom Theme JavaScript -->
	<script src="{{ asset('js/custom.min.js') }}"></script>
	<script src="{{ asset('js/dashboard1.js') }}"></script>
	<script src="{{ asset('/plugins/bower_components/toast-master/js/jquery.toast.js') }}"></script>
</body>

</html>
