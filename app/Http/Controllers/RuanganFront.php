<?php

namespace App\Http\Controllers;
use App\Models\Ruangan;
use Illuminate\Http\Request;

class RuanganFront extends Controller
{
    public function index(){
        return view('ruangan.index',[
            'ruangan' => Ruangan::latest()->paginate(7)
        ]);
    }
}
