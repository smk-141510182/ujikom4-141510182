<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">Tambah Lembur Pegawai</div>

                <div class="panel-body">
                    <?php echo Form::open(['url'=>'LemburPegawai']); ?>

                    <label>Kode Lembur</label>
                    <select name="kode_lembur_id" class="form-control">
                        <option value="">Pilih Kode Lembur</option>
                        <?php $__currentLoopData = $kategorilemburv; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                        <option value="<?php echo e($data->id); ?>"><?php echo e($data->kode_lembur); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                    </select><br>

                    <label>Nama Pegawai</label>
                    <select name="pegawai_id" class="form-control">
                        <option value="">Pilih Nama Pegawai</option>
                        <?php $__currentLoopData = $pegawaiv; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                        <option value="<?php echo e($data->id); ?>"><?php echo e($data->User->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                    </select><br>

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