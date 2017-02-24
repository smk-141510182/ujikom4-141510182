<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Tambah Penggajian</div>
                <div class="panel-body">
                <a href="<?php echo e(url('Penggajian')); ?>" class="btn btn-md btn-block">Kembali</a><br>
                    <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/Penggajian')); ?>">
                        <?php echo e(csrf_field()); ?>


                            <div class="col-md-12">
                                <label for="tunjangan_pegawai_id">Nama Pegawai</label>
                                    <select class="col-md-6 form-control" name="tunjangan_pegawai_id" required>
                                        <option value="">Pilih Nama Pegawai</option>
                                        <?php $__currentLoopData = $tunjanganvl; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                            <option  value="<?php echo e($data->id); ?>" ><?php echo e($data->pegawai->User->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                                    </select>
                                    <span class="help-block">
                                        <?php echo e($errors->first('tunjangan_pegawai_id')); ?>

                                    </span>
                                    <div>
                                        <?php if(isset($error)): ?>
                                            ReCheck, Gaji Sudah diHitung
                                        <?php endif; ?>
                                    </div>
                            </div>
                            <div class="col-md-12"><br>
                                <label for="status_pengambilan">Status Pengambilan</label>
                                    <select class="col-md-6 form-control" name="status_pengambilan" required>
                                        <option value="">Pilih Status Gaji</option>
                                        <option value="0">Belum diAmbil</option>
                                        <option value="1">DiAmbil</option>
                                    </select>
                                    <span class="help-block">
                                        <?php echo e($errors->first('status_pengambilan')); ?>

                                    </span>
                                    <div>
                                        <?php if(isset($error)): ?>
                                            ReCheck, Gaji Sudah diHitung
                                        <?php endif; ?>
                                    </div>
                                    </div>
                            <div class="col-md-12" ><br><br>
                                <button type="submit" class="btn btn-success btn-block">Hitung</button>
                            </div>
                             </form>
                </div>
            </div>
        </div>
    </div>
</div>

   
       

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>