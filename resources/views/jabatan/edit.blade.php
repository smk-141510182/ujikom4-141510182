@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Data</div>

                <div class="panel-body">
                    <a href="{{url('/Jabatan')}}" class="btn btn-md btn-block">Kembali</a>
                    {!! Form::model($jabatanvl,['method'=>'PATCH','route'=>['Jabatan.update',$jabatanvl->id]])!!}
                    <div class="form-group">
                        {!! Form::label('Kode Jabatan','Kode Jabatan')!!}
                        {!! Form::text('kode_jabatan',null,['class'=>'form-control'])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('Nama Jabatan','Nama Jabatan')!!}
                        {!! Form::text('nama_jabatan',null,['class'=>'form-control'])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('Besaran Uang','Besaran Uang')!!}
                        {!! Form::text('besaran_uang',null,['class'=>'form-control'])!!}
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
