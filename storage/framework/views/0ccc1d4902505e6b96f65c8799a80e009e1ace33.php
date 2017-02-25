<?php $__env->startSection('content'); ?>
            <div class="panel panel-default">
                <div class="panel-heading"><center><font color="black" size="6%">Create Jabatan</font></div>
</center>
                <div class="panel-body">
  <?php echo Form::model($Kategori_Lembur,['method' => 'PATCH','route'=>['Kategori_Lembur.update',$Kategori_Lembur->id]]); ?>

    <div class="form-group">
        <?php echo Form::label('Kode Lembur', 'Kode Lembur'); ?>

        <?php echo Form::text('Kode_Lembur',null,['class'=>'form-control','required']); ?>

    </div>

      <div class="form-group">
            <select class="form-control" name="jabatan_id">   
            <option>--Daftar Jabatan--</option>
            <?php $__currentLoopData = $Jabatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value='<?php echo $data->id; ?>'><?php echo $data->Nama_Jabatan; ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
    </div>

       <div class="form-group">
            <select class="form-control" name="golongan_id">   
            <option>--Daftar Golongan--</option>
            <?php $__currentLoopData = $Golongan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value='<?php echo $data->id; ?>'><?php echo $data->Nama_Golongan; ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
    </div>

    <div class="form-group">
        <?php echo Form::label('Besaran Uang', 'Besaran Uang'); ?>

        <?php echo Form::text('Besaran_Uang',null,['class'=>'form-control','required']); ?>

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