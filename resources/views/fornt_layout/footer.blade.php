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
				
	
				function place_order(){
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
									padding: 100,
									background: '#fff url(vendors/images/img1.jpg)'
								})
	
							  return false;
						}
					});
				}
			// });
		</script>
</body>
</html>