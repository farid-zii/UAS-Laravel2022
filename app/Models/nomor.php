<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nomor extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function nomor()
    {
    	return $this->belongsTo(Nomor::class);
    }
}
