<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Http\Request;

class DokterFront extends Controller
{
    public function index(){
        return view('dokter.index',[
            'dokter' => Dokter::latest()->paginate(7)
        ]);
    }
}
