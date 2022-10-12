
<?php $__env->startSection('content'); ?>
    
    <div class="container mt-3">
        <div class="table-responsive">
            <div class="mb-3">
                <input type="search" onkeyup="filterTable('search', 'itemsTable')" 
                class="form-control" id="search" placeholder="search..."/>
            </div>
            <table class="table table-borderless shadow" id="itemsTable">
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
                                    $<?php echo e(number_format(ceil($item->amount / 3545), 2)); ?>

                                    <?php endif; ?>
                                </td>
                                <td><?php echo e(date('D d M Y', strtotime($item->donated_at))); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </thead>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\charity\app\views/donations/public_list.blade.php ENDPATH**/ ?>