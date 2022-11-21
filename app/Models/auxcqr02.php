<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class auxcqr02 extends Model
{
    use HasFactory;
    protected $fillable = [ 'queja_reclamo'];

    public function queja(){
        return $this->belongsTo(basqyr01::class, 'queja_id', 'id');
    }
    public function queja2(){
        return $this->hasMany(bashis01::class, 'queja_id', 'id');
    }
}
