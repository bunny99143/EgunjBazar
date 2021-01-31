@extends('layouts.layout')
@section('content')
	<div class="main-container">
		<div class="pd-ltr-20">
		
			<div class="card-box mb-30">
				<h2 class="h4 pd-20">Best Selling Categories</h2>
				<table class="table" style="display: table;">
					<thead>
						<tr>
							<th class="table-plus datatable-nosort" >Category Image</th>
							<th  class="datatable-nosort" >Name</th>
							<th class="datatable-nosort" >Description</th>
							<th class="datatable-nosort">Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($category as $item)
							
						
						<tr>
							<td class="table-plus">
								<img src="{{ asset('images/category_image/')."/".$item->category_image }}" width="150" height="100" alt="">
							</td>
							<td>
								{{$item->category_name  }}
							</td>
							<td>{{$item->category_desc  }}</td>
							
							<td>
							<a href="{{ url('/category/'.$item->id.'/edit') }}" ><i class="dw dw-edit2"></i> Edit</a>
							<form action="{{ url('/category', ['id' => $item->id]) }}" method="post" style="display: inline-block;">
								<button  class="delete_category" title="Delete" onclick="return confirm('Are you sure want to remove this category ?')" type="submit"  style="padding-left:15px;border:none;background-color: white;
								"><i class="dw dw-delete-3"></i> Delete</button>
								@method('delete')
								@csrf
							</form>

							{{-- <a href="site/#" style="padding-left:15px;"><i class="dw dw-delete-3"></i> Delete</a> --}}
							</td>
						</tr>
						@endforeach
						
					</tbody>
				</table>
			</div>
			<div class="footer-wrap pd-20 mb-20 card-box" style="bottom: 0;">
				E-Gunj Bazar
			</div>
		</div>
	</div>
	
@endsection

	