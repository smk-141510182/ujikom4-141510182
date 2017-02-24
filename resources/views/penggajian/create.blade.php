@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">Tambah Penggajian</div>
                <div class="panel-body">
                    <a href="{{url('/Penggajian')}}" class="btn btn-md btn-block">Kembali</a>

                <div class="panel-body">
                    {!! Form::open(['url'=>'Penggajian'])!!}
                    <label>Tunjangan Pegawai Id</label>
                    <select name="tunjangan_pegawai_id" class="form-control">
                        <option value="">Pilih Tunjangan Pegawai</option>
                        @foreach($tunjanganpegawaivl as $data)
                        <option value="{{$data->id}}">{{$data->kode_tunjangan_id}}</option>
                        @endforeach
                    </select><br>

                    <div class="form-group">
                        {!! Form::label('Jumlah Jam Lembur','Jumlah Jam Lembur')!!}
                        {!! Form::text('jumlah_jam_lembur',null,['class'=>'form-control','required'])!!}
                    </div>

                    <label>Nama Pegawai</label>
                    <select name="pegawai_id" class="form-control">
                        <option value="">Pilih Nama Pegawai</option>
                        @foreach($pegawaivl as $data)
                        <option value="{{$data->id}}">{{$data->name}}</option>
                        @endforeach
                    </select><br>

                    <label>Nama Pegawai</label>
                    <select name="pegawai_id" class="form-control">
                        <option value="">Pilih Nama Pegawai</option>
                        @foreach($pegawaivl as $data)
                        <option value="{{$data->id}}">{{$data->name}}</option>
                        @endforeach
                    </select><br>

                    <div class="form-group">
                        {!! Form::label('Jumlah Jam','Jumlah Jam')!!}
                        {!! Form::text('jumlah_jam',null,['class'=>'form-control','required'])!!}
                    </div>
                    
                    <button type="submit" class="btn btn-success">
                                    Save
                                </button>
                    {!! Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
