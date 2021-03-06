
<?php $__env->startSection('content'); ?>
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
						<?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							
						
						<tr>
							<td class="table-plus">
								<img src="<?php echo e(asset('images/category_image/')."/".$item->category_image); ?>" width="150" height="100" alt="">
							</td>
							<td>
								<?php echo e($item->category_name); ?>

							</td>
							<td><?php echo e($item->category_desc); ?></td>
							
							<td>
							<a href="<?php echo e(url('/category/'.$item->id.'/edit')); ?>" ><i class="dw dw-edit2"></i> Edit</a>
							<form action="<?php echo e(url('/category', ['id' => $item->id])); ?>" method="post" style="display: inline-block;">
								<button  class="delete_category" title="Delete" onclick="return confirm('Are you sure want to remove this category ?')" type="submit"  style="padding-left:15px;border:none;background-color: white;
								"><i class="dw dw-delete-3"></i> Delete</button>
								<?php echo method_field('delete'); ?>
								<?php echo csrf_field(); ?>
							</form>

							
							</td>
						</tr>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						
					</tbody>
				</table>
			</div>
			<div class="footer-wrap pd-20 mb-20 card-box" style="bottom: 0;">
				E-Gunj Bazar
			</div>
		</div>
	</div>
	
<?php $__env->stopSection(); ?>

	
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\EgunjBazar\resources\views/category/index.blade.php ENDPATH**/ ?>