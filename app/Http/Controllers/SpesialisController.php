<?php

namespace App\Http\Controllers;

use App\Models\spesialis;
use Illuminate\Http\Request;

class SpesialisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.spesialis.index',[
            'spesialis'=>Spesialis::latest()->paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.spesialis.create');
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
            'kode' => 'required',
            'nama' => 'required'
        ]);
        Spesialis::create($validatedData);
        return redirect('/spesialis')->with('pesan','Data Berhasil Ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\spesialis  $spesialis
     * @return \Illuminate\Http\Response
     */
    public function show(spesialis $spesialis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\spesialis  $spesialis
     * @return \Illuminate\Http\Response
     */
    public function edit(spesialis $spesialis, $id)
    {
        return view('dashboard.spesialis.edit',[ 
            'spesialis'=>Spesialis::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\spesialis  $spesialis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, spesialis $spesialis, $id)
    {
        $validatedData=$request->validate([
            'kode' => 'required',
            'nama' => 'required'
        ]);
        Spesialis::where('id', $id)->update($validatedData);
        return redirect('/spesialis')->with('pesan','Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\spesialis  $spesialis
     * @return \Illuminate\Http\Response
     */
    public function destroy(spesialis $spesialis,$id)
    {
        Spesialis::destroy($id);
        return redirect('/spesialis')->with('pesan','Data Berhasil Dihapus');
    }
}
