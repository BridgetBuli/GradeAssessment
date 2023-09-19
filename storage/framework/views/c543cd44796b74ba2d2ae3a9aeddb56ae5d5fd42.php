
<?php $__env->startSection('addCss'); ?>

<?php $__env->startSection('title', 'Management'); ?>
<?php $__env->startSection('content'); ?>


<body style="height:100vh">

    <h2 style="float:right; background-color:#4D4DFF; margin-left:2px"> 
        <form method="POST" action="<?php echo e(route('commodities.store')); ?>">
            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
            <input type="hidden" name="name" value="Cement">
            <input type="hidden" name="category_id" value="2">
            <input type="hidden" name="warehouse_id" value="1">
            <input type="hidden" name="price" value="25000">
            <input type="hidden" name="quantity" value="25">
            <button type="submit">Commodity</button>
        </form>
    </h2>

    <?php $__currentLoopData = $commodities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $commodity): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div style="border: 2px solid black; margin-top:2px;">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRFUr6lsDwuA7dtDvU8HzskKTPw3VL4xKkpa3xc1eGrOjXlYOvxwer-Oab0JTXUte1TOFs&usqp=CAU" alt="Avatar" style="width:10%">
            <a style="float:right">Detail</a>
            <div>
                <h4><b><?php echo e($commodity->name); ?></b></h4>
                <p>Category:<?php echo e($commodity->category->name); ?></p>
                <p>price:<?php echo e($commodity->price); ?></p>
                <?php if( $commodity->quantity != 0 ): ?>
                    <p style="color:green">quantity:<?php echo e($commodity->quantity); ?></p>
                <?php else: ?>
                    <p style="color:red">quantity:Out Stock</p>
                <?php endif; ?>
                <div>
                    <ol>

                        <li>
                            <form method="POST" action="<?php echo e(route('commodities.update', $commodity->id)); ?>">
                                <input type="hidden" name="_method" value="PUT">
                                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                <button type="submit">update</button>
                            </form>
                        </li>

                        <li>
                            <form method="POST" action="<?php echo e(route('commodities.destroy', $commodity->id)); ?>">
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
<?php echo $__env->make('component.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\projects\Inventory_management_system\resources\views/Commodity/Commodities.blade.php ENDPATH**/ ?>