<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>E-Ganj Bazar</title>


	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo e(asset('site/vendors/images/apple-touch-icon.png')); ?>">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo e(asset('site/vendors/images/favicon-32x32.png')); ?>">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(asset('site/vendors/images/favicon-16x16.png')); ?>">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('site/vendors/styles/core.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('site/vendors/styles/icon-font.min.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('site/src/plugins/datatables/css/dataTables.bootstrap4.min.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('site/src/plugins/datatables/css/responsive.bootstrap4.min.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('site/vendors/styles/style.css')); ?>">

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
				<?php if($message = Session::get('success')): ?>
				<div class="alert" style="float:right;">
					<p style="margin:0px;color:white;border-color: rgba(0, 128, 0, 0.54);background-color: rgba(0, 128, 0, 0.54);border-radius: 4px;padding: 10px 10px;width:300px;text-align:center;"><?php echo e($message); ?></p>
				</div>
			<?php endif; ?>
			<?php if($message = Session::get('error')): ?>
				<div class="alert" style="float:right;">
					<p style="margin:0px;color:white;border-color: #F64E60;background-color:#F64E60;border-radius: 4px;padding: 10px 10px;width:300px;text-align:center;"><?php echo e($message); ?></p>
				</div>
			<?php endif; ?>
			
			
			</div>
		</div>
		<div class="header-right">
			
			<div class="user-info-dropdown">
				<div class="dropdown">
					<a class="dropdown-toggle" role="button" data-toggle="dropdown">
						<span class="user-icon">
							<img src="<?php echo e(asset('images/profile_image').'/'.Auth::user()->profile_image); ?>" alt="">

						</span> 
						<span class="user-name"><?php echo e(Auth::user()->f_name." ".Auth::user()->l_name); ?></span>
					</a>
					<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
						<a class="dropdown-item" href="<?php echo e(url('profile')); ?>"><i class="dw dw-user1"></i> Profile</a>
						<a class="dropdown-item" href="<?php echo e(url('changepassword')); ?>"><i class="dw dw-user1"></i> Change Password</a>
						<a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
						onclick="event.preventDefault();
									  document.getElementById('logout-form').submit();"><i class="dw dw-logout"></i>
						 <?php echo e(__('Logout')); ?>

					 	</a>

						<form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
							<?php echo csrf_field(); ?>
						</form>
						
					</div>
				</div>
			</div>
			
		</div>
	</div>

	<div class="right-sidebar">
		<div class="sidebar-title">
			<h3 class="weight-600 font-16 text-blue">
				Layout Settings
				<span class="btn-block font-weight-400 font-12">User Interface Settings</span>
			</h3>
			<div class="close-sidebar" data-toggle="right-sidebar-close">
				<i class="icon-copy ion-close-round"></i>
			</div>
		</div>
		<div class="right-sidebar-body customscroll">
			<div class="right-sidebar-body-content">
				<h4 class="weight-600 font-18 pb-10">Header Background</h4>
				<div class="sidebar-btn-group pb-30 mb-10">
					<a href="site/javascript:void(0);" class="btn btn-outline-primary header-white active">White</a>
					<a href="site/javascript:void(0);" class="btn btn-outline-primary header-dark">Dark</a>
				</div>

				<h4 class="weight-600 font-18 pb-10">Sidebar Background</h4>
				<div class="sidebar-btn-group pb-30 mb-10">
					<a href="site/javascript:void(0);" class="btn btn-outline-primary sidebar-light ">White</a>
					<a href="site/javascript:void(0);" class="btn btn-outline-primary sidebar-dark active">Dark</a>
				</div>

				<h4 class="weight-600 font-18 pb-10">Menu Dropdown Icon</h4>
				<div class="sidebar-radio-group pb-10 mb-10">
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-1" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-1" checked="">
						<label class="custom-control-label" for="sidebaricon-1"><i class="fa fa-angle-down"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-2" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-2">
						<label class="custom-control-label" for="sidebaricon-2"><i class="ion-plus-round"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-3" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-3">
						<label class="custom-control-label" for="sidebaricon-3"><i class="fa fa-angle-double-right"></i></label>
					</div>
				</div>

				<h4 class="weight-600 font-18 pb-10">Menu List Icon</h4>
				<div class="sidebar-radio-group pb-30 mb-10">
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-1" name="menu-list-icon" class="custom-control-input" value="icon-list-style-1" checked="">
						<label class="custom-control-label" for="sidebariconlist-1"><i class="ion-minus-round"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-2" name="menu-list-icon" class="custom-control-input" value="icon-list-style-2">
						<label class="custom-control-label" for="sidebariconlist-2"><i class="fa fa-circle-o" aria-hidden="true"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-3" name="menu-list-icon" class="custom-control-input" value="icon-list-style-3">
						<label class="custom-control-label" for="sidebariconlist-3"><i class="dw dw-check"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-4" name="menu-list-icon" class="custom-control-input" value="icon-list-style-4" checked="">
						<label class="custom-control-label" for="sidebariconlist-4"><i class="icon-copy dw dw-next-2"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-5" name="menu-list-icon" class="custom-control-input" value="icon-list-style-5">
						<label class="custom-control-label" for="sidebariconlist-5"><i class="dw dw-fast-forward-1"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-6" name="menu-list-icon" class="custom-control-input" value="icon-list-style-6">
						<label class="custom-control-label" for="sidebariconlist-6"><i class="dw dw-next"></i></label>
					</div>
				</div>

				<div class="reset-options pt-30 text-center">
					<button class="btn btn-danger" id="reset-settings">Reset Settings</button>
				</div>
			</div>
		</div>
	</div>

	<div class="left-side-bar" style="background: #1a4c5f;">
		<div class="brand-logo" style="height: auto;">
			<a href="site/index.html">
				<img src="<?php echo e(asset('images/home/logo_transparent.png')); ?>" alt="" class="dark-logo">
				<img src="<?php echo e(asset('images/home/logo_transparent.png')); ?>" alt="" class="light-logo">
			</a>
			<div class="close-sidebar" data-toggle="left-sidebar-close">
				<i class="ion-close-round"></i>
			</div>
		</div>
		<?php $request = app('Illuminate\Http\Request'); ?>

		<div class="menu-block customscroll">
			<div class="sidebar-menu">
				<ul id="accordion-menu">
				<?php if(auth()->user()->id==1 ): ?>


					<li class="dropdown <?php echo e($request->segment(1) == 'category' ? 'show' : ''); ?>">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-house-1"></span><span class="mtext">Categories</span>
						</a>
						<ul class="submenu">
							<li class=""><a href="<?php echo e(url('/category/create')); ?>" class="<?php echo e($request->segment(1) == 'category' && $request->segment(2) == 'create' ? 'active' : ''); ?>">Create Category</a></li>
							<li><a href="<?php echo e(url('category')); ?>" class="<?php echo e($request->segment(1) == 'category' && $request->segment(2) != 'create' ? 'active' : ''); ?>">Show Categories</a></li>
						</ul>
					</li>
					<?php endif; ?>
					<?php if(auth()->user()->role=="supplier" ): ?>
					<li class="dropdown <?php echo e($request->segment(1) == 'product' ? 'show' : ''); ?>">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-house-1"></span><span class="mtext">Products</span>
						</a>
						<ul class="submenu">
							<li class=""><a href="<?php echo e(url('/product/create')); ?>" class="<?php echo e($request->segment(1) == 'product' && $request->segment(2) == 'create' ? 'active' : ''); ?>">Create Product</a></li>
							<li><a href="<?php echo e(url('product')); ?>" class="<?php echo e($request->segment(1) == 'product' && $request->segment(2) != 'create' ? 'active' : ''); ?>">Show Products</a></li>
						</ul>
					</li>
					<?php endif; ?>

				</ul>
			</div>
		</div>
	</div>
	<div class="mobile-menu-overlay"></div><?php /**PATH C:\xampp\htdocs\EgunjBazar\resources\views/main/header.blade.php ENDPATH**/ ?>