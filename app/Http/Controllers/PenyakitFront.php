<?php

namespace App\Http\Controllers;
use App\Models\Penyakit;
use Illuminate\Http\Request;

class PenyakitFront extends Controller
{
    public function index(){
        return view('penyakit.index',[
            'penyakit' => Penyakit::latest()->paginate(7)
        ]);
    }
}
