<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class basest01 extends Model
{
    use HasFactory;
    protected $fillable = ['estado'];
    public function ciudades()
    {
        return $this->hasMany(basciu01::class);
    }
    public function municipios()
    {
        return $this->hasMany(basmun01::class);
    }
}
