@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Tunjangan</div>

                <div class="panel-body">
                {!! Form::model($tunjanganvl,['method'=>'PATCH','route'=>['Tunjangan.update',$tunjanganvl->id]])!!}
                    <div class="form-group">
                        {!! Form::label('Kode Tunjangan','Kode Tunjangan')!!}
                        {!! Form::text('kode_tunjangan',null,['class'=>'form-control'])!!}
                    </div>
                    <label>Nama Jabatan</label>
                    <select name="jabatan_id" class="form-control" required>
                        
                        @foreach($jabatanvl as $data)
                        <option value="{{$data->id}}">{{$data->nama_jabatan}}</option>
                        @endforeach
                    </select><br>

                    <label>Nama Golongan</label>
                    <select name="golongan_id" class="form-control" required>
                        @foreach($golonganvl as $data)
                        <option value="{{$data->id}}">{{$data->nama_golongan}}</option>
                        @endforeach
                    </select><br>
                    
                    <div class="form-group">
                        {!! Form::label('Status','Status')!!}
                        {!! Form::text('status',null,['class'=>'form-control','required'])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('Jumlah Anak','Jumlah Anak')!!}
                        {!! Form::text('jumlah_anak',null,['class'=>'form-control','required'])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('Besaran Uang','Besaran Uang')!!}
                        {!! Form::text('besaran_uang',null,['class'=>'form-control','required'])!!}
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
