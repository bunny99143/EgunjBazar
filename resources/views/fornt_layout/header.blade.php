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
	<link rel="stylesheet" type="text/css" href="{{ asset('site/vendors/styles/style.css') }}">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	
</head>
<body>
	<div class="loader_div" id="page_loder" style=" background: rgba(0,0,0,0.5);position: fixed;top: 0;bottom: 0;left: 0;right: 0;z-index: 9999;text-align: center;"><img src="https://flevix.com/wp-content/uploads/2020/01/Preloader.gif" style="width: 250px;margin: auto;position: absolute;top: 50%;transform: translate(0,-50%);left: 0;right: 0;"></div>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">
            <!-- Brand -->
            <a class="navbar-brand" href="{{ url('/') }}">
            
            <!-- E-Ganj Bazar -->
                <img alt="Image placeholder" src="{{ asset('images/home/logo_transparent.png') }}" style="    height: auto;width: 175px;" id="navbar-logo">
            </a>
            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mt-4 mt-lg-0 ml-auto">
                <li class="nav-item ">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                    </li>
                  <li class="nav-item ">
                        <a class="nav-link" href="docs/index.html">About Us</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ url('/contact_us') }}">Contact Us</a>
                    </li>
                </ul>
                @isset (auth()->user()->id)
				@php
					$cart_count= \App\Cart::where('user_id',auth()->user()->id)->count();
				@endphp
				<a class="navbar-btn btn btn-sm btn-primary d-none d-lg-inline-block ml-3" data-toggle="modal" data-target="#cart_modal" type="button"  href="javascript:;" @if($cart_count > 0) onclick="return feelCart_data();" @endif>
					My Carts
					<span class="badge notification-active" id="cart_items">{{ $cart_count }}</span>
				</a>
				<a class="navbar-btn btn btn-sm btn-primary d-none d-lg-inline-block ml-3" href="{{ url('orders')}}">
					My Orders
				</a>
				@else
				<a class="navbar-btn btn btn-sm btn-primary d-none d-lg-inline-block ml-3" href="{{ url('login')}}">
					Login - Sign Up
				</a>
				@endisset
                <!-- Mobile button -->
                <div class="d-lg-none text-center">
                    <a href="https://webpixels.io/themes/quick-website-ui-kit" class="btn btn-block btn-sm btn-warning">See more details</a>
                </div>
            </div>
        </div>
    </nav>