

<?php $__env->startSection('content'); ?>
    
<div class="row">
    <div class="col-md-12">
        <h4>Food Donations</h4>
        <canvas id="foodCanvas" class="shadow mt-3"></canvas>
    </div>
    <hr/>
    <div class="col-md-12">
        <h4>Clothes Donations</h4>
        <canvas id="clothesCanvas" class="shadow mt-3"></canvas>
    </div>
    <hr/>
    <div class="col-md-12">
        <h4>Shoes Donations</h4>
        <canvas id="shoesCanvas" class="shadow mt-3"></canvas>
    </div>
    <hr/>
    <div class="col-md-12">
        <h4>Money / Funds Donations</h4>
        <canvas id="fundsCanvas" class="shadow mt-3"></canvas>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <script src="<?php echo e(asset('js/user-data-visualization.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('users.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\charity\app\views/users/donations/charts.blade.php ENDPATH**/ ?>