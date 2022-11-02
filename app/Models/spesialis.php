<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class spesialis extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function spesialis()
    {
    	return $this->belongsTo(Spesialis::class);
    }
}
