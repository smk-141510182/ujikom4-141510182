<?php

namespace App\Http\Controllers;

use Request;
use App\lembur_pegawaim;
use App\kategori_lemburm;
use App\pegawaim;

class lemburpegawaic extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $lemburpegawaivl=lembur_pegawaim::all();
        $kategorilemburvl=kategori_lemburm::all();
        $pegawaivl=pegawaim::all();
        return view('lemburpegawai.index', compact('lemburpegawaivl', 'kategorilemburvl', 'pegawaivl'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $kategorilemburvl=kategori_lemburm::all();
        $pegawaivl=pegawaim::all();
        return view('lemburpegawai.create', compact('kategorilemburvl', 'pegawaivl'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $lemburpegawaivl=Request::all();
        lembur_pegawaim::create($lemburpegawaivl);
        return redirect ('LemburPegawai');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $lemburpegawaivl=lembur_pegawaim::find($id);
        $pegawaivl=pegawaim::all();
        $kategorilemburvl=kategori_lemburm::all();
        return view('lemburpegawai.edit', compact('lemburpegawaivl', 'pegawaivl', 'kategorilemburvl'));
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
        $lemburpegawaiupdate = Request::all();
        $lemburpegawaivl= lembur_pegawaim::find($id);
        $lemburpegawaivl->update($lemburpegawaiupdate);
        return redirect('LemburPegawai');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        lembur_pegawaim::find($id)->delete();
        return redirect('LemburPegawai');
    }
}
