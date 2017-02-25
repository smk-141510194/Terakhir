 

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-10 offset-md-2">
              <div class="panel panel-primary">
                <div class="panel-heading">     
                <h7><font face="Maiandra GD" color="white"><center>Table Jabatan</center></font></h7>
                </div>
                <div class="panel-body">
                    <table class="table table-striped">
            <thead>
                <tr>
                    <th><center>No</center></th>
                    <th><center>Kode Lembur</center></th>
                    <th><center>Nama Pegawai</center></th>
                    <th><center>Jumlah Jam</center></th>
                    <th colspan="2"><center>Selection</center></th>

                </tr>
            </thead>
            <?php 
            $no = 1;
             ?>
            <tbody>
                <?php $__currentLoopData = $Lembur_Pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><center><?php echo e($no++); ?></center></td>
                    <td><center><?php echo e($data->Kategori_Lembur->Kode_Lembur); ?></center></td>
                    <td><center><?php echo e($data->Pegawai->User->name); ?></center></td>
                    <td><center><?php echo e($data->Jumlah_Jam); ?></center></td>
                    <td><center><a href="<?php echo e(route('Lembur_Pegawai.edit',$data->id)); ?>" class="btn btn-warning">Update</a></center></td>
             <td><center>
               <?php echo Form::open(['method' => 'DELETE', 'route'=>['Lembur_Pegawai.destroy', $data->id]]); ?>

             <?php echo Form::submit('Delete', ['class' => 'btn btn-danger']); ?>

             <?php echo Form::close(); ?></center>
     </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          

            </tbody>
        </table>
        <a href="<?php echo e(url('/Lembur_Pegawai/create')); ?>" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Lembur Pegawai</a>
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