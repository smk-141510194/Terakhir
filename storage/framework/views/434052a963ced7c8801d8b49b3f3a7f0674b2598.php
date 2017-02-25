<?php $__env->startSection('content'); ?>
            <div class="panel panel-default">
                <div class="panel-heading"><center><font color="black" size="6%">Create Tunjangan</font></div>
</center>
                <div class="panel-body">
    <?php echo Form::open(['url' => 'Tunjangan_Pegawai']); ?>



      <div class="form-group">
      <?php echo Form::label('Kode Tunjangan', 'Kode Tunjangan'); ?>

            <select class="form-control" name="Kode_Tunjangan">   
            
            <?php $__currentLoopData = $Tunjangan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value='<?php echo $data->id; ?>'><?php echo $data->Kode_Tunjangan; ?></option>
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
        <?php echo Form::submit('Save', ['class' => 'btn btn-primary form-control']); ?>

    </div> 
    <?php echo Form::close(); ?>

                </div>
            </div>
        </div>
    </div>
</div>

    
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>