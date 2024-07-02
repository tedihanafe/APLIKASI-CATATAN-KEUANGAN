

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Data Kategori
                    <a href="<?php echo e(url('/kategori/tambah')); ?>" class="float-right btn btn-sm btn-primary">Tambah</a>
                </div>
                <div class="card-body">
                    <?php if(Session::has('sukses')): ?>
                    <div class="alert alert-success">
                    <?php echo e(Session::get('sukses')); ?>

                    </div>
                    <?php endif; ?>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th width="1%">No</th>
                                <th>Nama Kategori</th>
                                <th width="25%" class="text-center">OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            ?>
                            <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($no++); ?></td>
                                <td><?php echo e($k->kategori); ?></td>
                                <td class="text-center">
                                    <a href="<?php echo e(url('/kategori/edit/'.$k->id)); ?>" class="btn btn-sm btn-primary">Edit</a>
                                    <a href="<?php echo e(url('/kategori/hapus/'.$k->id)); ?>" class="btn btn-sm btn-danger">Hapus</a>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP\Documents\PROJECT LARAVEL\APLIKASI-KEUANGAN-LARAVEL8\resources\views/kategori.blade.php ENDPATH**/ ?>