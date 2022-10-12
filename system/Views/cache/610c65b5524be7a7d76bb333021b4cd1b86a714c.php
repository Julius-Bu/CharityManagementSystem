

<?php $__env->startSection('content'); ?>

<div class="container mt-3">
	<div class="row justify-content-center">
		<div class="col-lg-6">
			<div class="card card-body shadow">
				<h4 class="text-success">Thank you, 
                    <span class="text-warning"><?php echo e($user->first_name . " " .  $user->last_name); ?></span>
                 for your donation of $<?php echo e(number_format($user->amount, 2)); ?> (US Dollars) to 
                Sanyu Babies Home. <i class="fas fa-heart text-danger"></i></h4>
			</div>
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\charity\app\views/donations/money-success.blade.php ENDPATH**/ ?>