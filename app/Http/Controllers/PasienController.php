<?php

namespace App\Http\Controllers;

use App\Models\pasien;
use App\Models\nomor;
use App\Models\ruangan;
use App\Models\penyakit;
use App\Models\dokter;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.pasien.index',[
            'pasien'=>Pasien::latest()->paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pasien.create',[ 
            'penyakit'=>Penyakit::all(),
            'ruangan'=>Ruangan::all(),
            'nomor'=>Nomor::all(),
            'dokter'=>Dokter::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData=$request->validate([
            'nama' => 'required',
            'tgl_lahir' => 'required',
            'jk' => 'required|in:P,L',
            'ruangan_id' => 'required',
            'nomor_id' => 'required',
            'penyakit_id' => 'required',
            'dokter_id' => 'required',
        ]);
        Pasien::create($validatedData);
        return redirect('/pasien')->with('pesan','Data Berhasil Ditambahkan');   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function show(pasien $pasien)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('dashboard.pasien.edit',[ //mahasiswa nama folder. create
            'pasien'=>pasien::find($id),
            'penyakit'=>Penyakit::all(),
            'ruangan'=>Ruangan::all(),
            'nomor'=>Nomor::all(),
            'dokter'=>Dokter::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData=$request->validate([
            'nama' => 'required',
            'tgl_lahir' => 'required',
            'jk' => 'required|in:P,L',
            'ruangan_id' => 'required',
            'nomor_id' => 'required',
            'penyakit_id' => 'required',
            'dokter_id' => 'required',
        ]);
        Pasien::where('id',$id)->update($validatedData);
        return redirect('/pasien')->with('pesan','Data Berhasil DiUpdate');   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pasien::destroy($id);
        return redirect('/pasien')->with('pesan','Data Berhasil Dihapus');
    }
}
