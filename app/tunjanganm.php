<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tunjanganm extends Model
{
    //
    protected $table = 'tunjangans';
    protected $fillable = array('kode_tunjangan','jabatan_id','golongan_id', 'status', 'jumlah_anak', 'besaran_uang');
    protected $visible = array('kode_tunjangan','jabatan_id','golongan_id', 'status', 'jumlah_anak', 'besaran_uang');

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
    	return $this->hasMany('App\tunjangan_pegawaim','kode_tunjangan_id');
    }    
}
