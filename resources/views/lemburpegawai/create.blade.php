@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">Tambah Lembur Pegawai</div>

                <div class="panel-body">
                    {!! Form::open(['url'=>'LemburPegawai'])!!}
                    <label>Kode Lembur</label>
                    <select name="kode_lembur_id" class="form-control">
                        <option value="">Pilih Kode Lembur</option>
                        @foreach($kategorilemburvl as $data)
                        <option value="{{$data->id}}">{{$data->kode_lembur}}</option>
                        @endforeach
                    </select><br>

                    <label>Nama Pegawai</label>
                    <select name="pegawai_id" class="form-control">
                        <option value="">Pilih Nama Pegawai</option>
                        @foreach($pegawaivl as $data)
                        <option value="{{$data->id}}">{{$data->User->name}}</option>
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
