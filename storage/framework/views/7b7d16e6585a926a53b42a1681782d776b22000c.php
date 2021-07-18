<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Data
                    
                </div>
                <div class="card-body">
                    <form action= "<?php echo e(route('update.mahasiswa', $mahasiswa->id)); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <div class="form-group row">
                            <label for="user_id" class="col-sm-4 text-sm-right">Nama Mahasiswa</label>
                            <div class="col-sm-6">
                                <select name="user_id" id="user_id" class="form-control">
                                    <option value="" disabled selected>--Pilih User--</option>
                                    <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($u->id); ?>" <?php echo e($mahasiswa->user_id == $u->id ? 'selected' : ''); ?> ><?php echo e($u->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
					    </div>

                        <div class="form-group row">
                            <label for="npm" class="col-sm-4 text-sm-right">NPM</label>
                            <div class="col-sm-6">
                                <input type="numeric" name="npm" class="form-control" 
                                placeholder="Masukkan NPM" maxlength="8" value="<?php echo e(is_null ('$mahasiswa') ? '' : $mahasiswa->npm); ?>">
                            </div>
					    </div>

                        <div class="form-group row">
                            <label for="tempat_lahir" class="col-sm-4 text-sm-right">Tempat Lahir</label>
                            <div class="col-sm-6">
                                <input type="text" name="tempat_lahir" class="form-control" 
                                placeholder="Masukkan Tempat Lahir" value="<?php echo e(is_null ('$mahasiswa') ? '' : $mahasiswa->tempat_lahir); ?>">
                            </div>
					    </div>

                        <div class="form-group row">
                            <label for="tgl_lahir" class="col-sm-4 text-sm-right">Tanggal Lahir</label>
                            <div class="col-sm-6">
                                <input type="date" name="tgl_lahir" class="form-control" 
                                value="<?php echo e(is_null ('$mahasiswa') ? '' : $mahasiswa->tgl_lahir); ?>">
                            </div>
					    </div>

                        <div class="form-group row">
                            <label for="gender" class="col-sm-4 text-sm-right">Jenis Kelamin</label>
                            <div class="col-sm-6">
                                <select name="gender" id="gender" class="form-control">
                                    <option value="" disabled selected>--Pilih Jenis Kelamin--</option>
                                    <option value="L" <?php echo e($mahasiswa->gender == 'L' ? 'selected' : ''); ?> >Laki-Laki</option>
                                    <option value="P" <?php echo e($mahasiswa->gender == 'P' ? 'selected' : ''); ?> >Perempuan</option>
                                </select>
                            </div>
					    </div>

                        <div class="form-group row">
                            <label for="telepon" class="col-sm-4 text-sm-right">No. Telepon</label>
                            <div class="col-sm-6">
                                <input type="numeric" name="telepon" class="form-control" 
                                placeholder="Masukkan No. telepon" maxlength="13" value="<?php echo e(is_null ('$mahasiswa') ? '' : $mahasiswa->telepon); ?>">
                            </div>
					    </div>

                        <div class="form-group row">
                            <label for="alamat" class="col-sm-4 text-sm-right">Alamat</label>
                            <div class="col-sm-6">
                                <textarea style="resize : none" name="alamat" id="alamat" cols="2" rows="3" class="form-control" 
                                ><?php echo e(is_null ('$mahasiswa') ? '' : $mahasiswa->alamat); ?></textarea>
                            </div>
					    </div>
                        
                        <div class="form-group row">
                            <label for="" class="col-sm-4 text-sm-right"></label>
                            <div class="col-sm-6 float-right">
                                <button type="submit" class="btn btn-primary">SIMPAN</button>
                                <a href="<?php echo e(route('index')); ?>" class="btn btn-danger " name="batal">Batal</a>
                            </div>
					    </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\xampp\htdocs\laravel4c\resources\views/mahasiswa/edit.blade.php ENDPATH**/ ?>