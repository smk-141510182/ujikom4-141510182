@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">Jabatan</div>

                <div class="panel-body">
                    <a href="{{url('/Jabatan/create')}}" class="btn btn-md btn-block">Tambah Jabatan</a>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Kode Jabatan</td>
                                <td>Nama Jabatan</td>
                                <td>Besaran Uang</td>
                                <td colspan="2">Pilihan:</td>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $i=1;
                            @endphp
                            @foreach ($jabatanvl as $data)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{ $data->kode_jabatan }}</td>
                                    <td>{{ $data->nama_jabatan }}</td>
                                    <td>{{ $data->besaran_uang }}</td>
                                    <td><a href="{{route('Jabatan.edit',$data->id)}}" class="btn btn-warning">Ubah</a></td>
                                    <td>
                                    {!! Form::open(['method' => 'DELETE', 'route'=>['Jabatan.destroy', $data->id]]) !!}
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
