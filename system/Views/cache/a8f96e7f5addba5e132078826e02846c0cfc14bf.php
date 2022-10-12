

<?php $__env->startSection('content'); ?>

<div class="table-responsive">
    <table class="table table-bordered table-striped" id="data-table">
         <thead>
             <th>No</th>
             <th>Sur Name</th>
             <th>Given Name</th>
             <th>Join On</th>
             <th>Account Type</th>
         </thead>
         <tbody>
             <?php $__currentLoopData = $collection; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                 <tr>
                     <td><?php echo e($item->id); ?></td>
                     <td><?php echo e($item->first_name); ?></td>
                     <td><?php echo e($item->last_name); ?></td>
                     <td><?php echo e(date("D d M Y", strtotime($item->created_at))); ?></td>
                     <td><?php echo e(strtoupper($item->account_type)); ?></td>
                 </tr>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </tbody>
    </table>
</div>

<div class="row mt-3">
    <div class="row justify-content-center">
        <h4>Edit User Account Type</h4>
        <div class="col-lg-12">
            <div class="card card-body shadow">
                <form action="" method="POST" id="userForm">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label form="email" class="w-100">
                                    User Email
                                    <input type="text" name="email" class="form-control"
                                    list="users" id="email"/>
                                </label>
                                <datalist id="users">
                                    <?php $__currentLoopData = $collection; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($item->email); ?>"><?php echo e($item->first_name . " ". $item->last_name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </datalist>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="account" class="w-100">
                                    Choose Account Type
                                    <select name="account" class="form-control" id="account">
                                        <option value="user">USER</option>
                                        <option value="admin">ADMIN</option>
                                    </select>
                                </label>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="response"></div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
   <script>
       jQuery(() => {
           $("#account").on('change', function(){
               let account_type = $("#account").val();
               let email = $('#email').val();
               let token = $('input[name="_token"]').val();
               $.ajax({
                   url: 'user/edit',
                   type: 'POST',
                   data: {user: email, account: account_type, _token: token},
                   beforeSend: () => {
                        $(this).attr('disabled', true);
                        $(".response").html("<i class='fa fa-spinner text-primary'></i> processing...");
                   },
                   success: (response) => {
                       $(".response").html(response).fadeOut(10000);
                   },
                   complete: () => {
                        $(this).attr('disabled', false);
                   }
               });
           });
       })
    </script> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\charity\app\views/users/list.blade.php ENDPATH**/ ?>