<?php $__env->startSection('content'); ?>
<div class="container">
 <div class="row">
 <div class="col-md-3 my-3">
 <div class="card py-2 alert-success">
 <div class="card-body">
 <h4><?php echo e("Rp " . number_format($pemasukan_hari_ini) . " ,-"); ?></h4>
 <b>Pemasukan Hari Ini</b>
 </div>
 </div>
 </div>
 <div class="col-md-3 my-3">
 <div class="card py-2 alert-success">
    <div class="card-body">
        <h4><?php echo e("Rp " . number_format($pemasukan_bulan_ini) . " ,-"); ?></h4>
        <b>Pengeluaran Bulan Ini</b>
        </div>
        </div>
        </div>
        <div class="col-md-3 my-3">
        <div class="card py-2 alert-success">
        <div class="card-body">
        <h4><?php echo e("Rp " . number_format($pemasukan_tahun_ini) . " ,-"); ?></h4>
        <b>Pemasukan Tahun Ini</b>
        </div>
        </div>

    </div>
    <div class="col-md-3 my-3">
    <div class="card bg-success text-white py-2">
    <div class="card-body">
    <h4><?php echo e("Rp " . number_format($seluruh_pemasukan) . " ,-"); ?></h4>
    <b>Seluruh Pemasukan</b>
    </div>
    </div>
    </div>
    <div class="col-md-3 my-3">
    <div class="card alert-danger py-2">
    <div class="card-body">
        <h4><?php echo e("Rp " . number_format($pengeluaran_hari_ini) . " ,-"); ?></h4>
         <b>Pengeluaran Hari Ini</b>
         </div>
         </div>
         </div>
         <div class="col-md-3 my-3">
         <div class="card alert-danger py-2">
         <div class="card-body">
         <h4><?php echo e("Rp " . number_format($pengeluaran_bulan_ini) . " ,-"); ?></h4>
         <b>Pengeluaran Bulan Ini</b>
         </div>
         </div>
         </div>
         <div class="col-md-3 my-3">
            <div class="card alert-danger py-2">
            <div class="card-body">
            <h4><?php echo e("Rp " . number_format($pengeluaran_tahun_ini) . " ,-"); ?></h4>
            <b>Pengeluaran Tahun Ini</b>
            </div>
            </div>
            </div>
            <div class="col-md-3 my-3">
            <div class="card bg-danger text-white py-2">
            <div class="card-body">
            <h4><?php echo e("Rp " . number_format($seluruh_pengeluaran) . " ,-"); ?></h4>
           <b>Seluruh Pengeluaran</b>
        </div>
        </div>
        </div>
        </div>
       </div>
       <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP\Documents\aplikasi_keuangan_laravel\resources\views/home.blade.php ENDPATH**/ ?>