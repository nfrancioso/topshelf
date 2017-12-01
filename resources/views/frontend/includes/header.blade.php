<!--==========================
Header
============================-->
<header id="header">
  <div class="container">

    <div id="logo" class="pull-left">
      <!-- <a href="#hero"><img src="img/logo.png" alt="" title="" /></img></a> -->
      <h1><a href="#hero">TopShelf</a></h1>
    </div>

    <nav id="nav-menu-container">
      <ul class="nav-menu">


        @auth
            <li><a href="{{route('frontend.user.dashboard')}}">@lang('Dashboard')</a></li>
        @endauth
        @guest
        <li class="menu-active"><a href="#hero">@lang('Home')</a></li>
        <li><a href="#about">@lang('About')</a></li>
        <li><a href="#get-started">@lang('Try Demo')</a></li>
        <li><a href="#contact">@lang('Contact')</a></li>
          <li><a href="{{route('frontend.auth.register')}}" class="btn-signup">@lang('Register')</a></li>
          <li><a href="{{route('frontend.auth.login')}}" class="btn-login">@lang('Login')</a></li>
					@else
						@can('view backend')
							<li>
								<a href="{{ route('admin.dashboard') }}">@lang('Administration')</a>
							</li>
						@endcan

						<li>
              <a href="{{ route('frontend.auth.logout') }}">{{ __('Logout') }}</a>

						</li>
					@endguest


        </ul>
        </nav>
    </div><!-- #nav-menu-container -->
</header><!-- #header -->
