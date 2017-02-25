@extends('layouts.apps')
@section('content')
            <div class="panel panel-default">
                <div class="panel-heading"><center><font color="black" size="6%">Create Jabatan</font></div>
</center>
                <div class="panel-body">  
                {!! Form::model($Jabatan,['method' => 'PATCH','route'=>['Jabatan.update',$Jabatan->id]]) !!}
    <div class="form-group">
        {!! Form::label('Kode Jabatan', 'Kode Jabatan') !!}
        {!! Form::text('Kode_Jabatan',null,['class'=>'form-control','required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Nama Jabatan', 'Nama Jabatan') !!}
        {!! Form::text('Nama_Jabatan',null,['class'=>'form-control','required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Besaran Uang', 'Besaran Uang') !!}
        {!! Form::text('Besaran_Uang',null,['class'=>'form-control','required']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

    
@stop