<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Network extends Model
{
    use HasFactory;

    protected $table = 'networks';

    protected $fillable = [
        'IP', 'STATUS', 'INNO', 'PROJECT', 'AREA', 'PROCESS', 'TYPE', 'PERSON_IN_CHARGE'
    ];

    // El ID se incrementa automáticamente
    public $incrementing = true;
}
