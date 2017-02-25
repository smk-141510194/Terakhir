 @extends('layouts.apps')

@section('content')
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
            @php
            $no = 1;
            @endphp
            <tbody>
                @foreach ($Lembur_Pegawai as $data)
                <tr>
                    <td><center>{{ $no++ }}</center></td>
                    <td><center>{{ $data->Kategori_Lembur->Kode_Lembur}}</center></td>
                    <td><center>{{ $data->Pegawai->User->name}}</center></td>
                    <td><center>{{ $data->Jumlah_Jam}}</center></td>
                    <td><center><a href="{{route('Lembur_Pegawai.edit',$data->id)}}" class="btn btn-warning">Update</a></center></td>
             <td><center>
               {!! Form::open(['method' => 'DELETE', 'route'=>['Lembur_Pegawai.destroy', $data->id]]) !!}
             {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
             {!! Form::close() !!}</center>
     </td>
                    </tr>
                @endforeach
          

            </tbody>
        </table>
        <a href="{{url('/Lembur_Pegawai/create')}}" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Lembur Pegawai</a>
                </div>
            </div>
        </div>
    </div>
</div>
    
</div>
        </div>
    </div>
</div>
            
@endsection