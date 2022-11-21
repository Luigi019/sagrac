<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class basmun01 extends Model
{
    use HasFactory;
    protected $fillable = ['municipio'];
    public function estado()
    {
        return $this->belongsTo(basest01::class, 'id_municipio', 'id_estado');
    }
    public function parroquias()
    {
        return $this->hasMany(baspar01::class);
    }
}
