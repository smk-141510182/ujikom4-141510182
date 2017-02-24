@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Golongan</div>

                <div class="panel-body">
                    <a href="{{url('/Golongan')}}" class="btn btn-md btn-block">Kembali</a>
                    {!! Form::model($golonganvl,['method'=>'PATCH','route'=>['Golongan.update',$golonganvl->id]])!!}
                    <div class="form-group">
                        {!! Form::label('Kode Golongan','Kode Golongan')!!}
                        {!! Form::text('kode_golongan',null,['class'=>'form-control'])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('Nama Golongan','Nama Golongan')!!}
                        {!! Form::text('nama_golongan',null,['class'=>'form-control'])!!}
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
