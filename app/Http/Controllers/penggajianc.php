<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\penggajianm ;
use App\tunjangan_pegawaim ;
use App\pegawaim ;
use App\tunjanganm ;
use App\jabatanm ;
use App\golonganm;
use App\kategori_lemburm ;
use App\lembur_pegawaim ;
use Input;
use Validator ;
use auth ;

class penggajianc extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penggajianvl=penggajianm::all();
        return view('penggajian.index',compact('penggajianvl'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $tunjanganvl=tunjangan_pegawaim::all();
        return view('penggajian.create',compact('tunjanganvl'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $penggajianvl=Input::all();
        $where=tunjangan_pegawaim::where('id',$penggajianvl['tunjangan_pegawai_id'])->first();
        $wherepenggajian=penggajianm::where('tunjangan_pegawai_id',$where->id)->first();
        $wheretunjangan=tunjanganm::where('id',$where->kode_tunjangan_id)->first();
        $wherepegawai=pegawaim::where('id',$where->pegawai_id)->first();
        $wherekategorilembur=kategori_lemburm::where('jabatan_id',$wherepegawai->jabatan_id)->where('golongan_id',$wherepegawai->golongan_id)->first();
        $wherelemburpegawai=lembur_pegawaim::where('pegawai_id',$wherepegawai->id)->first();
        $wherejabatan=jabatanm::where('id',$wherepegawai->jabatan_id)->first();
        $wheregolongan=golonganm::where('id',$wherepegawai->golongan_id)->first();
        $penggajianvl=new penggajianm ;

        if (isset($wherepenggajian)) {
            $error=true ;
            $tunjanganvl=tunjangan_pegawaim::paginate(10);
            return view('penggajian.create',compact('tunjanganvl','error'));
        }
        elseif (!isset($wherelemburpegawai)) {
            $nol=0 ;
            $penggajianvl->jumlah_jam_lembur=$nol;
            $penggajianvl->jumlah_uang_lembur=$nol ;
            $penggajianvl->gaji_pokok=$wherejabatan->besaran_uang+$wheregolongan->besaran_uang;
            $penggajianvl->total_gaji=($wheretunjangan->besaran_uang)+($wherejabatan->besaran_uang+$wheregolongan->besaran_uang);
        $penggajianvl->tunjangan_pegawai_id=Input::get('tunjangan_pegawai_id');
        $penggajianvl->petugas_penerima=auth::user()->name ;
        $penggajianvl->status_pengambilan=Input::get('status_pengambilan');
        $penggajianvl->save();
        }
        elseif (!isset($wherelemburpegawai)||!isset($wherekategorilembur)) {
            $nol=0 ;
            $penggajianvl->jumlah_jam_lembur=$nol;
            $penggajianvl->jumlah_uang_lembur=$nol ;
            $penggajianvl->gaji_pokok=$wherejabatan->besaran_uang+$wheregolongan->besaran_uang;
            $penggajianvl->total_gaji=($wheretunjangan->besaran_uang)+($wherejabatan->besaran_uang+$wheregolongan->besaran_uang);
        $penggajianvl->tunjangan_pegawai_id=Input::get('tunjangan_pegawai_id');
        $penggajianvl->petugas_penerima=auth::user()->name ;
        $penggajianvl->status_pengambilan=Input::get('status_pengambilan');
        $penggajianvl->save();
        }
        else{
            $penggajianvl->jumlah_jam_lembur=$wherelemburpegawai->jumlah_jam;
            $penggajianvl->jumlah_uang_lembur=$wherelemburpegawai->jumlah_jam*$wherekategorilembur->besaran_uang ;
            $penggajianvl->gaji_pokok=$wherejabatan->besaran_uang+$wheregolongan->besaran_uang;
            $penggajianvl->total_gaji=($wherelemburpegawai->jumlah_jam*$wherekategorilembur->besaran_uang)+($wheretunjangan->besaran_uang)+($wherejabatan->besaran_uang+$wheregolongan->besaran_uang);
            $penggajianvl->tanggal_pengambilan =date('d-m-y');
            $penggajianvl->tunjangan_pegawai_id=Input::get('tunjangan_pegawai_id');
            $penggajianvl->petugas_penerima=auth::user()->name ;
            $penggajianvl->status_pengambilan=Input::get('status_pengambilan');
            $penggajianvl->save();
            }
            return redirect('Penggajian');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $penggajianvl=penggajianm::find($id);
        return view('penggajian.read',compact('penggajianvl'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function edit($id)
    {
        $gajivl=penggajianm::find($id);
        $penggajianvl=new penggajianm ;
        $penggajianvl=array('status_pengambilan'=>1,'tanggal_pengambilan'=>date('y-m-d'));
        penggajianm::where('id',$id)->update($penggajianvl);
        return redirect('Penggajian');
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        penggajianm::find($id)->delete();
        return redirect('Penggajian');
    }
}