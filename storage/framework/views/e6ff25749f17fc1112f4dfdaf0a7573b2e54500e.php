<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Tambah Penggajian</div>

                <div class="panel-body">
                    <a href="<?php echo e(url('/Penggajian')); ?>" class="btn btn-success btn-block">Kembali</a><br>

                    <?php if($errors->any()): ?>
                        <div>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                <li><span><?php echo e($err); ?></span></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                        </div>
                    <?php endif; ?>
                    
                    <?php echo Form::open(['url'=>'Penggajian']); ?>

                    <div class="form-group">
                        <?php echo Form::label('Tunjangan Pegawai Id','Tunjangan Pegawai Id'); ?>

                        <?php echo Form::text('tunjangan_pegawai_id',null,['class'=>'form-control','required']); ?>

                    </div>
                    <div class="form-group">
                        <?php echo Form::label('Jumlah Jam Lembur','Jumlah Jam Lembur'); ?>

                        <?php echo Form::text('jumlah_jam_lembur',null,['class'=>'form-control','required']); ?>

                    </div>
                    <div class="form-group">
                        <?php echo Form::label('Jumlah Uang Lembur','Jumlah Uang Lembur'); ?>

                        <?php echo Form::text('jumlah_uang_lembur',null,['class'=>'form-control','required']); ?>

                    </div>
                    <div class="form-group">
                        <?php echo Form::label('Gaji Pokok','Gaji Pokok'); ?>

                        <?php echo Form::text('gaji_pokok',null,['class'=>'form-control','required']); ?>

                    </div>
                    <div class="form-group">
                        <?php echo Form::label('Total Gaji','Total Gaji'); ?>

                        <?php echo Form::text('total_gaji',null,['class'=>'form-control','required']); ?>

                    </div>
                    <div class="form-group">
                        <?php echo Form::label('Tanggal Pengambilan','Tanggal Pengambilan'); ?>

                        <?php echo Form::text('tanggal_pengambilan',null,['class'=>'form-control','required']); ?>

                    </div>
                    <div class="form-group">
                        <?php echo Form::label('Status Pengambilan','Status Pengambilan'); ?>

                        <?php echo Form::text('status_pengambilan',null,['class'=>'form-control','required']); ?>

                    </div>
                    <div class="form-group">
                        <?php echo Form::label('Petugas Penerima','Petugas Penerima'); ?>

                        <?php echo Form::text('petugas_penerima',null,['class'=>'form-control','required']); ?>

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