
<?php $__env->startSection('addCss'); ?>

<?php $__env->startSection('title', 'Welcome'); ?>
<?php $__env->startSection('content'); ?>


<body style="padding-top:15vh">
    <table>
        <thead>
          <tr class="bg-light">
            <th class="border-top-0"></th>
            <th class="border-top-0">Department</th>
            <th class="border-top-0">Faculty</th>
            <th class="border-top-0">HOD</th>
            <th class="border-top-0">Dean</th>
            <th class="border-top-0">No. S</th>
          </tr>
        </thead>
        <tbody>
        </tbody>
    </table>


    <?php $__env->startSection('footerScripts'); ?>
        <?php echo \Illuminate\View\Factory::parentPlaceholder('footerScripts'); ?>
        <!-- <script src="<?php echo e(asset('boot/js/AJAX.js')); ?>"></script> -->
    <?php $__env->stopSection(); ?>
</body>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('component.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\projects\Inventory_management_system\resources\views/User/User-Dashboard.blade.php ENDPATH**/ ?>