@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Tambah Penggajian</div>
                <div class="panel-body">
                <a href="{{url('Penggajian')}}" class="btn btn-md btn-block">Kembali</a><br>
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/Penggajian') }}">
                        {{ csrf_field() }}

                            <div class="col-md-12">
                                <label for="tunjangan_pegawai_id">Nama Pegawai</label>
                                    <select class="col-md-6 form-control" name="tunjangan_pegawai_id" required>
                                        <option value="">Pilih Nama Pegawai</option>
                                        @foreach($tunjanganvl as $data)
                                            <option  value="{{$data->id}}" >{{$data->pegawai->User->name}}</option>
                                        @endforeach
                                    </select>
                                    <span class="help-block">
                                        {{$errors->first('tunjangan_pegawai_id')}}
                                    </span>
                                    <div>
                                        @if(isset($error))
                                            ReCheck, Gaji Sudah diHitung
                                        @endif
                                    </div>
                            </div>
                            <div class="col-md-12"><br>
                                <label for="status_pengambilan">Status Pengambilan</label>
                                    <select class="col-md-6 form-control" name="status_pengambilan" required>
                                        <option value="">Pilih Status Gaji</option>
                                        <option value="0">Belum diAmbil</option>
                                        <option value="1">DiAmbil</option>
                                    </select>
                                    <span class="help-block">
                                        {{$errors->first('status_pengambilan')}}
                                    </span>
                                    <div>
                                        @if(isset($error))
                                            ReCheck, Gaji Sudah diHitung
                                        @endif
                                    </div>
                                    </div>
                            <div class="col-md-12" ><br><br>
                                <button type="submit" class="btn btn-success btn-block">Hitung</button>
                            </div>
                             </form>
                </div>
            </div>
        </div>
    </div>
</div>

   
       

@endsection