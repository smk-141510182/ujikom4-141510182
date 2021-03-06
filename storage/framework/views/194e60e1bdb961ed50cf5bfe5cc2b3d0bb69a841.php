<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Golongan</div>

                <div class="panel-body">
                    <a href="<?php echo e(url('/Golongan')); ?>" class="btn btn-md btn-block">Kembali</a>
                    <?php echo Form::model($golonganv,['method'=>'PATCH','route'=>['Golongan.update',$golonganv->id]]); ?>

                    <div class="form-group">
                        <?php echo Form::label('Kode Golongan','Kode Golongan'); ?>

                        <?php echo Form::text('kode_golongan',null,['class'=>'form-control']); ?>

                    </div>
                    <div class="form-group">
                        <?php echo Form::label('Nama Golongan','Nama Golongan'); ?>

                        <?php echo Form::text('nama_golongan',null,['class'=>'form-control']); ?>

                    </div>
                    <div class="form-group">
                        <?php echo Form::label('Besaran Uang','Besaran Uang'); ?>

                        <?php echo Form::text('besaran_uang',null,['class'=>'form-control']); ?>

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