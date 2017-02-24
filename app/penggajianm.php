<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class penggajianm extends Model
{
    //
    protected $table = 'penggajians';
    protected $fillable = array('tunjangan_pegawai_id','jumlah_jam_lembur','jumlah_uang_lembur','gaji_pokok','total_gaji', 'tanggal_pengambilan', 'status_pengambilan', 'status_penerima');
    protected $visible = array('tunjangan_pegawai_id','jumlah_jam_lembur','jumlah_uang_lembur','gaji_pokok','total_gaji', 'tanggal_pengambilan', 'status_pengambilan', 'status_penerima');

    public function tunjangan_pegawai()
    {
    	return $this->belongsTo('App\tunjangan_pegawaim','tunjangan_pegawai_id');
    }
}
