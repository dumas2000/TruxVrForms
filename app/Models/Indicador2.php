<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Indicador2 extends Model
{
    use HasFactory;
    
    protected $table = 'indicador2';

    protected $fillable = [
        'puntaje',
    ];
}
