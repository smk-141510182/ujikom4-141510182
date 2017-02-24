<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Pegawai</div>

                <div class="panel-body">
                    <?php echo Form::model($pegawaiv,['method'=>'PATCH','route'=>['Pegawai.update',$pegawaiv->id],'files'=>'true']); ?>

                        <label>NIP</label>
                        <input type="text" name="nip" value="<?php echo e($pegawaiv->nip); ?>" class="form-control"><br>

                        <div class="form-group">
                            <label for="jabatan_id" class="form-group">Nama Jabatan</label>
                            <div class="form-group">
                                <select name="jabatan_id" class="form-control">
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
                                    <?php $__currentLoopData = $golonganv; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                        <option value="<?php echo e($data->id); ?>"><?php echo e($data->nama_golongan); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="photo" class="form-group">Photo</label>
                                <input type="file" name="photo" class="form-control" nullable>
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