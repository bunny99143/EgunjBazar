<?php echo csrf_field(); ?>
<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label"></label>
		<div class="col-sm-12 col-md-10">
			<?php if(isset($user->profile_image)): ?>
				<img src="<?php echo e(asset('images/profile_image').'/'.$user->profile_image); ?>" alt="" style="    height: 100px;width: 100px;"/>
			<?php endif; ?>
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Profile Image</label>
		<div class="col-sm-12 col-md-10">
			<?php echo Form::file('profile_image', null,['placeholder'=>'Profile Image', 'style'=>'width:40%;','class'=>'form-control','required']); ?>

		</div>
	</div>
 	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">First Name</label>
		<div class="col-sm-12 col-md-10">
			<?php echo Form::text('f_name', null,['placeholder'=>'First Name', 'style'=>'width:40%;','class'=>'form-control','required']); ?>

		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Last Name</label>
		<div class="col-sm-12 col-md-10">
			<?php echo Form::text('l_name', null,['placeholder'=>'Last Name', 'style'=>'width:40%;','class'=>'form-control','required']); ?>

		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Email</label>
		<div class="col-sm-12 col-md-10">
			<?php echo Form::text('email', null,['placeholder'=>'Email', 'style'=>'width:40%;','class'=>'form-control','required']); ?>

		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Phone No</label>
		<div class="col-sm-12 col-md-10">
			<?php echo Form::text('phone_number', null,['placeholder'=>'phone_number', 'style'=>'width:40%;','class'=>'form-control','required']); ?>

		</div>
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-primary"> Submit</button>
	</div>
<!--


	<?php /**PATH C:\xampp\htdocs\EgunjBazar\resources\views/profile/form.blade.php ENDPATH**/ ?>