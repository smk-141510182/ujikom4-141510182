<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Data</div>

                <div class="panel-body">
                    <a href="<?php echo e(url('/TunjanganPegawai')); ?>" class="btn btn-md btn-block">Kembali</a>
                    <?php echo Form::model($tunjanganpegawaiv,['method'=>'PATCH','route'=>['TunjanganPegawai.update',$tunjanganpegawaiv->id]]); ?>

                    <div class="form-group">
                        <?php echo Form::label('Kode Tunjangan Id','Kode Tunjangan Id'); ?>

                        <?php echo Form::text('kode_tunjangan_id',null,['class'=>'form-control']); ?>

                    </div>
                    <div class="form-group">
                        <?php echo Form::label('Pegawai Id','Pegawai Id'); ?>

                        <?php echo Form::text('pegawai_id',null,['class'=>'form-control']); ?>

                    </div>
                    <button type="submit" class="btn btn-success">
                                    Update
                                </button>
                    <?php echo Form::close(); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>