
<?php $__env->startSection('content'); ?>
	<div class="main-container">
		<div class="pd-ltr-20">
		
			<div class="card-box mb-30">
				<h2 class="h4 pd-20">Best Selling Products</h2>
				<table class="table" style="display: table;">
					<thead>
						<tr>
							<th class="table-plus datatable-nosort" >Product Image</th>
							<th  class="datatable-nosort" >Name</th>
							<th class="datatable-nosort" >Description</th>

							<th class="datatable-nosort" >Product Price </th>


							<th class="datatable-nosort" >Category Name</th>
							<?php if(auth()->user()->id==1): ?>
							<th class="datatable-nosort" >Customer Name</th>
							<?php endif; ?>
							<th class="datatable-nosort">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							
						
						<tr>
							<td class="table-plus">
								<img src="<?php echo e(asset('images/product_image/')."/".$item->product_image); ?>" width="150" height="100" alt="">
							</td>
							<td>
								<?php echo e($item->product_name); ?>

							</td>
							<td><?php echo e($item->product_desc); ?></td>
							<td><?php echo e($item->product_price); ?></td>

							<td><?php echo e($item->category_name); ?></td>
							<?php if(auth()->user()->id==1): ?>
							<td ><?php echo e($item->user_name); ?></td>
							<?php endif; ?>

							<td>
							<a href="<?php echo e(url('/product/'.$item->id.'/edit')); ?>" ><i class="dw dw-edit2"></i> Edit</a>
							<form action="<?php echo e(url('/product', ['id' => $item->id])); ?>" method="post" style="display: inline-block;">
								<button  class="delete_product" title="Delete" onclick="return confirm('Are you sure want to remove this product ?')" type="submit"  style="padding-left:15px;border:none;background-color: white;
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

	
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\EgunjBazar\resources\views/product/index.blade.php ENDPATH**/ ?>