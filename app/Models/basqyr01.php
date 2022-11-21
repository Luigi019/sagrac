<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class basqyr01 extends Model
{
    use BaseModel;
    static $rules = [
		'planteamiento' => 'required',
		'fecha_incidente' => 'required',
    ];
    
    use HasFactory;

    protected $fillable = ['planteamiento' , 'fecha_incidente', 'direccion_id', 'queja_id'];
    
    public function direccion()
    {
        return $this->belongsTo(auxdir02::class, 'direccion_id');
    }
    public function queja()
    {
        return $this->belongsTo(auxcqr02::class, 'queja_id');
    }

    public function citizen()
    {
        return $this->belongsTo(auxciu02::class, "citizen_id");
    }

}
