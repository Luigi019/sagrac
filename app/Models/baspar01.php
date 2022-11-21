<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class baspar01 extends Model
{
    use HasFactory;
    protected $fillable = ['parroquia'];

    public function municipio()
    {
        return $this->belongsTo(basmun01::class, 'id_parroquia', 'id_municipio');
    }
    public function urbanismos()
    {
        return $this->hasMany(basurb01::class);
    }
}
