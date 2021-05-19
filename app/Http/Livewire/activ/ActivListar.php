<?php

namespace App\Http\Livewire\Activ;

use Livewire\Component;
use App\Models\Actividad;


class ActivListar extends Component
{



    public $search;


    public function updatingSearch(){
        $this->resetPage();
    }


    public function render()
    {
        $actividades = Actividad::where('nombactividad','LIKE','%'.$this->search.'%')

        ->paginate(6);
        return view('livewire.activ.activ-listar', compact('actividades'));
    }

 //funcion para eliminar un registro de usuario
 public function destroy(Actividad $actividad){
    $actividad->delete();
 }
}
