
<?php $__env->startSection('content'); ?>
	<div class="main-container">
		<div class="pd-ltr-20">
		
			<div class="pd-20 card-box mb-30">
				<h2 class="h4 pd-20">Edit Category</h2>
<hr>

<?php echo e(Form::model($category, array('url' => route('category.update',$category->id), 'method' => 'PUT', 'files' => true , 'class'=>'col-md-12'))); ?>

                
<?php echo $__env->make('category.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo e(Form::close()); ?>


							
			</div>
			<div class="footer-wrap pd-20 mb-20 card-box" style="bottom: 0;">
				E-Gunj Bazar
			</div>
		</div>
    </div>
<?php $__env->stopSection(); ?>

	
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\EgunjBazar\resources\views/category/edit.blade.php ENDPATH**/ ?>