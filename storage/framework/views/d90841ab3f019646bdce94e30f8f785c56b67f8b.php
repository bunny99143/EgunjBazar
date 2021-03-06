<?php echo csrf_field(); ?>
<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Product Category</label>
		<div class="col-sm-12 col-md-10">
			<?php echo Form::select('category_id',$category, null,['placeholder'=>'Select Category', 'style'=>'width:40%;','class'=>'form-control','required']); ?>

		</div>
	</div>

	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Product Name</label>
		<div class="col-sm-12 col-md-10">
			<?php echo Form::text('product_name', null,['placeholder'=>'Product Name', 'style'=>'width:40%;','class'=>'form-control','required']); ?>

		</div>
	</div>
	
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Product Description</label>
		<div class="col-sm-12 col-md-10">
			<?php echo Form::text('product_desc', null,['placeholder'=>'Product Description', 'style'=>'width:40%;','class'=>'form-control','required']); ?>

		</div>
	</div>


	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Product Price</label>
		<div class="col-sm-12 col-md-10">
			<?php echo Form::text('product_price', null,['placeholder'=>'Product Price', 'style'=>'width:40%;','class'=>'form-control','required']); ?>

		</div>
	</div>







	
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Product Image</label>
		<div class="custom-file" style="width:32%;margin-left:15px;">
			
			<input type="file" name="product_image" class="custom-file-input" style="width:40%;">
			
			<label class="custom-file-label">Choose file</label>
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label"></label>
		<?php if(isset($product)): ?>
		<div class="col-sm-12 col-md-10">
				<img src="<?php echo e(asset('images/product_image').'/'.$product->product_image); ?>" alt="icon" style="height:100px;">
		</div>
			<?php endif; ?>
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-primary"> Submit</button>
	</div><?php /**PATH C:\xampp\htdocs\EgunjBazar\resources\views/product/form.blade.php ENDPATH**/ ?>