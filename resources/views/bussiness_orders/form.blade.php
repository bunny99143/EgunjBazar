{{ Form::model($orders, array('url' => route('myorders.update',$orders->id), 'method' => 'PUT', 'files' => true , 'class'=>'col-md-12')) }}
    
@csrf
{{-- <div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Product Category</label>
		<div class="col-sm-12 col-md-10">
			{!! Form::select('category_id',$category, null,['placeholder'=>'Select Category', 'style'=>'width:40%;','class'=>'form-control','required']) !!}
		</div>
	</div> --}}

	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Order #ID</label>
		<div class="col-sm-12 col-md-10">
			{!! Form::text('product_name', $orders->id,['placeholder'=>'Product Name', 'style'=>'width:40%;','class'=>'form-control','required','disabled']) !!}
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Customer Name</label>
		<div class="col-sm-12 col-md-10">
			{!! Form::text('product_name', $orders->f_name." ".$orders->l_name,['placeholder'=>'Product Name', 'style'=>'width:40%;','class'=>'form-control','required','disabled']) !!}
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Customer Email</label>
		<div class="col-sm-12 col-md-10">
			{!! Form::text('product_name', $orders->email,['placeholder'=>'Product Name', 'style'=>'width:40%;','class'=>'form-control','required','disabled']) !!}
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Customer PhoneNumber</label>
		<div class="col-sm-12 col-md-10">
			{!! Form::text('product_name', $orders->phone_number,['placeholder'=>'Product Name', 'style'=>'width:40%;','class'=>'form-control','required','disabled']) !!}
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Customer Address</label>
		<div class="col-sm-12 col-md-10">
			<textarea style="width:40%;" class="form-control" disabled>{{$orders->address}}</textarea>
		</div>
	</div>

	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Order Date	</label>
		<div class="col-sm-12 col-md-10">
			{!! Form::text('product_name', date('d-m-Y',strtotime($orders->created_at)),['placeholder'=>'Product Name', 'style'=>'width:40%;','class'=>'form-control','required','disabled']) !!}
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Product Name</label>
		<div class="col-sm-12 col-md-10">
			{!! Form::text('product_name', $orders->product_name,['placeholder'=>'Product Name', 'style'=>'width:40%;','class'=>'form-control','required','disabled']) !!}
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Product Image</label>
		<div class="col-sm-12 col-md-10">
			<img src="{{ asset('images/product_image/')."/".$orders->product_image }}" width="150" height="100" alt="">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Price</label>
		<div class="col-sm-12 col-md-10">
			<div class="row">
				<div class="col 2">Quantity</div>
				<div class="col 2">Tone Price</div>
				<div class="col 3">Total Price</div>
			</div><hr/>
			<div class="row">
				
				<div class="col 2">{{$orders->quantity }} Tone</div>*
				<div class="col 2">₹{{$orders->price}}</div>=								
				<div class="col 3">₹{{$orders->total_price}}</div>
			</div>
		</div>
	</div>

	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Order Status</label>
		<div class="col-sm-12 col-md-10">
			
			@if($orders->order_status==1)
			{!! Form::select('order_status',['0'=>'Pending', '1'=>'Delivered'],$orders->order_status,['class'=>'form-control','required','style'=>'width:40%;','disabled']); !!}
			@else 
			{!! Form::select('order_status',['0'=>'Pending', '1'=>'Delivered'],$orders->order_status,['class'=>'form-control','required','style'=>'width:40%;']); !!}
			@endif
			
				
		</div>
	</div>

	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Transaction Id</label>
		<div class="col-sm-12 col-md-10">
			{!! Form::text('product_name', isset($orders->transaction_id)?$orders->transaction_id:'COD',['placeholder'=>'Transaction Id', 'style'=>'width:40%;','class'=>'form-control','required','disabled']) !!}
		</div>
	</div>

	<div class="form-group">
		<button type="submit" class="btn btn-primary"> Submit</button>
	</div>
	
{{ Form::close() }}

	