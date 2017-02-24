<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori_lemburm extends Model
{
    //
    protected $table = 'kategori_lemburs';
    protected $fillable = array('kode_lembur','jabatan_id','golongan_id','besaran_uang');
    protected $visible = array('kode_lembur','jabatan_id','golongan_id','besaran_uang');

    public function jabatan()
    {
    	return $this->belongsTo('App\jabatanm','jabatan_id');
    }

    public function golongan()
    {
    	return $this->belongsTo('App\golonganm','golongan_id');
    }

	public function lembur_pegawai()
    {
    	return $this->hasMany('App\lembur_pegawaim','kode_lembur_id');
    }    
}
