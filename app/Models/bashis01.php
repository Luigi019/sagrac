<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bashis01 extends Model
{
    use BaseModel;
use HasFactory;
    static $rules = [
		'planteamiento' => 'required',
		'fecha_incidente' => 'required',
    ];
    
    protected $guarded = [];

    
    public function direccion()
    {
        return $this->belongsTo(auxdir02::class, 'direccion_id');
    }
    public function queja()
    {
        return $this->belongsTo(auxcqr02::class, 'queja_id');
    }
    public function ciudadano()
    {
        return $this->morphMany('App\Models\auxciu02' , 'ciudadano');
    }
    public function auditoria()
    {
        return $this->morphMany('App\Models\basaud01' , 'auditoria');
    }

    public function citizen()
    {
        return $this->belongsTo(auxciu02::class, "citizen_id");
    }
}
