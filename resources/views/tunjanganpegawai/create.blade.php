@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">Tambah Tunjangan Pegawai</div>

                <div class="panel-body">
                    {!! Form::open(['url'=>'TunjanganPegawai'])!!}
                    <label>Kode Tunjangan</label>
                    <select name="kode_tunjangan_id" class="form-control">
                        <option value="">Pilih Kode Tunjangan</option>
                        @foreach($tunjanganvl as $data)
                        <option value="{{$data->id}}">{{$data->kode_tunjangan}}</option>
                        @endforeach
                    </select><br>

<label>Nama Pegawai</label>
                    <select name="pegawai_id" class="form-control">
                        <option value="">Pilih Nama Pegawai</option>
                        @foreach($pegawaivl as $data)
                        <option value="{{$data->id}}">{{$data->User->name}}</option>
                        @endforeach
                    </select><br>
                    
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
