<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jabatanm extends Model
{
    //
    protected $table = 'jabatans';
    protected $fillable = array('kode_jabatan','nama_jabatan','besaran_uang');
    protected $visible = array('kode_jabatan','nama_jabatan','besaran_uang');

    public function tunjangan()
    {
    	return $this->hasMany('App\tunjanganm','jabatan_id');
    }

	public function pegawai()
    {
    	return $this->hasMany('App\pegawaim','jabatan_id');
    }

	public function kategori_lembur()
    {
    	return $this->hasMany('App\kategori_lemburm','jabatan_id');
    }        
}
