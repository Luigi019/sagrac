<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class auxdir02 extends Model
{
    use HasFactory;
    protected $fillable = ['direccion_id' , 'nro_vivienda' , 'tipo_vivienda', 'id_ciudad', 'id_urbanismo', 'tipo_vivienda'];

    public function dirtipo_viviendacciones(){
        return $this->belongsTo(basqyr01::class, 'direccion_id', 'direccion_id');
    }
    public function direcciones(){
        return $this->belongsTo(bashis01::class, 'direccion_id', 'direccion_id');
    }
    public function ciudad(){
        return $this->belongsTo(basciu01::class, 'id_ciudad', 'id_ciudad');
    }
    public function parroquia(){
        return $this->belongsTo(baspar01::class, 'id_urbanismo', 'id_parroquia');
    }
    public function urbanismo(){
        return $this->belongsTo(basurb01::class, 'id_urbanismo', 'id_urbanismo');
    }
    public function estado(){
        return $this->belongsTo(basest01::class, 'id_municipio', 'id_estado');
    }
    public function municipio(){
        return $this->belongsTo(basmun01::class, 'id_parroquia', 'id_municipio');
    }
}
