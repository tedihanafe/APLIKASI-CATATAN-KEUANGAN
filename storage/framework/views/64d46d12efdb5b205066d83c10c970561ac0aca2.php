
<?php $__env->startSection('content'); ?>
<div class="container">
 <div class="row justify-content-center">
 <div class="col-md-8">
 <div class="card">
 <div class="card-header">
 Tambah Transaksi
 <a href="<?php echo e(url('/transaksi')); ?>" class="float-right btn btn-sm
btn-primary">Kembali</a>
 </div>
 <div class="card-body">
 <form method="post" action="<?php echo e(url('/transaksi/aksi')); ?>">

    <?php echo csrf_field(); ?>
 <div class="form-group">
 <label>Tanggal Transaksi</label>
 <input type="date" name="tanggal" class="form-control">
 <?php if($errors->has('tanggal')): ?>
 <span class="text-danger">
 <strong><?php echo e($errors->first('tanggal')); ?></strong>
 </span>
 <?php endif; ?>

 </div>
 <div class="form-group">
 <label>Jenis</label>
 <select class="form-control" name="jenis">

    <option value="">- Pilih Jenis</option>
 <option value="Pemasukan">Pemasukan</option>
 <option value="Pengeluaran">Pengeluaran</option>
 </select>
 <?php if($errors->has('jenis')): ?>
 <span class="text-danger">
 <strong><?php echo e($errors->first('jenis')); ?></strong>
 </span>
 <?php endif; ?>

 </div>
 <div class="form-group">
 <label>Kategori</label>
 <select class="form-control" name="kategori">
 <option value="">- Pilih Kategori</option>
 <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

 <option value="<?php echo e($k->id); ?>"><?php echo e($k->kategori); ?></option>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 </select>
 <?php if($errors->has('kategori')): ?>
 <span class="text-danger">
 <strong><?php echo e($errors->first('kategori')); ?></strong>
 </span>
 <?php endif; ?>

 </div>
 <div class="form-group">
 <label>Nominal</label>
 <input type="number" name="nominal" class="formcontrol">
 <?php if($errors->has('nominal')): ?>

 <span class="text-danger">
    <strong><?php echo e($errors->first('nominal')); ?></strong>
    </span>
    <?php endif; ?>
   
    </div>
    <div class="form-group">
    <label>Keterangan</label>
    <textarea class="form-control"
   name="keterangan"></textarea>
    <?php if($errors->has('keterangan')): ?>
    <span class="text-danger">
    <strong><?php echo e($errors->first('keterangan')); ?></strong>
    </span>
    <?php endif; ?>

</div>
<input type="submit" class="btn btn-primary"
value="Simpan">
</form>
</div>
</div>
</div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP\Documents\aplikasi_keuangan_laravel\resources\views/transaksi_tambah.blade.php ENDPATH**/ ?>