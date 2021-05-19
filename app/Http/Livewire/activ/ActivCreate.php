<?php

namespace App\Http\Livewire\Activ;

use Livewire\Component;
use App\Models\Actividad;


class ActivCreate extends Component
{

    public $nombactividad, $imagen, $fecha_inicio, $fecha_cierre, $hora_inicio, $hora_finalizacion, $ent_responsable;
 //validaciones
 protected $rules = [

    'nombactividad' => 'required|min:5',
    'fecha_inicio' => 'required',
    'fecha_cierre' => 'required',
    'hora_inicio' => 'required',
    'hora_finalizacion' => 'required',
    'ent_responsable' => 'required',

];

public function updated($propertyName)
{
    $this->validateOnly($propertyName);
}

public function render()
{
    return view('livewire.activ.activ-create');
}


    public function store(){
        $validatedData = $this->validate();
        if ($validatedData) {
        Actividad::create([
        'nombactividad' => $this->nombactividad,
        'imagen' => $this->imagen,
        'fecha_inicio' => $this->fecha_inicio,
        'fecha_cierre' => $this->fecha_cierre,
        'hora_inicio' => $this->hora_inicio,
        'hora_finalizacion' => $this->hora_finalizacion,
        'ent_responsable' => $this->ent_responsable,

        ]);
}
    }


}
