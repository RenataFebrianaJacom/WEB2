<?php $__env->startSection('content'); ?>
<div class="container">
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                Edit Mahasiswa
                <a href="<?php echo e(route('index')); ?>" class="btn btn-outline-secondary float-right">KEMBALI >></a>
            </div>
            <div class="card-body">
                <form action="<?php echo e(route('update.mahasiswa', $mahasiswa->id)); ?>" method="POST" class="form-item" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="user" class="form-control col-md-12" placeholder="Masukan Nama" value="<?php echo e(is_null($mahasiswa) ? '' : $mahasiswa->user); ?>">
                    </div>
                    <div class="form-group">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" class="form-control col-md-12" placeholder="Masukan Tempat Lahir" value="<?php echo e(is_null($mahasiswa) ? '' : $mahasiswa->tempat_lahir); ?>">
                    </div>
                    <div class="form-group">
                        <label for="tgl_lahir">Tanggal Lahir</label>
                        <input type="date" name="tgl_lahir" class="form-control col-md-12" placeholder="Masukan Tanggal Lahir" value="<?php echo e(is_null($mahasiswa) ? '' : $mahasiswa->tgl_lahir); ?>">
                    </div>
                    <div class="form-group">
                        <label for="telepon">Telepon</label>
                        <input type="number" name="telepon" class="form-control col-md-12" placeholder="Masukan Telepon" value="<?php echo e(is_null($mahasiswa) ? '' : $mahasiswa->telepon); ?>">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" class="form-control col-md-12" placeholder="Masukan Alamat" value="<?php echo e(is_null($mahasiswa) ? '' : $mahasiswa->alamat); ?>">
                    </div>
                    <h6>Jenis Kelamin</h6>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" value="L">
                        <label class="form-check-label" for="jenis">Laki - laki</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" value="P">
                        <label class="form-check-label" for="jenis">Perempuan</label>
                    </div>
                    <div class="form-group">
                            <span>Pilih Gambar</span>
                            <div>
                        <input type="file" name="image">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" name="simpan" style="margin-left: 40%">SIMPAN</button>
                    <button type="reset" class="btn btn-danger">BATAL</button>
                </form>
            </div>
        </div>
    </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel4c\resources\views/mahasiswa/edit.blade.php ENDPATH**/ ?>