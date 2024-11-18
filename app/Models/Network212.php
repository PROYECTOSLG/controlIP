<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Network212 extends Model
{
    use HasFactory;

    protected $table = 'network212'; // Especificar el nombre correcto de la tabla

    protected $fillable = [
        'NO_EMPLOYEE', 'NAME', 'IP', 'STATUS', 'INNO', 'PROJECT', 'AREA', 'PROCESS', 'TYPE', 'PERSON_IN_CHARGE'
    ];

    // El ID se incrementa automáticamente
    public $incrementing = true;
}
