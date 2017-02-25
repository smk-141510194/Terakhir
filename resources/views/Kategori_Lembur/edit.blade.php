@extends('layouts.apps')
@section('content')
            <div class="panel panel-default">
                <div class="panel-heading"><center><font color="black" size="6%">Create Jabatan</font></div>
</center>
                <div class="panel-body">
  {!! Form::model($Kategori_Lembur,['method' => 'PATCH','route'=>['Kategori_Lembur.update',$Kategori_Lembur->id]]) !!}
    <div class="form-group">
        {!! Form::label('Kode Lembur', 'Kode Lembur') !!}
        {!! Form::text('Kode_Lembur',null,['class'=>'form-control','required']) !!}
    </div>

      <div class="form-group">
            <select class="form-control" name="jabatan_id">   
            <option>--Daftar Jabatan--</option>
            @foreach ($Jabatan as $data)
            <option value='{!! $data->id !!}'>{!! $data->Nama_Jabatan !!}</option>
            @endforeach
            </select>
    </div>

       <div class="form-group">
            <select class="form-control" name="golongan_id">   
            <option>--Daftar Golongan--</option>
            @foreach ($Golongan as $data)
            <option value='{!! $data->id !!}'>{!! $data->Nama_Golongan !!}</option>
            @endforeach
            </select>
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

