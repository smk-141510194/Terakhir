@extends('layouts.apps')
@section('content')
            <div class="panel panel-default">
                <div class="panel-heading"><center><font color="black" size="6%">Create Tunjangan</font></div>
</center>
                <div class="panel-body">
    {!! Form::open(['url' => 'Tunjangan_Pegawai']) !!}


      <div class="form-group">
      {!! Form::label('Kode Tunjangan', 'Kode Tunjangan') !!}
            <select class="form-control" name="Kode_Tunjangan">   
            
            @foreach ($Tunjangan as $data)
            <option value='{!! $data->id !!}'>{!! $data->Kode_Tunjangan !!}</option>
            @endforeach
            </select>
    </div>

  
 <div class="form-group">
  {!! Form::label('Nama Pegawai', 'Nama Pegawai') !!}
        
            <select class="form-control" name="Kode_Pegawai">   
             @foreach ($Pegawai as $data)
            <option value='{!! $data->id !!}'>{!! $data->User->name !!}</option>
            @endforeach
            </select>
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

