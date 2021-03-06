
 <!-- <form method="POST" action="<?php echo e(url('/changepassword')); ?>" class="registration-form"> -->
<?php echo csrf_field(); ?>

<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Old Password</label>
		<div class="col-sm-12 col-md-10">
			<?php echo Form::password('old_password', null,['placeholder'=>'Old Password', 'style'=>'width:40%;','class'=>'form-control','required']); ?>

			<?php $__errorArgs = ['old_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
				<span class="invalid-feedback" role="alert">
					<strong><?php echo e($message); ?></strong>
				</span>
			<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">New Password </label>
		<div class="col-sm-12 col-md-10">
			<?php echo Form::password('new_password', null,['placeholder'=>'New Password', 'style'=>'width:40%;','class'=>'form-control','required']); ?>

			<?php $__errorArgs = ['new_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
				<span class="invalid-feedback" role="alert">
					<strong><?php echo e($message); ?></strong>
				</span>
			<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Conform Password</label>
		<div class="col-sm-12 col-md-10">
			<?php echo Form::password('cpassword', null,['placeholder'=>'conform Password ', 'style'=>'width:40%;','class'=>'form-control','required']); ?>

			<?php $__errorArgs = ['cpassword'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
				<span class="invalid-feedback" role="alert">
					<strong><?php echo e($message); ?></strong>
				</span>
			<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
		</div>
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-primary"> Submit</button>
	</div><?php /**PATH C:\xampp\htdocs\EgunjBazar\resources\views/changepassword/form.blade.php ENDPATH**/ ?>