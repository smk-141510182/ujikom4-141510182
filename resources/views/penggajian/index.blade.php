@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">Penggajian</div>

                <div class="panel-body">
                    <a href="{{url('/Penggajian/create')}}" class="btn btn-md btn-block">Tambah penggajian</a><br>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Photo</td>
                                <td>Nama Pegawai</td>
                                <td>NIP</td>
                                <td>Status Pengembalian</td>
                                <td colspan="2">Pilihan:</td>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $i=1;
                            @endphp
                            @foreach ($penggajianvl as $data)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td><img src="{{asset('img/'.$data->photo.'')}}" width="75" height="75" class="img-rounded img-responsive" alt="Responsive image"></td>
                                    <td>{{ $data->nama_pegawai }}</td>
                                    <td>{{ $data->nip }}</td>
                                    <td>{{ $data->status_penerima }}</td>
                                    <td><a href="{{route('penggajian.edit',$data->id)}}" class="btn btn-warning">Ubah</a></td>
                                    <td>
                                    {!! Form::open(['method' => 'DELETE', 'route'=>['penggajian.destroy', $data->id]]) !!}
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
