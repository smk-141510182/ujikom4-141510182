@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Data</div>

                <div class="panel-body">
                    <a href="{{url('/TunjanganPegawai')}}" class="btn btn-md btn-block">Kembali</a>
                    {!! Form::model($tunjanganpegawaivl,['method'=>'PATCH','route'=>['TunjanganPegawai.update',$tunjanganpegawaivl->id]])!!}
                    <div class="form-group">
                        {!! Form::label('Kode Tunjangan Id','Kode Tunjangan Id')!!}
                        {!! Form::text('kode_tunjangan_id',null,['class'=>'form-control'])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('Pegawai Id','Pegawai Id')!!}
                        {!! Form::text('pegawai_id',null,['class'=>'form-control'])!!}
                    </div>
                    <button type="submit" class="btn btn-success">
                                    Update
                                </button>
                    {!! Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
