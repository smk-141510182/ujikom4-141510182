<?php

namespace App\Http\Controllers;

use Request;
use App\kategori_lemburm;
use App\jabatanm;
use App\golonganm;

class kategorilemburc extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kategorilemburvl = kategori_lemburm::all();
        $jabatanvl = jabatanm::all();
        $golonganvl = golonganm::all();
        return view('kategorilembur.index', compact('kategorilemburvl', 'jabatanvl', 'golonganvl'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $jabatanvl = jabatanm::all();
        $golonganvl = golonganm::all();
        return view('kategorilembur.create', compact('jabatanvl', 'golonganvl'));
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
        $kategorilemburvl = Request::all();
        kategori_lemburm::create($kategorilemburvl);
        return redirect('KategoriLembur');
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
        $kategorilemburvl = kategori_lemburm::find($id);
        $jabatanvl = jabatanm::all();
        $golonganvl = golonganm::all();
        return view('kategorilembur.edit', compact('kategorilemburvl', 'jabatanvl', 'golonganvl'));
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
        $kategoriUpdate = Request::all();
        $kategorilemburvl = kategori_lemburm::find($id);
        $kategorilemburvl->update($kategoriUpdate);
        return redirect('KategoriLembur');
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
        kategori_lemburm::find($id)->delete();
        return redirect('KategoriLembur');
    }
}
