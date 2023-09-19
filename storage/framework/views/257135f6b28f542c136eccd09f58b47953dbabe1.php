
<?php $__env->startSection('addCss'); ?>

<?php $__env->startSection('title', 'Management'); ?>
<?php $__env->startSection('content'); ?>


<body style="height:100vh">

    <h2 style="float:right; background-color:#4D4DFF;"> 
        <form method="POST" action="<?php echo e(route('warehouses.store')); ?>">
            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
            <input type="hidden" name="name" value="Liberty">
            <input type="hidden" name="location" value="Lilongwe">
            <button type="submit">Warehouses</button>
        </form>
    </h2>

    <?php $__currentLoopData = $warehouses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $warehouse): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div style="border: 2px solid black; margin-top:2px;">
            <img src="https://png.pngitem.com/pimgs/s/237-2374894_warehouse-es-warehouse-icons-png-transparent-png.png" alt="Avatar" style="width:10%">
            <a href="/<?php echo e(str_replace(" ", "_", $warehouse->name)); ?>/commodities/<?php echo e($warehouse->id); ?>" style="float:right">commodities</a>
            <div>
                <h4><b><?php echo e($warehouse->name); ?></b></h4>
                <p><?php echo e($warehouse->location); ?></p>
                <div>
                    <ol>

                        <li>
                            <form method="POST" action="<?php echo e(route('warehouses.update', $warehouse->id)); ?>">
                                <input type="hidden" name="_method" value="PUT">
                                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                <button type="submit">update</button>
                            </form>
                        </li>

                        <li>
                            <form method="POST" action="<?php echo e(route('warehouses.destroy', $warehouse->id)); ?>">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                <button type="submit">delete</button>
                            </form>
                        </li>

                    </ol>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


    <?php $__env->startSection('footerScripts'); ?>
        <?php echo \Illuminate\View\Factory::parentPlaceholder('footerScripts'); ?>
        <!-- <script src="<?php echo e(asset('boot/js/AJAX.js')); ?>"></script> -->
    <?php $__env->stopSection(); ?>
</body>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('component.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\projects\Inventory_management_system\resources\views/Warehouse/management.blade.php ENDPATH**/ ?>