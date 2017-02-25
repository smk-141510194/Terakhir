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
					<th><center>Kode Tunjangan</center></th>
					<th><center>Nama Pegawai</center></th>
					<th><center>Jabatan</center></th>
					<th><center>Golongan</center></th>
					<th><center>Besaran Uang</center></th>
					
					<th colspan="3"><center>Pilihan </center></th>

                </tr>
            </thead>
            <?php
				$no = 1;
			?>
				@foreach($Tunjangan_Pegawai as $data)
            <tbody>
               
                <tr>
						<td><center>{{ $no++ }}</center></td>
						<td><center>{{ $data->Tunjangan->Kode_Tunjangan }}</center></td>
						<td><center>{{ $data->Pegawai->User->name }}</center></td>
						<td><center>{{ $data->Pegawai->Jabatan->Nama_Jabatan }}</center></td>
						<td><center>{{ $data->Pegawai->Golongan->Nama_Golongan }}</center></td>
			
						<td><center><?php echo 'Rp'. number_format($data->Tunjangan->Besaran_Uang, 2,",","."); ?>
             </center></td>
						<td><center><a href="{{ route('Tunjangan_Pegawai.edit', $data->id) }}" class="btn btn-warning">Ubah</a></center></td>
						<td><center>
							{!! Form::open(['method' => 'DELETE', 'route' => ['Tunjangan_Pegawai.destroy', $data->id]]) !!}
							{!! Form::submit('Hapus', ['class' => 'btn btn-danger']) !!}
							{!! Form::close() !!}
						</center></td>
					</tr>
				@endforeach

            </tbody>
        </table>
        <a href="{{url('/Tunjangan_Pegawai/create')}}" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Tunjangan Pegawai</a>
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