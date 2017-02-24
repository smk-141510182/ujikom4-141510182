<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Tambah Tunjangan Pegawai</div>

                <div class="panel-body">
                    <a href="<?php echo e(url('/TunjanganPegawai')); ?>" class="btn btn-success btn-block">Kembali</a><br>

                    <?php if($errors->any()): ?>
                        <div>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                <li><span><?php echo e($err); ?></span></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                        </div>
                    <?php endif; ?>
                    
                    <?php echo Form::open(['url'=>'TunjanganPegawai']); ?>

                    <div class="form-group">
                        <?php echo Form::label('Kode Tunjangan','Kode Tunjangan'); ?>

                        <?php echo Form::text('kode_tunjangan',null,['class'=>'form-control','required']); ?>

                    </div>
                    <div class="form-group">
                        <?php echo Form::label('Pegawai Id','Pegawai Id'); ?>

                        <?php echo Form::text('pegawai_id',null,['class'=>'form-control','required']); ?>

                    </div>
                    <div class="form-group">
                        <?php echo Form::submit('save',['class'=>'btn btn-success form-control']); ?>

                    </div>
                    <?php echo Form::close(); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>