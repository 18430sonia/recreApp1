<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    use HasFactory;


    protected $fillable = [

        'nombactividad',
        'imagen',
        'fecha_inicio',
        'fecha_cierre',
        'hora_inicio',
        'hora_finalizacion',
        'ent_responsable',

   ];


}
