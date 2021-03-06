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
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>
<body>

<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

/* Style inputs */
input[type=text],input[type=email], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Style the container/contact section */
/* .container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;
} */

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
/* .row:after {
  content: "";
  display: table;
  clear: both;
} */

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
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
  <div style="text-align:center">
  @if ($message = Session::get('success'))
      <div class="row alert" >
         <div class="col-4" ></div>				<div class="col-4" >
					<p style="margin:0px;color:white;border-color: rgba(0, 128, 0, 0.54);background-color: rgba(0, 128, 0, 0.54);border-radius: 4px;padding: 10px 10px;width:300px;text-align:center;">{{ $message }}</p>
				</div>
        <div class="col-4" ></div>	
        </div>
			@endif
			@if ($message = Session::get('error'))
				<div class="alert" >
					<p style="margin:0px;color:white;border-color: #F64E60;background-color:#F64E60;border-radius: 4px;padding: 10px 10px;width:300px;text-align:center;">{{ $message }}</p>
				</div>
			@endif
    <h2>Contact Us</h2>
    <p>Email us with any question or inquires or call +918200383167 .We would be happy to answer your question:</p>
  </div>
  <div class="row">
    <div class="column">
      <img src="/w3images/map.jpg" style="width:100%">
    </div>
    <div class="column">

    <form action="{{ url('/contact_us') }}" method="post" style="display: inline-block;">
    @csrf
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="f_name" placeholder="Your name..">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="l_name" placeholder="Your last name..">
        
        <label for="lname">E-mail</label>
        <input type="email" id="email" name="email" placeholder="Your Email..">
        
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" value="Submit">
      </form>
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
                    <button type="button" class="btn btn-primary">Order Place</button>
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
</script>
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