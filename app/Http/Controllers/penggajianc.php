<?php

namespace App\Http\Controllers;

use Request;
use App\penggajianm;
use App\tunjangan_pegawaim;
use App\pegawaim;

class penggajianc extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $penggajianvl=penggajianm::all();
        $tunjanganpegawaivl=tunjangan_pegawaim::all();
        return view('penggajian.index', compact('penggajianvl', 'tunjanganpegawaivl'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $tunjanganpegawaivl=tunjangan_pegawaim::all();
        $pegawaivl=pegawaim::all();
        return view('penggajian.create', compact('tunjanganpegawaivl', 'pegawaivl'));
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
        $penggajianvl=Request::all();
        penggajianm::create($penggajianvl);
        return redirect ('Penggajian');
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
        $penggajianvl=penggajianm::find($id);
        return view('penggajian.edit', compact('penggajianvl'));
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
        $penggajianupdate = Request::all();
        $penggajianvl= penggajianm::find($id);
        $penggajianvl->update($penggajianupdate);
        return redirect('Penggajian');
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
        penggajianm::find($id)->delete();
        return redirect('Penggajian');
    }
}
