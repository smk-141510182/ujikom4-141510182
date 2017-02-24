<?php

namespace App\Http\Controllers;

use Request;
use App\tunjangan_pegawaim;
use App\tunjanganm;
use App\pegawaim;
use App\User;

class tunjanganpegawaic extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tunjanganpegawaivl = tunjangan_pegawaim::all();
        $tunjanganvl = tunjanganm::all();
        return view('tunjanganpegawai.index', compact('tunjanganpegawaivl', 'tunjanganvl'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $users = User::all();
        $pegawaivl = pegawaim::all();
        $tunjanganvl = tunjanganm::all();
        $tunjanganpegawaivl = tunjangan_pegawaim::all();
        return view('tunjanganpegawai.create', compact('users', 'pegawaivl', 'tunjanganvl', 'tunjanganpegawaivl'));
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
        $tunjanganpegawaivl = Request::all();
        tunjangan_pegawaim::create($tunjanganpegawaivl);
        return redirect('TunjanganPegawai');
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
        $tunjanganpegawaivl = tunjangan_pegawaim::find($id);
        $tunjanganvl = tunjanganm::all();
        $pegawaivl = pegawaim::all();
        $users = User::all();
        return view('tunjanganpegawai.edit', compact('tunjanganpegawaivl', 'tunjanganvl', 'pegawaivl', 'users'));
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
        $tunjanganpegawaiUpdate = Request::all();
        $tunjanganpegawaivl = tunjangan_pegawaim::find($id);
        $tunjanganpegawaivl->update($tunjanganpegawaiUpdate);
        return redirect('TunjanganPegawai');
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
        tunjangan_pegawaim::find($id)->delete();
        return redirect('TunjanganPegawai');
    }
}
