<?php

namespace App\Http\Controllers;
use App\Models\Spesialis;
use Illuminate\Http\Request;

class SpesialisFront extends Controller
{
    public function index(){
        return view('spesialis.index',[
            'spesialis' => Spesialis::latest()->paginate(7)
        ]);
    }
}
