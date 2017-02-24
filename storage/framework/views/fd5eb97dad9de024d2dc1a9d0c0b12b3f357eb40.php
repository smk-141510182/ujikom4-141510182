<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">Tambah Tunjangan</div>

                <div class="panel-body">
                    <a href="<?php echo e(url('/Tunjangan')); ?>" class="btn btn-md btn-block">Kembali</a>
                    <?php echo Form::open(['url'=>'Tunjangan']); ?>

                    <div class="form-group">
                        <?php echo Form::label('Kode Tunjangan','Kode Tunjangan'); ?>

                        <?php echo Form::text('kode_tunjangan',null,['class'=>'form-control']); ?>

                    </div>
                    <label>Nama Jabatan</label>
                    <select name="jabatan_id" class="form-control">
                        <?php $__currentLoopData = $jabatanv; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                        <option value="<?php echo e($data->id); ?>"><?php echo e($data->nama_jabatan); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                    </select><br>
                    <label>Nama Golongan</label>
                    <select name="golongan_id" class="form-control">
                        <?php $__currentLoopData = $golonganv; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                        <option value="<?php echo e($data->id); ?>"><?php echo e($data->nama_golongan); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                    </select><br>
                    <div class="form-group">
                        <?php echo Form::label('Status','Status'); ?>

                        <?php echo Form::text('status',null,['class'=>'form-control']); ?>

                    </div>
                    <div class="form-group">
                        <?php echo Form::label('Jumlah Anak','Jumlah Anak'); ?>

                        <?php echo Form::text('jumlah_anak',null,['class'=>'form-control']); ?>

                    </div>
                    <div class="form-group">
                        <?php echo Form::label('besaran Uang','besaran Uang'); ?>

                        <?php echo Form::text('besaran_uang',null,['class'=>'form-control']); ?>

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