

<?php $__env->startSection('content'); ?>

<div class="container mt-3">
	<div class="row justify-content-center">
		<div class="col-lg-12">
			<div class="card card-body shadow">
				<div class="row">
					<div class="col-lg-4">
						<img src="<?php echo e(asset('imgs/site/charity-clothes.jpg')); ?>" class="img" width="100%"/>
						<h3>Sanyu Babies Home <i class="fas fa-check-circle text-success"></i> </h3>
						<h5 class="text-muted">
							Hello, welcome to Sanyu Charity Organisation. Please fill in the required details in the form provided in order to continue and donate clothes to children at <span class="text-success">Sanyu Babies Home <i class="fas fa-heart text-danger"></i> </span>
						</h5>
					</div>

					<div class="col-lg-8">
                        <h4>Donate Clothes</h4>
						<form action="<?php echo e(url('donations/save')); ?>" method="POST" id="clothesForm">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="email" class="w-100"> Email 
                                            <input type="email" name="email" class="form-control"
                                            autocomplete="off"  value="<?php echo e($user->email !== '' ? $user->email : ''); ?>" required/>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="phone" class="w-100"> Phone Number 
                                            <input type="number" name="phone" class="form-control"
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
                                            autocomplete="off"  value="<?php echo e($user->first_name !== '' ? $user->last_name : ''); ?>" required/>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="lname" class="w-100"> Last Name 
                                            <input type="text" name="lname" class="form-control"
                                            autocomplete="off"  value="<?php echo e($user->last_name !== '' ? $user->last_name : ''); ?>" required/>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <hr/>
                            <div class="mb-3">
                                <h5>Clothes Categories</h5>
                                <div class="d-flex">
                                    <ul class="unstyled">
                                        <li>
                                            <input type="checkbox" name="categories[]"
                                            class="custom-checkbox" value="Shirts"/> Shirts
                                        </li>
                                        <li>
                                            <input type="checkbox" name="categories[]"
                                            class="custom-checkbox" value="T-shirts"/> T-shirts
                                        </li>
                                        <li>
                                            <input type="checkbox" name="categories[]"
                                            class="custom-checkbox" value="Sweaters"/> Sweaters
                                        </li>
                                    </ul>
                                    <ul class="unstyled">
                                        <li>
                                            <input type="checkbox" name="categories[]"
                                            class="custom-checkbox" value="Trousers"/> Trousers
                                        </li>
                                        <li>
                                            <input type="checkbox" name="categories[]"
                                            class="custom-checkbox" value="Geans"/> Geans
                                        </li>
                                        <li>
                                            <input type="checkbox" name="categories[]"
                                            class="custom-checkbox" value="Shorts"/> Shorts
                                        </li>
                                    </ul>
                                    <ul class="unstyled">
                                        <li>
                                            <input type="checkbox" name="categories[]"
                                            class="custom-checkbox" value="Jackets"/> Jackets
                                        </li>
                                        <li>
                                            <input type="checkbox" name="categories[]"
                                            class="custom-checkbox" value="Underware"/> Underware
                                        </li>
                                        <li>
                                            <input type="checkbox" name="categories[]"
                                            class="custom-checkbox" value="Suits"/> Suits
                                        </li>
                                    </ul>
                                    <ul class="unstyled">
                                        <li>
                                            <input type="checkbox" name="categories[]"
                                            class="custom-checkbox" value="Dresses"/> Dresses
                                        </li>
                                        <li>
                                            <input type="checkbox" name="categories[]"
                                            class="custom-checkbox" value="Skirts"/> Skirts
                                        </li>
                                        <li>
                                            <input type="checkbox" name="categories[]"
                                            class="custom-checkbox" value="Jumpers"/> Jumpers
                                        </li>
                                    </ul>
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
                                    <input type="hidden" name="cat" value="1"/>
                                    <button type="submit" id="donate-btn" class="btn btn-success"
                                    >Donate Clothes</button>
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
        request({form: 'clothesForm', btn: 'donate-btn'});
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\charity\app\views/donations/clothes.blade.php ENDPATH**/ ?>