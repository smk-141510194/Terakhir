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
            <center>
                <tr>
                    <td>No</td>
                    <td>Kode Jabatan</td>
                    <td>Nama Jabatan</td>
                    <td>Besaran Uang</td>
                    <td colspan="2"><center>Action</center></td>

                </tr>
                </center>
            </thead>
            @php
            $no = 1;
            @endphp
            <tbody>
                @foreach ($Jabatan as $data)
                <tr>
                    <td><center>{{ $no++ }}</center></td>
                    <td>{{ $data->Kode_Jabatan }}</td>
                    <td>{{ $data->Nama_Jabatan }}</td>
                     <td><?php echo 'Rp'. number_format($data->Besaran_Uang, 2,",","."); ?>
             </td>
                    
             
                    <td><a href="{{route('Jabatan.edit',$data->id)}}" class="btn btn-warning">Update</a></td>
             <td>
             {!! Form::open(['method' => 'DELETE', 'route'=>['Jabatan.destroy', $data->id]]) !!}
             {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
             {!! Form::close() !!}
             </td>
                    </tr>
                @endforeach
          

            </tbody>
        </table>
        <a href="{{url('/Jabatan/create')}}" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Jabatan</a>
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