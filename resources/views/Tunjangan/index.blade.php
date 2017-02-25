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
					<th><center>Jabatan</center></th>
					<th><center>Golongan</center></th>
					<th><center>Status</center></th>
					<th><center>Jumlah Anak</center></th>
					<th><center>Besaran Uang</center></th>
					<th colspan="3"><center>Pilihan</center></th>

                </tr>
            </thead>
            <?php
				$no = 1;
			?>
				@foreach($Tunjangan as $data)
            <tbody>
               
                <tr>
						<td><center>{{ $no++ }}</center></td>
						<td><center>{{ $data->Kode_Tunjangan }}</center></td>
						<td><center>{{ $data->Jabatan->Nama_Jabatan }}</center></td>
						<td><center>{{ $data->Golongan->Nama_Golongan }}</center></td>
						<td><center>{{ $data->Status}}</center></td>
						<td><center>{{ $data->Jumlah_Anak }}</center></td>
					<td><center><?php echo 'Rp'. number_format($data->Besaran_Uang, 2,",","."); ?>
             </center></td>
						<td><center><a href="{{ route('Tunjangan.edit', $data->id) }}" class="btn btn-warning">Ubah</a></center></td>
						<td><center>
							{!! Form::open(['method' => 'DELETE', 'route' => ['Tunjangan.destroy', $data->id]]) !!}
							{!! Form::submit('Hapus', ['class' => 'btn btn-danger']) !!}
							{!! Form::close() !!}
						</center></td>
					</tr>
				@endforeach

            </tbody>
        </table>
        <a href="{{url('/Tunjangan/create')}}" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Tunjangan</a>
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