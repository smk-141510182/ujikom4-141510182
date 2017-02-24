<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Pegawai</div>

                <div class="panel-body">
                    <a href="<?php echo e(url('/Pegawai')); ?>" class="btn btn-success btn-block">Kembali</a><br>
                    <?php echo Form::model($pegawaiv,['method'=>'PATCH','route'=>['pegawai.update',$pegawaiv->id]]); ?>

                    <div class="form-group">
                        <?php echo Form::label('NIP','NIP'); ?>

                        <?php echo Form::text('nip',null,['class'=>'form-control']); ?>

                    </div>
                    <div class="form-group">
                        <?php echo Form::label('User Id','User Id'); ?>

                        <?php echo Form::text('user_id',null,['class'=>'form-control']); ?>

                    </div>
                    <div class="form-group">
                        <?php echo Form::label('Jabatan Id','Jabatan Id'); ?>

                        <?php echo Form::text('jabatan_id','jabatan_id'); ?>

                    </div>
                    <div class="form-group">
                        <?php echo Form::label('Golongan Id','Golongan Id'); ?>

                        <?php echo Form::text('golongan_id',null,['class'=>'form-control']); ?>

                    </div>
                    <div class="form-group">
                        <?php echo Form::label('Photo','Photo'); ?>

                        <?php echo Form::text('photo',null,['class'=>'form-control']); ?>

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