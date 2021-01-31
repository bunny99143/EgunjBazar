@csrf
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Category Name</label>
		<div class="col-sm-12 col-md-10">
			{{-- <input class="form-control" type="text" style="width:40%;" name="category_name" placeholder="Category Name"> --}}
			{!! Form::text('category_name', null,['placeholder'=>'Category Name', 'style'=>'width:40%;','class'=>'form-control','required']) !!}
		</div>
	</div>
	
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Category Description</label>
		<div class="col-sm-12 col-md-10">
			{{-- <input class="form-control" type="text" name="category_desc" style="width:40%;" placeholder="Category Description"> --}}
			{!! Form::text('category_desc', null,['placeholder'=>'Category Description', 'style'=>'width:40%;','class'=>'form-control','required']) !!}
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Category Image</label>
		<div class="custom-file" style="width:32%;margin-left:15px;">
			
			<input type="file" name="category_image" class="custom-file-input" style="width:40%;">
			{{-- {!! Form::file('category_image', null,['class'=>'custom-file-input', 'style'=>'width:40%;']) !!} --}}
			<label class="custom-file-label">Choose file</label>
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label"></label>
		@if(isset($category))
		<div class="col-sm-12 col-md-10">
				<img src="{{ asset('images/category_image').'/'.$category->category_image }}" alt="icon" style="height:100px;">
		</div>
			@endif
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-primary"> Submit</button>
	</div>