
@extends('fornt_layout.layout')
@section('content')
	

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
<script>

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
					feelCart_data();
					$('#paymnet_amount').val(response.cart.total_price);
					// return false;
				}
			});
		}
	
</script>
@endsection

	

    