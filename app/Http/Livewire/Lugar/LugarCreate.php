<?php

namespace App\Http\Livewire\Lugar;

use Livewire\Component;

use App\Models\lugar;

class LugarCreate extends Component
{
   
  public $nombre_lugar, $latitud, $longitud;
   
   public function store(){
       lugar::create([
         'nombre_lugar'=>$this->nombre_lugar,
         'longitud'=>$this->longitud,
         'latitud'=>$this->latitud,

       ]);
   }
   
   
   
    public function render()
    {
        return view('livewire.lugar.lugar-create');
    }
}
