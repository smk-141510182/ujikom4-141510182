<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pegawaim extends Model
{
    //
    protected $table = 'pegawais';
    protected $fillable = array('nip','user_id','jabatan_id', 'golongan_id', 'photo');
    protected $visible = array('nip','user_id','jabatan_id', 'golongan_id', 'photo');

    public function jabatan()
    {
    	return $this->belongsTo('App\jabatanm','jabatan_id');
    }

    public function golongan()
    {
    	return $this->belongsTo('App\golonganm','golongan_id');
    }

    public function tunjangan_pegawai()
    {
    	return $this->hasOne('App\tunjangan_pegawaim','pegawai_id');
    }

    public function lembur_pegawai()
    {
    	return $this->hasMany('App\lembur_pegawaim','pegawai_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }
}
