<?php

namespace App\Http\Controllers;

use App\Models\nomor;
use Illuminate\Http\Request;

class NomorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view('dashboard.nomor.index',[
            'nomor'=>Nomor::latest()->paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.nomor.create');
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
            'nomor' => 'required'
        ]);
        Nomor::create($validatedData);
        return redirect('/nomor')->with('pesan','Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\nomor  $nomor
     * @return \Illuminate\Http\Response
     */
    public function show(nomor $nomor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\nomor  $nomor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('dashboard.nomor.edit',[ 
            'nomor'=>Nomor::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\nomor  $nomor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $validatedData=$request->validate([
            'Nomor' => 'required'
        ]);
        Nomor::where('id', $id)->update($validatedData);
        return redirect('/Nomor')->with('pesan','Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\nomor  $nomor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Dokter::destroy($id);
        return redirect('/dokter')->with('pesan','Data Berhasil Dihapus');
    }
}
