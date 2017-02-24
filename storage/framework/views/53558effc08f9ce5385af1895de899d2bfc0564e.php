<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">Tunjangan</div>

                <div class="panel-body">
                    <a href="<?php echo e(url('/Tunjangan/create')); ?>" class="btn btn-md btn-block">Tambah Tunjangan</a><br>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Kode Tunjangan</td>
                                <td>Nama Jabatan</td>
                                <td>Nama Golongan</td>
                                <td>Status</td>
                                <td>Jumlah Anak</td>
                                <td>Besaran Uang</td>
                                <td colspan="2">Pilihan:</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $i=1;
                             ?>
                            <?php $__currentLoopData = $tunjanganv; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                <tr>
                                    <td><?php echo e($i++); ?></td>
                                    <td><?php echo e($data->kode_tunjangan); ?></td>
                                    <td><?php echo e($data->jabatan->nama_jabatan); ?></td>
                                    <td><?php echo e($data->golongan->nama_golongan); ?></td>
                                    <td><?php echo e($data->status); ?></td>
                                    <td><?php echo e($data->jumlah_anak); ?></td>
                                    <td><?php echo e($data->besaran_uang); ?></td>
                                    <td><a href="<?php echo e(route('Tunjangan.edit',$data->id)); ?>" class="btn btn-warning">Ubah</a></td>
                                    <td>
                                    <?php echo Form::open(['method' => 'DELETE', 'route'=>['Tunjangan.destroy', $data->id]]); ?>

                                    <?php echo Form::submit('Delete', ['class' => 'btn btn-danger']); ?>

                                    <?php echo Form::close(); ?>

                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>