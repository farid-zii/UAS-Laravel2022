<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pasien extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function pasien()
    {
    	return $this->belongsTo(Pasien::class);
    }

    public function dokter()
    {
    	return $this->belongsTo(Dokter::class);
    }

    public function nomor()
    {
    	return $this->belongsTo(Nomor::class);
    }

    public function ruangan()
    {
    	return $this->belongsTo(Ruangan::class);
    }

    public function penyakit()
    {
    	return $this->belongsTo(Penyakit::class);
    }
}
