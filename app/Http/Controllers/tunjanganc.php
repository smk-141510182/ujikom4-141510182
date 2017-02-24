<?php

namespace App\Http\Controllers;

use Request;
use App\tunjanganm;
use App\jabatanm;
use App\golonganm;

class tunjanganc extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tunjanganvl=tunjanganm::all();
        $jabatanvl=jabatanm::all();
        $golonganvl=golonganm::all();
        return view('tunjangan.index', compact('tunjanganvl', 'jabatanvl', 'golonganvl'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $jabatanvl=jabatanm::all();
        $golonganvl=golonganm::all();
        return view('tunjangan.create', compact('jabatanvl', 'golonganvl'));
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
        $tunjanganvl=Request::all();
        tunjanganm::create($tunjanganvl);
        return redirect ('Tunjangan');
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
        $tunjanganvl = tunjanganm::find($id);
        $jabatanvl = jabatanm::all();
        $golonganvl = golonganm::all();
        return view('tunjangan.edit', compact('tunjanganvl', 'jabatanvl', 'golonganvl'));
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
        $tunjanganupdate = Request::all();
        $tunjanganvl= tunjanganm::find($id);
        $tunjanganvl->update($tunjanganupdate);
        return redirect('Tunjangan');
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
        tunjanganm::find($id)->delete();
        return redirect('Tunjangan');
    }
}
