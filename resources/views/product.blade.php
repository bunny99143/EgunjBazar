
@extends('fornt_layout.layout')
@section('content')
	
<section class="slice slice-lg pt-lg-6 pb-0 pb-lg-6 bg-section-secondary">
	<div class="container">
		<!-- Title -->
		<!-- Section title -->
		<div class="row mb-5 justify-content-center text-center">
			<div class="col-lg-6">                  
				<h2 class=" mt-4">{{ $category_name->category_name }}</h2>
			</div>
		</div>
		<!-- Card -->
		<div class="row mt-5">

			<div class="product-wrap">
				<div class="product-list">
					<ul class="row">
					@foreach($product as $item)
						<li class="col-lg-4 col-md-6 col-sm-12">
							<div class="product-box">
							<a href="{{ url('/product-detail/'.$item->id) }}">
								<div class="producct-img"><img src="{{ asset('images/product_image/')."/".$item->product_image }}" alt=""></div>
								<div class="product-caption">
									<h4><a href="#">{{$item->product_name}}</a></h4>
									<div class="price">
										Price  : <ins>{{$item->product_price}}</ins>
									</div>
									<!-- <a href="#" class="btn btn-outline-primary">Read More</a> -->
								</div>
								</a>
							</div>
						</li>
					@endforeach
					</ul>
				</div>
		</div>
	</div>
</section>

@endsection

	

    