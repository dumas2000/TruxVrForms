<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Indicador1 extends Model
{
    use HasFactory;
    
    protected $table = 'indicador1';

    protected $fillable = [
        'puntaje',
    ];
}
