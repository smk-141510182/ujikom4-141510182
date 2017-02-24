<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tunjangan_pegawaim extends Model
{
    //
    protected $table = 'tunjangan_pegawais';
    protected $fillable = array('kode_tunjangan_id','pegawai_id');
    protected $visible = array('kode_tunjangan_id','pegawai_id');

    public function tunjangan()
    {
    	return $this->belongsTo('App\tunjanganm','kode_tunjangan_id');
    }

    public function pegawai()
    {
    	return $this->belongsTo('App\Pegawaim','pegawai_id');
    }

	public function penggajian()
    {
    	return $this->hasMany('App\penggajianm','tunjangan_pegawai_id');
    }
    
    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }    
}
