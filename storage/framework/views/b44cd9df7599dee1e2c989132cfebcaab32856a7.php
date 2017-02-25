<?php $__env->startSection('content'); ?>
            <div class="panel panel-default">
                <div class="panel-heading"><center><font color="black" size="6%">Create Jabatan</font></div>
</center>
                <div class="panel-body">
    <?php echo Form::open(['url' => 'Jabatan']); ?>

    <div class="form-group">
        <?php echo Form::label('Kode Jabatan', 'Kode Jabatan'); ?>

        <?php echo Form::text('Kode_Jabatan',null,['class'=>'form-control','required']); ?>

    </div>
    <div class="form-group">
        <?php echo Form::label('Nama Jabatan', 'Nama Jabatan'); ?>

        <?php echo Form::text('Nama_Jabatan',null,['class'=>'form-control','required']); ?>

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
<?php echo $__env->make('layouts.apps', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>