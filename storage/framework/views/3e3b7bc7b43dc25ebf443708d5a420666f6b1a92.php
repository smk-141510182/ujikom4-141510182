<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Tunjangan Pegawai</div>

                <div class="panel-body">
                    <a href="<?php echo e(url('/TunjanganPegawai')); ?>" class="btn btn-success btn-block">Kembali</a><br>
                    <?php echo Form::model($tunpeg,['method'=>'PATCH','route'=>['TunjanganPegawai.update',$tunpeg->id]]); ?>

                        <div class="form-group">
                            <label for="kode_tunjangan_id" class="form-group">Kode Tunjangan</label>
                            <div class="form-group">
                                <select name="kode_tunjangan_id" class="form-control">
                                    <option value="<?php echo e($tunpeg->Tunjangan->kode_tunjangan); ?>">Kode Tunjangan -- <?php echo e($tunpeg->Tunjangan->kode_tunjangan); ?></option>
                                    <?php $__currentLoopData = $tunjanganvar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                    <option value="<?php echo e($data->id); ?>"><?php echo e($data->kode_tunjangan); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pegawai_id" class="form-group">Nama Pegawai</label>
                            <div class="form-group">
                                <select name="pegawai_id" class="form-control">
                                    <option value="<?php echo e($tunpeg->Pegawai->User->name); ?>">Nama Pegawai -- <?php echo e($tunpeg->Pegawai->User->name); ?></option>
                                    <?php $__currentLoopData = $pegawaivar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                    <option value="<?php echo e($data->id); ?>"><?php echo e($data->User->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <?php echo Form::submit('update',['class'=>'btn btn-success form-control']); ?>

                        </div>
                    <?php echo Form::close(); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>