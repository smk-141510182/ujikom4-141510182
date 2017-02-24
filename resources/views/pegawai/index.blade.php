@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">Pegawai</div>

                <div class="panel-body">
                    <a href="{{url('/Pegawai/create')}}" class="btn btn-md btn-block">Tambah Pegawai</a><br>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Foto</td>
                                <td>NIP</td>
                                <td>User Id</td>
                                <td>Jabatan</td>
                                <td>Golongan</td>
                                <td colspan="3">Pilihan:</td>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $i=1;
                            @endphp
                            @foreach ($pegawaivl as $data)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td><img src="{{asset('img/'.$data->photo.'')}}" width="75" height="75" class="img-rounded img-responsive" alt="Responsive image"></td>
                                    <td>{{ $data->nip }}</td>
                                    <td>{{ $data->User->name }}</td>
                                    <td>{{ $data->jabatan->nama_jabatan }}</td>
                                    <td>{{ $data->golongan->nama_golongan }}</td>
                                    <td><a href="{{route('Pegawai.edit',$data->id)}}" class="btn btn-warning">Ubah</a></td>
                                    <td>
                                    {!! Form::open(['method' => 'DELETE', 'route'=>['Pegawai.destroy', $data->id]]) !!}
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
@endsection
