@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Kategori Lembur</div>

                <div class="panel-body">
                    <a href="{{url('/KategoriLembur/create')}}" class="btn btn-md btn-block">Tambah Kategori Lembur</a><br>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Kode Lembur</td>
                                <td>Nama Jabatan</td>
                                <td>Nama Golongan</td>
                                <td>Besaran Uang</td>
                                <td colspan="2">Pilihan:</td>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $i=1;
                            @endphp
                            @foreach ($kategorilemburvl as $data)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{ $data->kode_lembur }}</td>
                                    <td>{{ $data->jabatan->nama_jabatan }}</td>
                                    <td>{{ $data->golongan->nama_golongan }}</td>
                                    <td>{{ $data->besaran_uang }}</td>
                                    <td><a href="{{route('KategoriLembur.edit',$data->id)}}" class="btn btn-warning">Ubah</a></td>
                                    <td>
                                    {!! Form::open(['method' => 'DELETE', 'route'=>['KategoriLembur.destroy', $data->id]]) !!}
                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                    {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
