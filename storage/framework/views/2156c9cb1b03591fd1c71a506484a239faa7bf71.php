 

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
    <br><br><br><br>
        <div class="col-md-15 offset-md-2">
            <div class="panel panel-primary">
                <div class="panel-heading">     
                <h7><font face="Maiandra GD" color="white"><center>Table Penggajian</center></font></h7>
                </div>
                <div class="panel-body">
                    <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Tunjangan</th>
                    <th>Jumlah Jam</th>
                    <th>Jumlah Uang Lembur</th>
                    <th>Gaji Pokok</th>
                    <th>Total Gaji</th>
                    <th>Tanggal Pengembalian</th>
                    <th>Status Pengembalian</th>
                    <th>Petugas Penerima</th>
                    <th colspan="2"><center>Selection</center></th>

                </tr>
            </thead>
            <?php 
            $no = 1;
             ?>
            <tbody>
                <?php $__currentLoopData = $Penggajian; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><center><?php echo e($no++); ?></center></td>
                    <td><?php echo e($data->Kode_Tunjangan); ?></td>
                    <td><?php echo e($data->Jumlah_jam_lembur); ?></td>
                    <td><?php echo e($data->Jumlah_uang_lembur); ?></td>
                    <td><?php echo e($data->Gaji_pokok); ?></td>
                    <td><?php echo e($data->Total_gaji); ?></td>
                    <td><?php echo e($data->Tanggal_pengambilan); ?></td>
                    <td><?php echo e($data->Status_pengambilan); ?></td>
                    <td><?php echo e($data->Petugas_penerima); ?></td>
             </td>
                    
             
                    <td><a href="<?php echo e(route('Penggajian.edit',$data->id)); ?>" class="btn btn-warning">Update</a></td>
             <td>
             <?php echo Form::open(['method' => 'DELETE', 'route'=>['Penggajian.destroy', $data->id]]); ?>

             <?php echo Form::submit('Delete', ['class' => 'btn btn-danger']); ?>

             <?php echo Form::close(); ?>

             </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          

            </tbody>
        </table>
        <a href="<?php echo e(url('/Penggajian/create')); ?>" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Penggajian</a>
                </div>
            </div>
        </div>
    </div>
</div>
    
</div>
        </div>
    </div>
</div>
            
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.apps', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>