

<?php $__env->startSection('content'); ?>

<div class="container mt-3">
	<div class="row justify-content-center">
		<div class="col-lg-8">
			<div class="card card-body shadow">
				<div class="row">
					<div class="col-lg-6">
						<img src="<?php echo e(asset('imgs/site/charity-money.jpg')); ?>" class="img" width="100%"/>
						<h3>Sanyu Babies Home <i class="fas fa-check-circle text-success"></i> </h3>
						<h5 class="text-muted">
							Hello, welcome to Sanyu Charity Organisation. Please fill in the required details in the form provided in order to continue and donate to children at <span class="text-success">Sanyu Babies Home <i class="fas fa-heart text-danger"></i> </span>
						</h5>
					</div>

					<div class="col-lg-6">
						<div class="mb-3" id="donate">
							<?php echo csrf_field(); ?>
							<span class="text-success font-weight-bolder">The donations are allowed in UGX shillings</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\charity\app\views/donations/money.blade.php ENDPATH**/ ?>