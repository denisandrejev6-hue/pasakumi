


<?php $__env->startSection('content'); ?>
    <h1>Visi ieraksti</h1>

    <?php if(session('success')): ?>
        <div class="flash flash-success"><?php echo e(session('success')); ?></div>
    <?php endif; ?>

    <a href="<?php echo e(route('pasakumi.create')); ?>" class="btn">Pievienot jaunu ierakstu</a>

    <table border="1" cellpadding="12" cellspacing="0" style="margin-top:16px; width:100%; border-collapse:collapse; table-layout:auto;">
        <colgroup>
            <col style="width:40%;">
            <col style="width:25%;">
            <col style="width:20%;">
        </colgroup>
        <thead>
            <tr>
                <th style="text-align:center;">Nosaukums</th>
                <th style="text-align:center;">Datums</th>
                <th style="text-align:center;">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td style="text-align:center;"><?php echo e($item->nosaukums); ?></td>
                    <td style="text-align:center;"><?php echo e($item->datums); ?></td>
                    <td style="text-align:center;">
                        <a href="<?php echo e(route('pasakumi.show', $item->ID)); ?>" class="btn secondary">Detalizēti</a>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\HERD\bibleochaose\resources\views/alldata.blade.php ENDPATH**/ ?>