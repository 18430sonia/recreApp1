<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User;

class UsersCreate extends Component
{
    public $name, $apellido, $email, $password, $tipo_documento, $numero_documento, $fecha_nacimiento, $telefono, $genero;
    //validaciones
    protected $rules = [
        'name' => 'required|min:6',
        'email' => 'required|email',
        'apellido' => 'required',
        'password' => 'required',
        'tipo_documento' => 'required',
        'numero_documento' => 'required',
        'fecha_nacimiento' => 'required',
        'telefono' => 'required',
        'genero' => 'required',

    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.admin.users-create');
    }

    public function store(){
        $validatedData = $this->validate();
      if ($validatedData) {
        User::create([
            'name' => $this->name,
            'apellido' => $this->apellido,
            'email' => $this->email,
            'password' => $this->password,
            'tipo_documento' => $this->tipo_documento,
            'numero_documento' => $this->numero_documento,
            'fecha_nacimiento' => $this->fecha_nacimiento,
            'telefono' => $this->telefono,
            'genero' => $this->genero,



        ]);
        session()->flash('message', 'usuario registrado correctamente');
      }else {
          printf('holaaa');
      }

        $this->reset(
            [
                'name',
                'apellido',
                'email',
                'password',
                'tipo_documento',
                'numero_documento',
                'fecha_nacimiento',
                'telefono',
                'genero'



            ]);

    }
}
