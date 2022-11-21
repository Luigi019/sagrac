<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class basurb01 extends Model
{
    use HasFactory;
    protected $fillable = ['urbanismo', 'id_parroquia'];
    public $timestamps = false;

    public function parroquia()
    {
        return $this->belongsTo(baspar01::class);
    }
    public function direccion(){
        return $this->belongsTo(auxdir02::class, 'direccion_id', 'id');
    }

}
