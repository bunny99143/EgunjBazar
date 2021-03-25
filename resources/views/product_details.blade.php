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
	<link rel="stylesheet" type="text/css" href="{{ asset('site/src/plugins/sweetalert2/sweetalert2.css') }}">
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
                <!-- Button -->
				@isset (auth()->user()->id)
				<a class="navbar-btn btn btn-sm btn-primary d-none d-lg-inline-block ml-3" data-toggle="modal" data-target="#cart_modal" type="button"  href="#" onclick="return feelCart_data();">
					My Carts
					<span class="badge notification-active" id="cart_items">{{ \App\Cart::where('user_id',auth()->user()->id)->count() }}</span>
				</a>
				<a class="navbar-btn btn btn-sm btn-primary d-none d-lg-inline-block ml-3" href="{{ url('login')}}">
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
										<img src="{{ asset('images/product_image/')."/".$product->product_image }}" alt="">
									</div>
									
								</div>
								<div class="product-slider-nav">
									<!-- <div class="product-slide-nav">
										<img src="{{ asset('images/product_image/')."/".$product->product_image }}" alt="">
									</div>
									 -->
								</div>
							</div>
							<div class="col-lg-6 col-md-12 col-sm-12">
								<div class="product-detail-desc pd-20 card-box height-100-p">
									<h4 class="mb-20 pt-20">{{ $product->product_name }}</h4>
									<p>{{ $product->product_desc }}</p>
									<div class="price">
										Price  : <ins> {{ $product->product_price }}</ins>
									</div>
									<div class="row">
										<div class="col-md-4 col-4">
											<input id="demo3_22" class="col-4" type="text" value="1" min="1" name="demo3_22">
										</div>
										<div class="col-md-6 col-6">
											<select class="form-control col-6" id="for_qout" disabled>
												{{-- <option value="kg">K.G</option> --}}
												<option value="tone">Tone</option>
											<select>
										</div>
									</div>

									<div class="row">
										<div class="col-md-6 col-6">
											@isset (auth()->user()->id)
											<a href="javascript:;" onclick="return add_cart_deta();" class="btn btn-primary btn-block" id="add_cart_deta">Add To Cart</a>
											@else
											<a href="{{url('login')}}" class="btn btn-primary btn-block" >Add To Cart</a>
											@endisset
										</div>
										{{-- <div class="col-md-6 col-6">
											<a href="#" class="btn btn-outline-primary btn-block">Buy Now</a>
										</div> --}}
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
			<div class="modal fade" id="cart_modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title" id="myLargeModalLabel">My Cart</h4>
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
						</div>
						<div class="modal-body">
							<div id="model_cart_data">
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
							<button type="button" class="btn btn-primary" onclick="return place_order();">Order Place</button>
						</div>
					</div>
				</div>
			</div>

            <script src="{{ asset('site/vendors/scripts/core.js') }}"></script>
	<script src="{{ asset('site/vendors/scripts/script.min.js') }}"></script>
	<script src="{{ asset('site/vendors/scripts/process.js') }}"></script>
	<script src="{{ asset('site/vendors/scripts/layout-settings.js') }}"></script>
    <script src="{{ asset('site/src/plugins/slick/slick.min.js') }}"></script>
	<!-- bootstrap-touchspin js -->
	<script src="{{ asset('site/src/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js') }}"></script>

	<script src="{{ asset('site/src/plugins/sweetalert2/sweetalert2.all.js') }}"></script>
	<script src="{{ asset('site/src/plugins/sweetalert2/sweet-alert.init.js') }}"></script>

	<script>
		function feelCart_data(){

			$.ajax(
			{
				url: "/get_to_cart",
				type: 'GET',
				success: function (response){
					if(response.status==0){
						$("#model_cart_data").empty().html('<p>Cart is empty.</p>');
					}else{
						$("#model_cart_data").empty().html(response);
					}					
				}
			});

			
		}

		jQuery(document).ready(function() {
		
			$("input[name='demo3_22']").TouchSpin({
				initval: 1,
				min:1,
			});
		});
		// $("#add_cart_deta").click(function() {
			function add_cart_deta(){
				var que=$("#demo3_22").val();
				var for_qout=$("#for_qout").val();

				$.ajax(
				{
					url: "/add_to_cart",
					type: 'GET',
					data: {
						"que": que,
						"for_qout": for_qout,
						"product_id": {{$id}},
						"_token": "{{ csrf_token() }}",
					},
					success: function (response){
						// $("div").scrollTop()
						// $('#'+row_id).remove();
						$('#cart_items').empty().html('1');
						$("html, body").animate({ scrollTop: 0 }, "slow");
  						return false;
						// $('#bnum-error-p').html("Number is unblocked.");
						// $("#bnum-error-div").slideDown(300).delay(3000).slideUp(300);

					}
				});
			}

			function place_order(){
				window.location.replace("order_place");
			}
				// $.ajax(
				// {
				// 	url: "/place_order",
				// 	type: 'GET',
				// 	data: {
				// 		"_token": "{{ csrf_token() }}",
				// 	},
				// 	success: function (response){
				// 		$("#cart_modal").modal('hide');
				// 		$('#cart_items').empty();
				// 			swal({
				// 				title: 'Order Place Successfully.',
				// 				width: 600,
				// 				padding: 100,
				// 				background: '#fff url(vendors/images/img1.jpg)'
				// 			})

  				// 		return false;
				// 	}
				// });
			// }
		// });
	</script>
</body>
</html>