<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class auxciu02 extends Model
{
    use HasFactory;
    protected $fillable = ['ciudadano_id' , 'ciudadano_type' ,'nombre_ciudadano' ,'apellido_ciudadano' , 'nacionalidad_ciudadano' , 'cedula_ciudadano' , 'correo_ciudadano'];


    // Relations
    
    public function qyr(){
        return $this->hasMany(basqyr01::class, 'citizen_id', 'id');
    }
    
}
