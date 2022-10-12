

<?php $__env->startSection('content'); ?>
    
<div class="row">
    <div class="col-lg-6">
        <canvas id="foodCanvas" class="shadow mt-3"></canvas>
    </div>
    <div class="col-lg-6">
        <canvas id="clothesCanvas" class="shadow mt-3"></canvas>
    </div>
    <div class="col-lg-6">
        <canvas id="shoesCanvas" class="shadow mt-3"></canvas>
    </div>
    <div class="col-lg-6">
        <canvas id="fundsCanvas" class="shadow mt-3"></canvas>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <script src="<?php echo e(asset('js/user-data-visualization.js')); ?>"></script>
    <script>
        var windowObjectReference;var windowFeatures = "popup";function printReport(url) {windowObjectReference = window.open(window.location.origin + url, "SANYU BABIES HOME", windowFeatures);}
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('users.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\charity\app\views/users/index.blade.php ENDPATH**/ ?>