@extends('layouts.layout')
@section('content')
	<div class="main-container">
		<div class="pd-ltr-20">
		
			<div class="card-box mb-30">
				<h2 class="h4 pd-20">My Orders</h2>
				<table class="table" style="display: table;">
					<thead>
						<tr>
							<th class="table-plus datatable-nosort" >#ID</th>
							<th  class="datatable-nosort" >Order Date</th>
							<th  class="datatable-nosort" >Product Name</th>
							<th class="table-plus datatable-nosort" >Product Image</th>
							<th class="table-plus datatable-nosort" >Product Price</th>						
							<th class="table-plus datatable-nosort" >Quantity</th>
							<th class="datatable-nosort">Action</th>
						</tr>
					</thead>
					<tbody>
						@forelse ($orders as $item)
							
						
						<tr>
							
							<td>
								{{$item->id  }}
							</td>
							<td>{{ date('d-m-Y',strtotime($item->created_at) ) }}</td>
							<td>{{$item->product_name  }}</td>
							<td class="table-plus">
								<img src="{{ asset('images/product_image/')."/".$item->product_image }}" width="150" height="100" alt="">
							</td>
							 <td>₹ {{$item->price  }}</td>
							<td ><b>{{$item->quantity  }}</b> Tone</td>
							<td>
							<a href="{{ url('/myorders/'.$item->id) }}" type="button"> View</a>						
							</td>
						</tr>
						@empty
						<tr>
							<td class="table-plus" colspan="6" style="text-align: center;">
							<h4><b >No Order Found. </b></h4>
							</td>
						</tr>
						@endforelse

						
					</tbody>
				</table>
			</div>
			<div class="footer-wrap pd-20 mb-20 card-box" style="bottom: 0 !important;" >
				E-Gunj Bazar
			</div>
		</div>
	</div>
	
@endsection

	