<?php echo csrf_field(); ?>
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Category Name</label>
		<div class="col-sm-12 col-md-10">
			
			<?php echo Form::text('category_name', null,['placeholder'=>'Category Name', 'style'=>'width:40%;','class'=>'form-control','required']); ?>

		</div>
	</div>
	
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Category Description</label>
		<div class="col-sm-12 col-md-10">
			
			<?php echo Form::text('category_desc', null,['placeholder'=>'Category Description', 'style'=>'width:40%;','class'=>'form-control','required']); ?>

		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Category Image</label>
		<div class="custom-file" style="width:32%;margin-left:15px;">
			
			<input type="file" name="category_image" class="custom-file-input" style="width:40%;">
			
			<label class="custom-file-label">Choose file</label>
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label"></label>
		<?php if(isset($category)): ?>
		<div class="col-sm-12 col-md-10">
				<img src="<?php echo e(asset('images/category_image').'/'.$category->category_image); ?>" alt="icon" style="height:100px;">
		</div>
			<?php endif; ?>
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-primary"> Submit</button>
	</div><?php /**PATH C:\xampp\htdocs\EgunjBazar\resources\views/category/form.blade.php ENDPATH**/ ?>