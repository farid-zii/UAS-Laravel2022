<?php

namespace App\Http\Controllers;

use App\Models\dokter;
use App\Models\spesialis;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view('dashboard.dokter.index',[
            'dokter'=>Dokter::latest()->paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.dokter.create',[ 
            'spesialis'=>Spesialis::all()
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
            'nip' => 'required|unique:dokters',
            'nama' => 'required',
            'jk' => 'required|in:P,L',
            'spesialis_id' => 'required',
            'alamat' => 'required'
        ]);
        Dokter::create($validatedData);
        return redirect('/dokter')->with('pesan','Data Berhasil Ditambahkan');   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function show(dokter $dokter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        return view('dashboard.dokter.edit',[ //mahasiswa nama folder. create
            'dokter'=>Dokter::find($id),
            'spesialis'=>Spesialis::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData=$request->validate([
            'nip' => 'required',
            'nama' => 'required',
            'jk' => 'required|in:P,L',
            'spesialis_id' => 'required',
            'alamat' => 'required'
        ]);
        Dokter::where('id',$id)->update($validatedData);
        return redirect('/dokter')->with('pesan','Data Berhasil DiUpdate');   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Dokter::destroy($id);
        return redirect('/dokter')->with('pesan','Data Berhasil Dihapus');
    }
}
