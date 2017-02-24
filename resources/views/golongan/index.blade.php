@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">Golongan</div>

                <div class="panel-body">
                    <a href="{{url('/Golongan/create')}}" class="btn btn-md btn-block">Tambah Golongan</a>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Kode Golongan</td>
                                <td>Nama Golongan</td>
                                <td>Besaran Uang</td>
                                <td colspan="2">Pilihan:</td>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $i=1;
                            @endphp
                            @foreach ($golonganvl as $data)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{ $data->kode_golongan }}</td>
                                    <td>{{ $data->nama_golongan }}</td>
                                    <td>{{ $data->besaran_uang }}</td>
                                    <td><a href="{{route('Golongan.edit',$data->id)}}" class="btn btn-warning">Ubah</a></td>
                                    <td>
                                    {!! Form::open(['method' => 'DELETE', 'route'=>['Golongan.destroy', $data->id]]) !!}
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
