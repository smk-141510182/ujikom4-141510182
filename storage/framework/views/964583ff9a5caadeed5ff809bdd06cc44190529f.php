<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Tunjangan</div>

                <div class="panel-body">
                <?php echo Form::model($tunjanganvl,['method'=>'PATCH','route'=>['Tunjangan.update',$tunjanganvl->id]]); ?>

                    <div class="form-group">
                        <?php echo Form::label('Kode Tunjangan','Kode Tunjangan'); ?>

                        <?php echo Form::text('kode_tunjangan',null,['class'=>'form-control']); ?>

                    </div>
                    <label>Nama Jabatan</label>
                    <select name="jabatan_id" class="form-control" required>
                        
                        <?php $__currentLoopData = $jabatanvl; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                        <option value="<?php echo e($data->id); ?>"><?php echo e($data->nama_jabatan); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                    </select><br>

                    <label>Nama Golongan</label>
                    <select name="golongan_id" class="form-control" required>
                        <?php $__currentLoopData = $golonganvl; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                        <option value="<?php echo e($data->id); ?>"><?php echo e($data->nama_golongan); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                    </select><br>
                    
                    <div class="form-group">
                        <?php echo Form::label('Status','Status'); ?>

                        <?php echo Form::text('status',null,['class'=>'form-control','required']); ?>

                    </div>
                    <div class="form-group">
                        <?php echo Form::label('Jumlah Anak','Jumlah Anak'); ?>

                        <?php echo Form::text('jumlah_anak',null,['class'=>'form-control','required']); ?>

                    </div>
                    <div class="form-group">
                        <?php echo Form::label('Besaran Uang','Besaran Uang'); ?>

                        <?php echo Form::text('besaran_uang',null,['class'=>'form-control','required']); ?>

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