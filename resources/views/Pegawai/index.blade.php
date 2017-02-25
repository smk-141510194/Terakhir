@extends('layouts.apps')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 offset-md-2">
              <div class="panel panel-primary">
                <div class="panel-heading">     
                <h7><font face="Maiandra GD" color="white"><center>Table Pegawai</center></font></h7>
                </div>
                <div class="panel-body">
                    <table class="table table-striped">
            <thead>
                <tr>
                   <th><center>No</center></th>
					<th><center>NIP</center></th>
					<th><center>NAMA PEGAWAI</center></th>
					<th><center>JABATAN</center></th>
					<th><center>GOLONGAN</center></th>
					<th><center>PHOTO</center></th>
					<th colspan="3"><center>PILIHAN </center></th>

                </tr>
            </thead>
            <?php
				$no = 1;
			?>
				@foreach($Pegawai as $data)
            <tbody>
               
                <tr>
						<td><center>{{ $no++ }}</center></td>
						<td><center>{{ $data->Nip }}</center></td>
						<td><center>{{ $data->User->name }}</center></td>
						<td><center>{{ $data->Jabatan->Nama_Jabatan }}</center></td>
						<td><center>{{ $data->Golongan->Nama_Golongan }}</center></td>
						<td>
							<center>
								<img src="{{asset('/image/'.$data->Photo)}}" height="100px" width="100px">
							</center>
						</td>
						<!-- <td><center><a href="{{ url('Pegawai', $data->id) }}" class="btn btn-primary">Lihat</a></center></td>
					 -->	<td><center><a href="{{ route('Pegawai.edit', $data->id) }}" class="btn btn-warning">Ubah</a></center></td>
						<td><center>
							{!! Form::open(['method' => 'DELETE', 'route' => ['Pegawai.destroy', $data->id]]) !!}
							{!! Form::submit('Hapus', ['class' => 'btn btn-danger']) !!}
							{!! Form::close() !!}
						</center></td>
					</tr>
				@endforeach

            </tbody>
        </table>
        <a href="{{url('/Pegawai/create')}}" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Pegawai</a>
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