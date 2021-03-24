<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>E-Ganj Bazar</title>


	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('site/vendors/images/apple-touch-icon.png') }}">
	<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('site/vendors/images/favicon-32x32.png') }}">
	<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('site/vendors/images/favicon-16x16.png') }}">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('site/vendors/styles/core.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('site/vendors/styles/icon-font.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('site/src/plugins/datatables/css/dataTables.bootstrap4.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('site/src/plugins/datatables/css/responsive.bootstrap4.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('site/vendors/styles/style.css') }}">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>
<body>

	<div class="header">
		<div class="header-left">
			<div class="menu-icon dw dw-menu"></div>
			<div class="search-toggle-icon dw dw-search2" data-toggle="header_search"></div>
			<div class="header-search">
				@if ($message = Session::get('success'))
				<div class="alert" style="float:right;">
					<p style="margin:0px;color:white;border-color: rgba(0, 128, 0, 0.54);background-color: rgba(0, 128, 0, 0.54);border-radius: 4px;padding: 10px 10px;width:300px;text-align:center;">{{ $message }}</p>
				</div>
			@endif
			@if ($message = Session::get('error'))
				<div class="alert" style="float:right;">
					<p style="margin:0px;color:white;border-color: #F64E60;background-color:#F64E60;border-radius: 4px;padding: 10px 10px;width:300px;text-align:center;">{{ $message }}</p>
				</div>
			@endif
			</div>
		</div>
		<div class="header-right">
			
			<div class="user-info-dropdown">
				<div class="dropdown">
					<a class="dropdown-toggle" role="button" data-toggle="dropdown">
						
						@isset(Auth::user()->profile_image)						
						
						<span class="user-icon">
							<img src="{{asset('images/profile_image').'/'.Auth::user()->profile_image }}" alt="">

						</span> 
						@endisset
						<span class="user-name">{{ Auth::user()->f_name." ".Auth::user()->l_name }}</span>
					</a>
					<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
						<a class="dropdown-item" href="{{ url('profile') }}"><i class="dw dw-user1"></i> Profile</a>
						<a class="dropdown-item" href="{{ url('changepassword') }}"><i class="dw dw-user1"></i> Change Password</a>
						<a class="dropdown-item" href="{{ route('logout') }}"
						onclick="event.preventDefault();
									  document.getElementById('logout-form').submit();"><i class="dw dw-logout"></i>
						 {{ __('Logout') }}
					 	</a>

						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
							@csrf
						</form>
						{{-- <a class="dropdown-item" href="site/login.html"><i class="dw dw-logout"></i> Log Out</a> --}}
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="left-side-bar" style="background: #1a4c5f;">
		<div class="brand-logo" style="height: auto;">
			<a href="{{ url('login') }}">
				<img src="{{ asset('images/home/logo_transparent.png') }}" alt="" class="dark-logo">
				<img src="{{ asset('images/home/logo_transparent.png') }}" alt="" class="light-logo">
			</a>
			<div class="close-sidebar" data-toggle="left-sidebar-close">
				<i class="ion-close-round"></i>
			</div>
		</div>
		@inject('request', 'Illuminate\Http\Request')

		<div class="menu-block customscroll">
			<div class="sidebar-menu">
				<ul id="accordion-menu">
				@if(auth()->user()->id==1 )
					<li class="dropdown {{ $request->segment(1) == 'category' ? 'show' : '' }}">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-house-1"></span><span class="mtext">Categories</span>
						</a>
						<ul class="submenu">
							<li class=""><a href="{{ url('/category/create') }}" class="{{ $request->segment(1) == 'category' && $request->segment(2) == 'create' ? 'active' : '' }}">Create Category</a></li>
							<li><a href="{{ url('category') }}" class="{{ $request->segment(1) == 'category' && $request->segment(2) != 'create' ? 'active' : '' }}">Show Categories</a></li>
						</ul>
					</li>
					@endif
					@if(auth()->user()->role=="1" )
					<li class="dropdown {{ $request->segment(1) == 'product' ? 'show' : '' }}">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-house-1"></span><span class="mtext">Products</span>
						</a>
						<ul class="submenu">
							<li class=""><a href="{{ url('/product/create') }}" class="{{ $request->segment(1) == 'product' && $request->segment(2) == 'create' ? 'active' : '' }}">Create Product</a></li>
							<li><a href="{{ url('product') }}" class="{{ $request->segment(1) == 'product' && $request->segment(2) != 'create' ? 'active' : '' }}">Show Products</a></li>
						</ul>
					</li>
					@else

					<li class="dropdown {{ $request->segment(1) == 'shop' ? 'show' : '' }}">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-house-1"></span><span class="mtext">Shop Home</span>
						</a>
						<ul class="submenu">
							<li class=""><a href="{{ url('/') }}" >Shop Home</a></li>
						</ul>
					</li>
					
					<li class="dropdown {{ $request->segment(1) == 'orders' ? 'show' : '' }}">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-house-1"></span><span class="mtext">My Orders</span>
						</a>
						<ul class="submenu">
							<li class=""><a href="{{ url('/orders') }}" class="{{ $request->segment(1) == 'orders' ? 'active' : '' }}">Orders</a></li>
						</ul>
					</li>


					
					@endif

				</ul>
			</div>
		</div>
	</div>
	<div class="mobile-menu-overlay"></div>