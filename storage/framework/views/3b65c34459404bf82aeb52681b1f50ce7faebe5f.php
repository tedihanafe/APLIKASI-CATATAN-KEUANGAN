
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Ganti Password</div>
                    <div class="card-body">
                        <?php if(session('success')): ?>
                            <div class="alert alert-success">
                                <?php echo e(session('success')); ?>

                            </div>
                        <?php endif; ?>

                        <?php if(session('error')): ?>
                            <div class="alert alert-danger">
                                <?php echo e(session('error')); ?>

                            </div>
                        <?php endif; ?>

                        <form method="POST" action="<?php echo e(url('/ganti_password/aksi')); ?>">
                            <?php echo e(csrf_field()); ?>

                            <div class="form-group">
                                <label>Masukkan Password Sekarang</label>
                                <input type="password" placeholder="********" class="form-control" name="current-password"
                                    required>
                                <?php if($errors->has('current-password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('current-password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                            <div class="form-group">
                                <label>Masukkan Password Baru</label>
                                <input type="password" placeholder="********" class="form-control" name="new-password"
                                    required>
                                <?php if($errors->has('new-password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('new-password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                            <div class="form-group">
                                <label>Konfirmasi Password Baru</label>
                                <input type="password" placeholder="********" class="form-control"
                                    name="new-password_confirmation" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Ganti Password</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP\Documents\PROJECT LARAVEL\APLIKASI-KEUANGAN-LARAVEL8\resources\views/gantipassword.blade.php ENDPATH**/ ?>