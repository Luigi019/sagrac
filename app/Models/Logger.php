<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logger extends Model
{
    use HasFactory;

    protected $table = "logger";

    protected $casts = [
        'by' => 'object',
        'data_log' => 'object',

    ];
}   
