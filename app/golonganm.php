<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class golonganm extends Model
{
    //
    protected $table = 'golongans';
    protected $fillable = array('kode_golongan','nama_golongan','besaran_uang' );
    protected $visible = array('kode_golongan','nama_golongan','besaran_uang' );

    public function tunjangan()
    {
    	return $this->hasMany('App\tunjanganm','golongan_id');
    }

    public function pegawai()
    {
    	return $this->hasMany('App\pegawaim','golongan_id');
    }

    public function kategori_lembur()
    {
    	return $this->hasMany('App\kategori_lemburm','golongan_id');
    }
}
