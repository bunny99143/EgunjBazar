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
							{{-- <th class="datatable-nosort">Action</th> --}}
						</tr>
					</thead>
					<tbody>
						{{-- @foreach ($product as $item)
							
						
						<tr>
							<td class="table-plus">
								<img src="{{ asset('images/product_image/')."/".$item->product_image }}" width="150" height="100" alt="">
							</td>
							<td>
								{{$item->product_name  }}
							</td>
							<td>{{$item->product_desc  }}</td>
							<td>{{$item->product_price  }}</td>

							<td>{{$item->category_name  }}</td>
							@if(auth()->user()->id==1)
							<td >{{$item->user_name  }}</td>
							@endif

							<td>
							<a href="{{ url('/product/'.$item->id.'/edit') }}" ><i class="dw dw-edit2"></i> Edit</a>
							<form action="{{ url('/product', ['id' => $item->id]) }}" method="post" style="display: inline-block;">
								<button  class="delete_product" title="Delete" onclick="return confirm('Are you sure want to remove this product ?')" type="submit"  style="padding-left:15px;border:none;background-color: white;
								"><i class="dw dw-delete-3"></i> Delete</button>
								@method('delete')
								@csrf
							</form>
							</td>
						</tr>
						@endforeach --}}
						
					</tbody>
				</table>
			</div>
			<div class="footer-wrap pd-20 mb-20 card-box" style="bottom: 0;">
				E-Gunj Bazar
			</div>
		</div>
	</div>
	
@endsection

	