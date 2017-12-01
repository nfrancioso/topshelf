<!DOCTYPE html>
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

		<!-- Bootstrap core CSS     -->
    <link href="{{ asset('user/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="{{ asset('user/css/animate.min.css') }}" rel="stylesheet"/>

    <!--  Dashboard core CSS    -->
    <link href="{{ asset('user/css/dashboard.css') }}" rel="stylesheet"/>

    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
		<link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="{{ asset('user/css/themify-icons.css') }}" rel="stylesheet">


</head>
    <body>
          <div id="app">
						<div class="wrapper">
            @include('includes.partials.logged-in-as')
						@include('frontend.user.includes.sidebar')
						<div class="main-panel">
            @include('frontend.user.includes.nav')

            <div class="container">
                @include('includes.partials.messages')
            </div><!-- container -->
						@yield('content')
						@include('frontend.user.includes.footer')
					</div>
				</div>
        </div><!-- #app -->

        <!-- ============================================================== -->
      	<!-- All Jquery -->
      	<!-- ============================================================== -->
				<!-- Scripts -->
				@stack('before-scripts')

				<!--   Core JS Files   -->
		    <script src="{{ asset('user/js/jquery-1.10.2.js') }}" type="text/javascript"></script>
				<script src="{{ asset('user/js/bootstrap.min.js') }}" type="text/javascript"></script>

				<!--  Checkbox, Radio & Switch Plugins -->
				<script src="{{ asset('user/js/bootstrap-checkbox-radio.js') }}"></script>

				<!--  Charts Plugin -->
				<script src="{{ asset('user/js/chartist.min.js') }}"></script>

		    <!--  Notifications Plugin    -->
		    <script src="{{ asset('user/js/bootstrap-notify.js') }}"></script>

		    <!--  Google Maps Plugin    -->
		    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

		    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
			<script src="{{ asset('user/js/paper-dashboard.js') }}"></script>

			<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
			<script src="{{ asset('user/js/demo.js') }}"></script>
			@stack('after-scripts')

			@include('includes.partials.ga')

			@if (Request::path() == 'dashboard')
			<script type="text/javascript">
					$(document).ready(function(){

							demo.initChartist();

							$.notify({
									icon: 'ti-face-smile',
									message: "Welcome to <b>TOPSHELF.</b>- Thanks for joining us and remember to share or like us on social media!."

								},{
										type: 'success',
										timer: 4000
								});

					});
			</script>
			@endif

		</body>
</html>
