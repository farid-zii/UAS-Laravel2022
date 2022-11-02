<?php

namespace App\Http\Controllers;

use App\Models\ruangan;
use Illuminate\Http\Request;

class RuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.ruangan.index',[
            'ruangan'=>Ruangan::latest()->paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.ruangan.create');
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
            'kelas' => 'required'
        ]);
        Ruangan::create($validatedData);
        return redirect('/ruangan')->with('pesan','Data Berhasil Ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ruangan  $ruangan
     * @return \Illuminate\Http\Response
     */
    public function show(ruangan $ruangan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ruangan  $ruangan
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        return view('dashboard.ruangan.edit',[ 
            'ruangan'=>Ruangan::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ruangan  $ruangan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData=$request->validate([
            'nama' => 'required',
            'kelas' => 'required'
        ]);
        Ruangan::where('id', $id)->update($validatedData);
        return redirect('/ruangan')->with('pesan','Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ruangan  $ruangan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Ruangan::destroy($id);
        return redirect('/ruangan')->with('pesan','Data Berhasil Dihapus');
    }
}
