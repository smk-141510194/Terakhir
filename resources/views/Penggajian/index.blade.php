 @extends('layouts.apps')

@section('content')
<div class="container">
    <div class="row">
    <br><br><br><br>
        <div class="col-md-15 offset-md-2">
            <div class="panel panel-primary">
                <div class="panel-heading">     
                <h7><font face="Maiandra GD" color="white"><center>Table Penggajian</center></font></h7>
                </div>
                <div class="panel-body">
                    <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Tunjangan</th>
                    <th>Jumlah Jam</th>
                    <th>Jumlah Uang Lembur</th>
                    <th>Gaji Pokok</th>
                    <th>Total Gaji</th>
                    <th>Tanggal Pengembalian</th>
                    <th>Status Pengembalian</th>
                    <th>Petugas Penerima</th>
                    <th colspan="2"><center>Selection</center></th>

                </tr>
            </thead>
            @php
            $no = 1;
            @endphp
            <tbody>
                @foreach ($Penggajian as $data)
                <tr>
                    <td><center>{{ $no++ }}</center></td>
                    <td>{{ $data->Kode_Tunjangan }}</td>
                    <td>{{ $data->Jumlah_jam_lembur }}</td>
                    <td>{{ $data->Jumlah_uang_lembur }}</td>
                    <td>{{ $data->Gaji_pokok }}</td>
                    <td>{{ $data->Total_gaji }}</td>
                    <td>{{ $data->Tanggal_pengambilan }}</td>
                    <td>{{ $data->Status_pengambilan }}</td>
                    <td>{{ $data->Petugas_penerima }}</td>
             </td>
                    
             
                    <td><a href="{{route('Penggajian.edit',$data->id)}}" class="btn btn-warning">Update</a></td>
             <td>
             {!! Form::open(['method' => 'DELETE', 'route'=>['Penggajian.destroy', $data->id]]) !!}
             {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
             {!! Form::close() !!}
             </td>
                    </tr>
                @endforeach
          

            </tbody>
        </table>
        <a href="{{url('/Penggajian/create')}}" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Penggajian</a>
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