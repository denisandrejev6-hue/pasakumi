


<?php $__env->startSection('content'); ?>
    <h1>Detaļas</h1>

    <p><strong>ID:</strong> <?php echo e($data->ID); ?></p>
    <p><strong>Nosaukums:</strong> <?php echo e($data->nosaukums); ?></p>
    <p><strong>Kategorija:</strong> <?php echo e($data->kategorija); ?></p>
    <p><strong>Datums:</strong> <?php echo e($data->datums); ?></p>
    <p><strong>Laiks:</strong> <?php echo e($data->sakuma_laiks); ?>–<?php echo e($data->beigu_laiks); ?></p>
    <p><strong>Apraksts:</strong> <?php echo e($data->apraksts); ?></p>
    <p><strong>Max dalībnieku:</strong> <?php echo e($data->max_dalibnieku); ?></p>
    <p><strong>Darbinieks ID:</strong> <?php echo e($data->darbinieks_id); ?></p>
    <p><strong>Telpa ID:</strong> <?php echo e($data->telpa_id); ?></p>

    <div style="margin-top:16px;">
        <a href="<?php echo e(route('pasakumi.edit', $data->ID)); ?>" class="btn">Labot</a>
        <form action="<?php echo e(route('pasakumi.destroy', $data->ID)); ?>" method="POST" style="display:inline">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
            <button type="submit" class="btn" onclick="return confirm('Tiešām dzēst?')">Dzēst</button>
        </form>
        <a href="<?php echo e(route('pasakumi.index')); ?>" class="btn secondary">Atpakaļ uz sarakstu</a>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\HERD\bibleochaose\resources\views/details.blade.php ENDPATH**/ ?>