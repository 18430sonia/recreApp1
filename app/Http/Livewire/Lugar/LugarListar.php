<?php

namespace App\Http\Livewire\Lugar;

use Livewire\Component;
use App\Models\lugar;


class LugarListar extends Component
{
    public $search;


    public function updatingSearch(){
        $this->resetPage();
    }


    public function render()
    {
        $lugares = lugar::where('nombre_lugar','LIKE','%'.$this->search.'%')

        ->paginate(6);





        return view('livewire.lugar.lugar-listar',compact('lugares'));


    }

    public function destroy(lugar $lugares){
        $lugares->delete();
    }
}
