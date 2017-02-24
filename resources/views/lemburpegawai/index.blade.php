@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">Lembur Pegawai</div>

                <div class="panel-body">
                    <a href="{{url('/LemburPegawai/create')}}" class="btn btn-md btn-block">Tambah Lembur Pegawai</a><br>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Kode Lembur Id</td>
                                <td>Pegawai Id</td>
                                <td>Jumlah Jam</td>
                                <td colspan="2">Pilihan:</td>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $i=1;
                            @endphp
                            @foreach ($lemburpegawaivl as $data)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{ $data->kategori_lembur->kode_lembur }}</td>
                                    <td>{{ $data->pegawai->User->name }}</td>
                                    <td>{{ $data->jumlah_jam }}</td>
                                    <td><a href="{{route('LemburPegawai.edit',$data->id)}}" class="btn btn-warning">Ubah</a></td>
                                    <td>
                                    {!! Form::open(['method' => 'DELETE', 'route'=>['LemburPegawai.destroy', $data->id]]) !!}
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
