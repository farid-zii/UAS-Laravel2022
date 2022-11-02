<?php

namespace App\Http\Controllers;

use App\Models\penyakit;
use Illuminate\Http\Request;

class PenyakitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.penyakit.index',[
            'penyakit'=>Penyakit::latest()->paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.penyakit.create');
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
            'gejala' => 'required',
            'tipe'=>'required'
        ]);
        Penyakit::create($validatedData);
        return redirect('/penyakit')->with('pesan','Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\penyakit  $penyakit
     * @return \Illuminate\Http\Response
     */
    public function show(penyakit $penyakit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\penyakit  $penyakit
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('dashboard.penyakit.edit',[ 
            'penyakit'=>Penyakit::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\penyakit  $penyakit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData=$request->validate([
            'nama' => 'required',
            'gejala' => 'required',
            'tipe'=>'required'
        ]);
        Penyakit::where('id', $id)->update($validatedData);
        return redirect('/penyakit')->with('pesan','Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\penyakit  $penyakit
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Penyakit::destroy($id);
        return redirect('/penyakit')->with('pesan','Data Berhasil Dihapus');
    }
}
