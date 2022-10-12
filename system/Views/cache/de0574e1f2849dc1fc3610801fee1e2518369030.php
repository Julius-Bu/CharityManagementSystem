

<?php $__env->startSection('content'); ?>

<div class="container mt-3">
	<div class="row justify-content-center">
		<div class="col-lg-12">
			<div class="card card-body shadow">
				<div class="row">
					<div class="col-lg-4">
						<img src="<?php echo e(asset('imgs/site/others.jpg')); ?>" class="img" width="100%"/>
						<h3>Sanyu Babies Home <i class="fas fa-check-circle text-success"></i> </h3>
						<h5 class="text-muted">
							Hello, welcome to Sanyu Charity Organisation. Please fill in the required details in the form provided in order to continue and donate Food to children at <span class="text-success">Sanyu Babies Home <i class="fas fa-heart text-danger"></i> </span>
						</h5>
					</div>

					<div class="col-lg-8">
                        <h4>Other Donations</h4>
						<form action="<?php echo e(url('donations/save')); ?>" method="POST" id="othersForm">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="email" class="w-100"> Email 
                                            <input type="email" name="email" class="form-control"
                                            autocomplete="off" value="<?php echo e($user->email !== '' ? $user->email : ''); ?>" required/>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="phone" class="w-100"> Phone Number 
                                            <input type="text" name="phone" class="form-control"
                                            autocomplete="off" value="<?php echo e($user->phone_number !== '' ? $user->phone_number : ''); ?>" required/>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="fname" class="w-100"> First Name 
                                            <input type="text" name="fname" class="form-control"
                                            autocomplete="off" value="<?php echo e($user->last_name !== '' ? $user->first_name : ''); ?>" required/>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="lname" class="w-100"> Last Name 
                                            <input type="text" name="lname" class="form-control"
                                            autocomplete="off" value="<?php echo e($user->last_name !== '' ? $user->last_name : ''); ?>" required/>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <hr/>
                            <div class="mb-3">
                                <h5>Items</h5>
                                <div class="d-flex justify-content-between">
                                    <div class="mb-3">
                                        <input type="text" name="categories[]"
                                            class="form-control"/>
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" name="categories[]"
                                            class="form-control"/>
                                    </div>
                                    
                                    <div class="mb-3"><a href="javascrpt:void(0)" class="btn btn-success btn-sm" id="other-foods-btn">Add More Items <i class="fas fa-plus-circle"></i> </a></div>
                                </div>
                                <div class="row" id="other-foods">

                                </div>
                            </div>
                            <div class="mb-3">
                            <label for="expected_donation_date" class="w-100">
                                Date for Donation
                                <input type="date" name="expected_donation_date" class="form-control" />
                                <small class="text-muted">(expected date to visit Sanyu babies home with the donations)</small>
                            </label>
                            </div>
                            <hr/>
                            <div class="mb-3">
                                <h5> Display my donation to the public</h5>
                                <label for="consent" class="w-100">
                                    <input type="radio" name="consent" class="custom-radio"
                                     value="1"/> &nbsp; Yes
                                     <input type="radio" name="consent" class="custom-radio ml-3"
                                     value="0" checked/> &nbsp; No
                                </label>
                            </div>
                            <div class="mb-3">
                                <div class="d-flex justify-content-end">
                                    <input type="hidden" name="cat" value="4"/>
                                    <button type="submit" id="donate-btn" class="btn btn-success"
                                    >Donate Items</button>
                                </div>
                            </div>
                            <div class="response" id="response"></div>
                        </form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script type="text/javascript">
        request({form: 'othersForm', btn: 'donate-btn'});
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\charity\app\views/donations/others.blade.php ENDPATH**/ ?>