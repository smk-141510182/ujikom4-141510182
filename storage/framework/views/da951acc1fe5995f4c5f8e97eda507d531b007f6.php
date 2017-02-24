<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Tambah Lembur Pegawai</div>

                <div class="panel-body">
                    <a href="<?php echo e(url('/LemburPegawai')); ?>" class="btn btn-success btn-block">Kembali</a><br>

                    <?php if($errors->any()): ?>
                        <div>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                <li><span><?php echo e($err); ?></span></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                        </div>
                    <?php endif; ?>
                    
                    <?php echo Form::open(['url'=>'KategoriLembur']); ?>

                    <div class="form-group">
                        <?php echo Form::label('Kode Lembur Id','Kode Lembur Id'); ?>

                        <?php echo Form::text('kode_lembur_id',null,['class'=>'form-control','required']); ?>

                    </div>
                    <div class="form-group">
                        <?php echo Form::label('Pegawai Id','Pegawai Id'); ?>

                        <?php echo Form::text('pegawai_id',null,['class'=>'form-control','required']); ?>

                    </div>
                    <div class="form-group">
                        <?php echo Form::label('Jumlah Jam','Jumlah Jam'); ?>

                        <?php echo Form::text('jumlah_jam',null,['class'=>'form-control','required']); ?>

                    </div>
                    <button type="submit" class="btn btn-success">
                                    Save
                                </button>
                    <?php echo Form::close(); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>