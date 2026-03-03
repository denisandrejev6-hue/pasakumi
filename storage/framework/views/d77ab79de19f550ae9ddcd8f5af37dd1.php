


<?php $__env->startSection('content'); ?>
    <h1>Labot ierakstu</h1>

    <?php if($errors->any()): ?>
        <div class="flash flash-error">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="<?php echo e(route('pasakumi.update', $data->ID)); ?>" method="POST" style="max-width:800px;">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        
        <div style="display:grid; grid-template-columns:1fr 1fr; gap:16px; margin-bottom:16px;">
            <div class="form-control">
                <label style="font-weight:700; display:block; margin-bottom:8px;">Nosaukums:</label>
                <input type="text" name="nosaukums" value="<?php echo e(old('nosaukums', $data->nosaukums)); ?>" style="width:90%; padding:10px; border-radius:6px;">
            </div>
            <div class="form-control">
                <label style="font-weight:700; display:block; margin-bottom:8px;">Kategorija:</label>
                <input type="text" name="kategorija" value="<?php echo e(old('kategorija', $data->kategorija)); ?>" style="width:90%; padding:10px; border-radius:6px;">
            </div>
        </div>
        
        <div style="display:grid; grid-template-columns:1fr 1fr 1fr; gap:16px; margin-bottom:16px;">
            <div class="form-control">
                <label style="font-weight:700; display:block; margin-bottom:8px;">Datums:</label>
                <input type="date" name="datums" value="<?php echo e(old('datums', $data->datums)); ?>" style="width:90%; padding:10px; border-radius:6px;">
            </div>
            <div class="form-control">
                <label style="font-weight:700; display:block; margin-bottom:8px;">Sākuma laiks:</label>
                <input type="time" name="sakuma_laiks" value="<?php echo e(old('sakuma_laiks', $data->sakuma_laiks)); ?>" style="width:90%; padding:10px; border-radius:6px;">
            </div>
            <div class="form-control">
                <label style="font-weight:700; display:block; margin-bottom:8px;">Beigu laiks:</label>
                <input type="time" name="beigu_laiks" value="<?php echo e(old('beigu_laiks', $data->beigu_laiks)); ?>" style="width:90%; padding:10px; border-radius:6px;">
            </div>
        </div>
        
        <div class="form-control" style="margin-bottom:16px;">
            <label style="font-weight:700; display:block; margin-bottom:8px;">Apraksts:</label>
            <textarea name="apraksts" style="width:100%; padding:10px; border-radius:6px; min-height:80px;"><?php echo e(old('apraksts', $data->apraksts)); ?></textarea>
        </div>
        
        <div style="display:grid; grid-template-columns:1fr 1fr 1fr; gap:16px; margin-bottom:24px;">
            <div class="form-control">
                <label style="font-weight:700; display:block; margin-bottom:8px;">Max dalībnieku:</label>
                <input type="number" name="max_dalibnieku" value="<?php echo e(old('max_dalibnieku', $data->max_dalibnieku)); ?>" style="width:90%; padding:10px; border-radius:6px;">
            </div>
            <div class="form-control">
                <label style="font-weight:700; display:block; margin-bottom:8px;">Darbinieks ID:</label>
                <input type="number" name="darbinieks_id" value="<?php echo e(old('darbinieks_id', $data->darbinieks_id)); ?>" style="width:90%; padding:10px; border-radius:6px;">
            </div>
            <div class="form-control">
                <label style="font-weight:700; display:block; margin-bottom:8px;">Telpa ID:</label>
                <input type="number" name="telpa_id" value="<?php echo e(old('telpa_id', $data->telpa_id)); ?>" style="width:90%; padding:10px; border-radius:6px;">
            </div>
        </div>
        
        <div style="display:flex; gap:12px;">
            <button type="submit" class="btn">Atjaunināt</button>
            <a href="<?php echo e(route('pasakumi.index')); ?>" class="btn secondary">Atcelt</a>
        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\HERD\bibleochaose\resources\views/edit.blade.php ENDPATH**/ ?>