<div class="main-container">
	<div class="pd-ltr-20 xs-pd-20-10">
		<div class="min-height-200px">
			
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
						<button type="button" class="btn btn-secondary" onclick="return remove_cart();">Remove Cart</button>
						{{-- <button type="button" class="btn btn-primary" onclick="return place_order();">Order Place</button> --}}
						<div class="dropdown">
							<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Order Place
							<span class="caret"></span></button>
							<ul class="dropdown-menu" style="padding: 5px;">
							  <li style="padding: 15px;">
								{{-- <a href="javascript:;"  onclick="return place_order();">COD </a> --}}
								<button type="button" onclick="return place_order();" class="stripe-button-el" style="visibility: visible; text-align: center;width:120px;"><span style="display: block; min-height: 30px;">COD</span></button>
							</li>
							  <li style="padding: 15px;">
								<form action="{{ route('stripe.post') }}" id="stripe-form" method="POST">
								@csrf
								<input type="hidden" name="amount" value="{{ \App\Cart::where('user_id',auth()->user()->id)->sum('total_price') }}" id="paymnet_amount"/>

								<script
										src="https://checkout.stripe.com/checkout.js" class="stripe-button"
										data-key="pk_test_51IdC5fSHgrybNeXEp4QgRZ1j5S7Z722e8K3l5ndSbe3Y5IL7EzEFZTwsCKmJhrElQNkYdI1esMeFsu6USQ1qzwqi00Q8pzJjLy"
										data-name="Egunj Order Place"
										data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
										data-locale="auto"
										data-currency="inr">
										</script>
								</div>
							</form></li>
							</ul>
						  </div>
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
		@if (session('status'))
		<script>
			jQuery(document).ready(function() {
				swal({
					title: 'Order Place Successfully.',
					width: 600,
					padding: 100
				});
			});
		</script>
	@endif
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
				$("#page_loder").hide();
				feelCart_data();
			
				$("input[name='demo3_22']").TouchSpin({
					initval: 1,
					min:1,
				});

			});
				function place_order(){

					$("#page_loder").show();
					$.ajax(
					{
						url: "/place_order",
						type: 'GET',
						data: {
							"_token": "{{ csrf_token() }}",
						},
						success: function (response){
							$("#cart_modal").modal('hide');
							$('#cart_items').empty();
							swal({
									title: 'Order Place Successfully.',
									width: 600,
									padding: 100
								})
								$("#page_loder").hide();
							setTimeout(function () {
								
								window.location.reload(true);
							},3000);
	
							  return false;
						}
					});
				}

				function remove_cart(){
					$.ajax(
					{
						url: "/remove_cart",
						type: 'GET',
						data: {
							"_token": "{{ csrf_token() }}",
						},
						success: function (response){
							$("#cart_modal").modal('hide');
							$('#cart_items').empty();
							$('#paymnet_amount').val(0);
							feelCart_data();
							swal({
								title: 'Cart empty Successfully.',
								width: 600,
								padding: 100,
							})
							setTimeout(function () {
							
							window.location.reload(true);
							},3000);
	
							return false;
						}
					});
				}
		</script>
</body>
</html>