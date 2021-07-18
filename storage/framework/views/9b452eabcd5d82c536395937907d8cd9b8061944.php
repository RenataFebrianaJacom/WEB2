<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Mahasiswa
                <a href="<?php echo e(route('tambah.mahasiswa')); ?>" class="btn btn-md btn-outline-secondary float-right">TAMBAH DATA</a>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                    <table class="table table-bordered">
                    <tr>
                        <th>NO.</th>
                        <th>NAMA LENGKAP</th>
                        <th>TEMPAT, TANGGAL LAHIR</th>
                        <th>TELEPON</th>
                        <th>ALAMAT</th>
                        <th>JENIS KELAMIN</th>
                        <th>PHOTO</th>
                        <th>AKSI</th>
                    </tr>
                    <?php
                        $no = 1;
                    ?>
                    <?php $__currentLoopData = $mahasiswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mhs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                    
                        <td><?php echo e($no++); ?></td>
                        <td><?php echo e($mhs->user); ?></td>
                        <td><?php echo e($mhs->tempat_lahir.', ' .$mhs->tgl_lahir); ?></td>
                        <td><?php echo e($mhs->telepon); ?></td>
                        <td><?php echo e($mhs->alamat); ?></td>
                        <td><?php echo e($mhs->gender); ?></td>
                        <td></td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="<?php echo e(route('edit.mahasiswa', $mhs->id)); ?>" class="btn btn-sm btn-warning">EDIT</a>
                        <a href="<?php echo e(route('hapus.mahasiswa', $mhs->id)); ?>" class="btn btn-sm btn-danger">HAPUS</a>
                        </div>
                    </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel4c\resources\views/mahasiswa/index.blade.php ENDPATH**/ ?>