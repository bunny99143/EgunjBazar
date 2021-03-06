

<?php $__env->startSection('content'); ?>
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

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
         <div class="panel panel- default">
             <div class="panel heading">Profile</div>
                 <div class="panel-body">
                 <form method="POST" action="<?php echo e(url('/addProfile')); ?>" class="registration-form">
                        <?php echo csrf_field(); ?>


                            <!-- <div class="group"> <input id="check" type="checkbox" class="check" checked> <label for="check"><span class="icon"></span> Keep me Signed in</label> </div> -->                            </form>

                        </div>
                        <div class="sign-up-form">
                       <!-- <form method="POST" action="<?php echo e(route('register')); ?>" class="registration-form">-->

                        <!-- <form method="POST" action="<?php echo e(url('register')); ?>" > -->
                        <?php echo csrf_field(); ?>
                                <div class="group"> <label for="f_name" class="label">First Name</label> <input id="f_name" type="text" class="input" name="f_name" placeholder="Please enter first name">
                         <?php $__errorArgs = ['f_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> </div>
                            <div class="group"> <label for="l_name" class="label">Last Name</label> <input id="l_name" type="text" class="input" name="l_name" placeholder="Please enter last name"> 
                            <?php $__errorArgs = ['l_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></div>
                                <!--<div class="group"> <label for="role" class="label">Role</label> <select id="role"  class="input" name="role" placeholder="Please Select Role">
                 <option value="0">Buyer</option>
                 <option value="1">Supplier</option>-->

                        </select> </div>
                        
                            <div class="group"> <label for="email" class="label">Email</label> <input id="email" type="email" class="input" name="email" placeholder="Please enter email"> 
                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></div>
                            <!--<div class="group"> <label for="pass" class="label">Password</label> <input id="pass" type="password" class="input" name="password"  data-type="password" placeholder="Please enter your password"> 
                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></div>-->
                                <div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Profile Image</label>
		<div class="custom-file" style="width:32%;margin-left:15px;">
			
			<input type="file" name="profile_image" class="custom-file-input" style="width:40%;">
			
			<label class="custom-file-label">Choose file</label>
		</div>
	</div>

                                                                  
                            <div class="group"> <input type="submit" class="button" value="Add Profile"> </div>
                         
                            </form>


            
                  </div>
        </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				
				</div>
			</div>
            <script src="<?php echo e(asset('site/vendors/scripts/core.js')); ?>"></script>
	<script src="<?php echo e(asset('site/vendors/scripts/script.min.js')); ?>"></script>
	<script src="<?php echo e(asset('site/vendors/scripts/process.js')); ?>"></script>
	<script src="<?php echo e(asset('site/vendors/scripts/layout-settings.js')); ?>"></script>
    <script src="<?php echo e(asset('site/src/plugins/slick/slick.min.js')); ?>"></script>

    <script src="<?php echo e(asset('site/src/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js')); ?>"></script>
<!-- bootstrap-touchspin js -->
	
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
</html>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\EgunjBazar\resources\views/profile.blade.php ENDPATH**/ ?>