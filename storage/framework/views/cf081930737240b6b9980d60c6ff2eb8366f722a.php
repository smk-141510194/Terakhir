 

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
            <center>
                <tr>
                    <td>No</td>
                    <td>Kode Jabatan</td>
                    <td>Nama Jabatan</td>
                    <td>Besaran Uang</td>
                    <td colspan="2"><center>Action</center></td>

                </tr>
                </center>
            </thead>
            <?php 
            $no = 1;
             ?>
            <tbody>
                <?php $__currentLoopData = $Jabatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><center><?php echo e($no++); ?></center></td>
                    <td><?php echo e($data->Kode_Jabatan); ?></td>
                    <td><?php echo e($data->Nama_Jabatan); ?></td>
                     <td><?php echo 'Rp'. number_format($data->Besaran_Uang, 2,",","."); ?>
             </td>
                    
             
                    <td><a href="<?php echo e(route('Jabatan.edit',$data->id)); ?>" class="btn btn-warning">Update</a></td>
             <td>
             <?php echo Form::open(['method' => 'DELETE', 'route'=>['Jabatan.destroy', $data->id]]); ?>

             <?php echo Form::submit('Delete', ['class' => 'btn btn-danger']); ?>

             <?php echo Form::close(); ?>

             </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          

            </tbody>
        </table>
        <a href="<?php echo e(url('/Jabatan/create')); ?>" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Jabatan</a>
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