<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Kategori Lembur</div>

                <div class="panel-body">
                    <a href="<?php echo e(url('/Tunjangan')); ?>" class="btn btn-success btn-block">Kembali</a><br>
                    <?php echo Form::model($kalemv,['method'=>'PATCH','route'=>['KategoriLembur.update',$kalemv->id]]); ?>

                        <div class="form-group">
                            <?php echo Form::label('Kode Lembur','Kode Lembur'); ?>

                            <?php echo Form::text('kode_lembur',null,['class'=>'form-control']); ?>

                        </div>
                        <div class="form-group">
                            <label for="jabatan_id" class="form-group">Nama Jabatan</label>
                            <div class="form-group">
                                <select name="jabatan_id" class="form-control">
                                    <option value="<?php echo e($kalemv->Jabatan->nama_jabatan); ?>">Nama Jabatan -- <?php echo e($kalemv->Jabatan->nama_jabatan); ?></option>
                                    <?php $__currentLoopData = $jabatanv; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                    <option value="<?php echo e($data->id); ?>"><?php echo e($data->nama_jabatan); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="golongan_id" class="form-group">Nama Golongan</label>
                            <div class="form-group">
                                <select name="golongan_id" class="form-control">
                                    <option value="<?php echo e($kalemv->Golongan->nama_golongan); ?>">Nama Golongan -- <?php echo e($kalemv->Golongan->nama_golongan); ?></option>
                                    <?php $__currentLoopData = $golonganv; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                    <option value="<?php echo e($data->id); ?>"><?php echo e($data->nama_golongan); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <?php echo Form::label('Besaran Uang','Besaran Uang'); ?>

                            <?php echo Form::text('besaran_uang',null,['class'=>'form-control']); ?>

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