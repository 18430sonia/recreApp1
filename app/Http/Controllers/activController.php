<?php

namespace App\Http\Controllers;

use App\Models\Actividad;
use Illuminate\Http\Request;

class activController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('Activ.listar');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Activ.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Actividad $Actividad
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Actividad $Actividad
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $actividad = Actividad::find($id);
        return view('Activ.edit', compact('actividades'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Actividad  $Actividad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $edactividad = Actividad::find($id);
        $edactividad->nombactividad = $request->nombactividad;
        $edactividad->imagen = $request->imagen;
        $edactividad->fecha_inicio = $request->fecha_inicio;
        $edactividad->fecha_cierre = $request->fecha_cierre;
        $edactividad->hora_inicio = $request->hora_inicio;
        $edactividad->hora_finalizacion = $request->hora_finalizacion;
        $edactividad->ent_responsable = $request->ent_responsable;
        $edactividad->save();
        return redirect()->route('Activ.index')->with('success','Actividad actualizada satisfactoriamente');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Actividad $Actividad
     * @return \Illuminate\Http\Response
     */
    public function destroy(Actividad $actividad)
    {
        $actividad->delete();
        return redirect()->route('Activ.index');
    }
}
