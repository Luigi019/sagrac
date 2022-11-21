<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class basciu01 extends Model
{
    use HasFactory;
    protected $fillable = ['ciudad'];
    public function estado()
    {
        return $this->belongsTo(basest01::class);
    }
    public function direccion(){
        return $this->belongsTo(auxdir02::class, 'direccion_id', 'id');
    }
}
