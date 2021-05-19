<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lugar extends Model
{
    use HasFactory;

    use HasFactory;

    protected $fillable=[
        'nombre_lugar',
        'longitud',
        'latitud',
    ];
}
