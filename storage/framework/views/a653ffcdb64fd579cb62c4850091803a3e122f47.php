<?php $__env->startSection('content'); ?>
<br><br><br><br><br><br><br>
  <div class="container">
            <div class="row">
                    <center><h2>Input Data Penggajian</h2></center>
                    <br />
              <?php echo Form::open(['url' => 'Penggajian', 'class' => 'form-horizontal form-label-left']); ?>

    <div class="form-group">
        <div class="control-label col-md-3 col-sm-3 col-xs-12">
            <?php echo Form::label('Pegawai', 'Pegawai '); ?>

             <span class="required">*</span>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <select class="form-control col-md-7 col-xs-12" name="Kode_Tunjangan">
            
            <?php $__currentLoopData = $Gaji; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($data->id); ?>"><?php echo e($data->Pegawai->Nip); ?>&nbsp;|&nbsp;<?php echo e($data->Pegawai->User->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
    </div>
    <div class="form-group">
        <div class="control-label col-md-3 col-sm-3 col-xs-12">
            <?php echo Form::label('Status Pengambilan', 'Status Pengambilan '); ?>

             <span class="required">*</span>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
             <select name="Status_pengambilan" class="form-control">
                                    <option value="0">Belum Diambil</option>
                                    <option value="1">Sudah Diambil</option>
            </select>
        </div>
    </div>
     <div class="col-md-6 col-sm-6 col-xs-12">
      <span class="help-block">
            <?php echo e($errors->first('Kode_Tunjangan')); ?>

          </span>
                                       <div>
                                           <?php if(isset($error)): ?>
                                               Check Lagi Gaji Sudah Ada
                                           <?php endif; ?>
                                       </div>
                               </div>
       <div class="form-group">
          <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
              <?php echo Form::submit('Save', ['class' => 'btn btn-primary form-control']); ?>

          </div>
      </div>
    </div>
    <?php echo Form::close(); ?>

          </div>
          </div>     
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.apps', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>