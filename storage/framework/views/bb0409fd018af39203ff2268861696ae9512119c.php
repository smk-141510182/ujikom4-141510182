<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Penggajian</div>

                <div class="panel-body">
                    <a href="<?php echo e(url('/Penggajian/create')); ?>" class="btn btn-success btn-block">Tambah penggajian</a><br>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Tunjangan Pegawai Id</td>
                                <td>Jumlah Jam Lembur</td>
                                <td>Jumlah Uang Lembur</td>
                                <td>Gaji Pokok</td>
                                <td>Total Gaji</td>
                                <td>Tanggal Pengambilan</td>
                                <td>Status Pengembalian</td>
                                <td>Status Penerima</td>
                                <td colspan="2">Pilihan:</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $i=1;
                             ?>
                            <?php $__currentLoopData = $penggajianv; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                <tr>
                                    <td><?php echo e($i++); ?></td>
                                    <td><?php echo e($data->tunjangan_pegawai_id); ?></td>
                                    <td><?php echo e($data->jumlah_jam_lembur); ?></td>
                                    <td><?php echo e($data->jumlah_uang_lembur); ?></td>
                                    <td><?php echo e($data->gaji_pokok); ?></td>
                                    <td><?php echo e($data->total_gaji); ?></td>
                                    <td><?php echo e($data->tanggal_pengambilan); ?></td>
                                    <td><?php echo e($data->status_pengembalian); ?></td>
                                    <td><?php echo e($data->status_penerima); ?></td>
                                    <td><a href="<?php echo e(route('penggajian.edit',$data->id)); ?>" class="btn btn-warning">Ubah</a></td>
                                    <td>
                                    <?php echo Form::open(['method' => 'DELETE', 'route'=>['penggajian.destroy', $data->id]]); ?>

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