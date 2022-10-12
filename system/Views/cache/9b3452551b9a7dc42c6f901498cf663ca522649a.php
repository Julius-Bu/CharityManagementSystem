

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center mt-3">
            <div class="col-md-12 col-lg-8 col-xl-8">
                <div class="card card-body shadow">
                    <div class="row">
                        <div class="col-lg-6 col-xl-6">
                            <div class="text-center">
                                <img src="<?php echo e(asset('imgs/icons/logo.png')); ?>" alt="site logo"/>
                                <h3 class="text-pup font-weight-bold">Sanyu Babies Home <i class="fas fa-check-circle text-success"></i> </h3>
                            </div>
                            <div class="response"></div>
                        </div>
    
                        <div class="col-lg-6 col-xl-6">
                            <h4 class="font-weight-bold text-info">Create Account</h4>
                            <form action="<?php echo e(url('user/store')); ?>" method="post" id="accountForm">
                                <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" name="email" class="form-control bg-light" placeholder="enter your email or phone number" autocomplete="off" required/>
                                </div>
                                <div class="form-group">
                                    <label for="fname">First Name</label>
                                    <input type="text" name="fname" class="form-control bg-light" autocomplete="off" required/>
                                </div>
                                <div class="form-group">
                                    <label for="lname">Last Name</label>
                                    <input type="text" name="lname" class="form-control bg-light" autocomplete="off" required/>
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone Number</label>
                                    <i class="fas fa-phone-alt text-success"></i> <input type="text" name="phone" class="form-control bg-light" autocomplete="off" required/>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password <i class="fas fa-key text-success"></i> 
                                     <span id="user-password"></span></label>
                                    <input type="password" name="password" class="form-control bg-light" 
                                    autocomplete="off"
                                    onkeyup="document.getElementById('user-password').innerHTML = '(' + this.value + ')'" required/>
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-success w-100 login-btn"
                                    id="register-btn">Create My Account</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\charity\app\views/account.blade.php ENDPATH**/ ?>