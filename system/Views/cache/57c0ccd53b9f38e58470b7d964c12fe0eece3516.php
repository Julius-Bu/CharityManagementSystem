
<?php $__env->startSection('content'); ?>
    
    <div class="container mt-3">
        <div class="jumbotron py-1">
            Dashboard >> Donations >> <span class="text-primary"><?php echo e(strtoupper($cat)); ?> Donations</span>
        </div>
        <div class="table-responsive">
            <table class="table table-borderless shadow" id="data-table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Full Name</th>
                        <?php if($cat === 'clothes' || $cat === 'food' || $cat === 'others'): ?>
                        <th>Items</th>
                        <?php elseif($cat === 'funds'): ?>
                        <th>Amount (US Dollars)</th>
                        <?php elseif($cat === 'shoes'): ?>
                        <th>Pairs of Shoes</th>  
                        <?php endif; ?>
                        <th>Donated on</th>
                        <th>Is Public</th>
                    </tr>

                    <tbody>
                        <?php $no = 0; ?>
                        <?php $__currentLoopData = $collection; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php $no++; ?>
                            <tr>
                                <td><?php echo e($no); ?></td>
                                <td><?php echo e($item->first_name . " " . $item->last_name); ?></td>
                                <td>
                                    <?php if($cat === 'clothes' || $cat === 'food' || $cat === 'others'): ?>
                                        <?php $category = explode(',', $item->categories) ?>
                                        <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $catItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <span class="badge badge-primary"><?php echo e($catItem); ?></span>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php elseif($cat === 'shoes'): ?>
                                        <?php echo e($item->quantity); ?> Pairs
                                    <?php elseif($cat === 'funds'): ?>
                                    $<?php echo e(number_format($item->amount, 2)); ?>

                                    <?php endif; ?>
                                </td>
                                <td><?php echo e(date('D d M Y', strtotime($item->donated_at))); ?></td>
                                <?php if($cat === 'funds'): ?>
                                <td><?php echo e($item->is_anonymous == 1 ? "YES" : "NO"); ?></td>
                                <?php else: ?>
                                <td><?php echo e($item->is_public == 1 ? "YES" : "NO"); ?></td>
                                <?php endif; ?>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </thead>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\charity\app\views/admin/donations/listing.blade.php ENDPATH**/ ?>