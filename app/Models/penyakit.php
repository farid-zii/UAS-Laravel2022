<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penyakit extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function penyakit()
    {
    	return $this->belongsTo(Penyakit::class);
    }
}
