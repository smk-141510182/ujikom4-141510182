<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use File;
use App\User;
use App\pegawaim;
use App\jabatanm;
use App\golonganm;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;

class Pegawaic extends Controller
{
    use RegistersUsers;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pegawaivl = pegawaim::all();
        return view('pegawai.index', compact('pegawaivl'));
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
        return view('pegawai.create', compact('jabatanvl', 'golonganvl'));
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

        $this->validate($request, [
            'name' => 'required',
            'nip' => 'required|unique:pegawais,nip',
            'permission' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            ]);

        $users = User::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'permission' => $request->get('permission'),
            'password' => bcrypt($request->get('password')),
        ]);

        if($request->hasFile('photo'))
        {
            //mengambil file yang di upload
            $uploaded_photo = $request->file('photo');
            //mengambil extension file
            $extension = $uploaded_photo->getClientOriginalExtension();
            //membuat nama file random berikut extension
            $filename = md5(time()) . '.' . $extension;
            //menyimpan file ke folder public/img
            $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'img';
            $uploaded_photo->move($destinationPath, $filename);
            //mengisi filed cover di book dengan filename yang baru dibuat

            $pegawais = new pegawaim;
            $pegawais->nip = $request->get('nip');
            $pegawais->user_id = $users->id;
            $pegawais->jabatan_id = $request->get('jabatan_id');
            $pegawais->golongan_id = $request->get('golongan_id');
            $pegawais->photo = $filename;
            $pegawais->save();
        }

        return redirect('Pegawai');
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
        $pegawaivl = pegawaim::find($id);
        return view('pegawai.show', compact('$pegawaivl'));
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
        $pegawaivl = pegawaim::find($id);
        $jabatanvl = jabatanm::all();
        $golonganvl = golonganm::all();
        return view('pegawai.edit', compact('pegawaivl', 'jabatanvl', 'golonganvl'));
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
        $pegawaivl = pegawaim::find($id);
        if($request->hasFile('photo'))
        {
            $filename = null;
            $uploaded_photo = $request->file('photo');
            $extension = $uploaded_photo->getClientOriginalExtension();
            $filename = md5(time()) . '.' . $extension;
            $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'img';
            $uploaded_photo->move($destinationPath, $filename);
            if($pegawaivl->photo)
            {
                $old_photo = $pegawaivl->photo;
                $filepath = public_path() . DIRECTORY_SEPARATOR . 'img' .
                DIRECTORY_SEPARATOR . $pegawaivl->photo;
                try{
                    File::delete($filepath);
                } catch (FileNotFoundException $e) {

                }
            }

            $pegawaivl->nip = $request->get('nip');
            $pegawaivl->jabatan_id = $request->get('jabatan_id');
            $pegawaivl->golongan_id = $request->get('golongan_id');
            $pegawaivl->photo = $filename;
            $pegawaivl->save();
        }

        return redirect('Pegawai');

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
        pegawaim::find($id)->delete();
        return redirect('Pegawai');
    }
}
