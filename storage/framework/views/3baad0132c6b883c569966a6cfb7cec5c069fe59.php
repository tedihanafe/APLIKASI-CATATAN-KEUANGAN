

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Edit Kategori
                    <a href="<?php echo e(url('/kategori')); ?>" class="float-right btn btn-sm btn-primary">Kembali</a>
                </div>
                <div class="card-body">
                    <form method="post" action="<?php echo e(url('/kategori/update/'.$kategori->id)); ?>">
                        <?php echo csrf_field(); ?>
                        <?php echo e(method_field('PUT')); ?>

                        <div class="form-group">
                            <label>Nama Kategori</label>
                            <input type="text" name="kategori" class="form-control" value="<?php echo e($kategori->kategori); ?>">
                            <?php if($errors->has('kategori')): ?>
                            <span class="text-danger">
                                <strong><?php echo e($errors->first('kategori')); ?></strong>
                            </span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Simpan">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP\Documents\aplikasi_keuangan_laravel\resources\views/kategori_edit.blade.php ENDPATH**/ ?>