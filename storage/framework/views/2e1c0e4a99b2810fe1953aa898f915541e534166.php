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
	
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">
            <!-- Brand -->
            <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
            
            <!-- E-Ganj Bazar -->
                <img alt="Image placeholder" src="<?php echo e(asset('images/home/logo_transparent.png')); ?>" style="    height: auto;width: 175px;" id="navbar-logo">
            </a>
            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mt-4 mt-lg-0 ml-auto">
                <li class="nav-item ">
                        <a class="nav-link" href="<?php echo e(url('/')); ?>">Home</a>
                    </li>
                  <li class="nav-item ">
                        <a class="nav-link" href="docs/index.html">About Us</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="docs/index.html">Contact Us</a>
                    </li>
                </ul>
                <!-- Button -->
                <a class="navbar-btn btn btn-sm btn-primary d-none d-lg-inline-block ml-3" href="<?php echo e(route('login')); ?>">
                    Login - Sign Up
                </a>
                <!-- Mobile button -->
                <div class="d-lg-none text-center">
                    <a href="https://webpixels.io/themes/quick-website-ui-kit" class="btn btn-block btn-sm btn-warning">See more details</a>
                </div>
            </div>
        </div>
    </nav>

    <section class="slice slice-lg pt-lg-6 pb-0 pb-lg-6 bg-section-secondary">
        <div class="container">
            <!-- Title -->
            <!-- Section title -->
           
            <!-- Card -->
            <div class="row mt-5">

            <div  class="product-wrap">
					<div class="product-detail-wrap mb-30">
						<div class="row">
							<div class="col-lg-6 col-md-12 col-sm-12">
								<div class="product-slider slider-arrow">
									<div class="product-slide">
										<img src="<?php echo e(asset('images/product_image/')."/".$product->product_image); ?>" alt="">
									</div>
									
								</div>
								<div class="product-slider-nav">
									<!-- <div class="product-slide-nav">
										<img src="<?php echo e(asset('images/product_image/')."/".$product->product_image); ?>" alt="">
									</div>
									 -->
								</div>
							</div>
							<div class="col-lg-6 col-md-12 col-sm-12">
								<div class="product-detail-desc pd-20 card-box height-100-p">
									<h4 class="mb-20 pt-20"><?php echo e($product->product_name); ?></h4>
									<p><?php echo e($product->product_desc); ?></p>
									<div class="price">
										<ins> <?php echo e($product->product_price); ?></ins>
									</div>
									<div class="mx-w-150">
										<div class="form-group">
											<label class="text-blue">Tons</label>
											<input id="demo3_22" type="text" value="1" name="demo3_22">
										</div>
									</div>
									<div class="row">
										<div class="col-md-6 col-6">
											<a href="#" class="btn btn-primary btn-block">Add To Cart</a>
										</div>
										<div class="col-md-6 col-6">
											<a href="#" class="btn btn-outline-primary btn-block">Buy Now</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				
				</div>
            </div>
        </div>
        </div>
    </section>
    
    <div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				
				</div>
			</div>
            </div>
            <script src="<?php echo e(asset('site/vendors/scripts/core.js')); ?>"></script>
	<script src="<?php echo e(asset('site/vendors/scripts/script.min.js')); ?>"></script>
	<script src="<?php echo e(asset('site/vendors/scripts/process.js')); ?>"></script>
	<script src="<?php echo e(asset('site/vendors/scripts/layout-settings.js')); ?>"></script>
    <script src="<?php echo e(asset('site/src/plugins/slick/slick.min.js')); ?>"></script>
	<!-- bootstrap-touchspin js -->
	<script src="<?php echo e(asset('site/src/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js')); ?>"></script>
	<script>
		jQuery(document).ready(function() {
		// 	jQuery('.product-slider').slick({
		// 		slidesToShow: 1,
		// 		slidesToScroll: 1,
		// 		arrows: true,
		// 		infinite: true,
		// 		speed: 1000,
		// 		fade: true,
		// 		asNavFor: '.product-slider-nav'
		// 	});
		// 	jQuery('.product-slider-nav').slick({
		// 		slidesToShow: 3,
		// 		slidesToScroll: 1,
		// 		asNavFor: '.product-slider',
		// 		dots: false,
		// 		infinite: true,
		// 		arrows: false,
		// 		speed: 1000,
		// 		centerMode: true,
		// 		focusOnSelect: true
		// 	});
			$("input[name='demo3_22']").TouchSpin({
				initval: 1
			});
		});
	</script>
</body>
</html><?php /**PATH C:\xampp\htdocs\EgunjBazar\resources\views/product_details.blade.php ENDPATH**/ ?>