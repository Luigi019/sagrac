<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class basaud01 extends Model
{
    use HasFactory;
    protected $fillable = ['auditoria_id' , 'auditoria_type' ,'creado_por' ,'modificado_por' , 'version_anterior' , 'modificacion_actual'];

    public function auditoria()
    {
        return $this->morphTo();
    }
}
