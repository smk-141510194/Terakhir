<?php $__env->startSection('content'); ?>
            <div class="panel panel-default">
                <div class="panel-heading"><center><font color="black" size="6%">Create Lembur Pegawai</font></div>
</center>
                <div class="panel-body">
    <?php echo Form::open(['url' => 'Lembur_Pegawai']); ?>


      <div class="form-group">
       <?php echo Form::label('Kode Lembur', 'Kode Lembur'); ?>

        
            <select class="form-control" name="Kode_Lembur">   
             <?php $__currentLoopData = $Kategori_Lembur; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value='<?php echo $data->id; ?>'><?php echo $data->Kode_Lembur; ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
    </div>

 <div class="form-group">
  <?php echo Form::label('Nama Pegawai', 'Nama Pegawai'); ?>

        
            <select class="form-control" name="Kode_Pegawai">   
             <?php $__currentLoopData = $Pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value='<?php echo $data->id; ?>'><?php echo $data->User->name; ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
    </div>
  <div class="form-group">
        <?php echo Form::label('Jumlah Jam', 'Jumlah Jam'); ?>

        <?php echo Form::text('Jumlah_Jam',null,['class'=>'form-control','required']); ?>

    </div>
     
      <div class="form-group">
        <?php echo Form::submit('Save', ['class' => 'btn btn-primary form-control']); ?>

    </div> 
    <?php echo Form::close(); ?>

                </div>
            </div>
        </div>
    </div>
</div>

    
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.apps', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>