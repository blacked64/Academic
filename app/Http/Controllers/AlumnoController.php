<?php

namespace App\Http\Controllers;

use App\Alumno;
use App\Seccion;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumnos = Alumno::with(['notas'])
                         ->orderBy('updated_at', 'desc')
                         ->search(request('admin'))
                         ->paginate(5);
        return view('alumno.index', compact('alumnos'));
    }

    public function import(Request $request)
    {
        dd($request->all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('alumno.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $alumno = Alumno::create([
            'nombre' => $request->nombre,
            'cedula' => $request->cedula,
            'direccion' => $request->direccion,
            'telefonos' => $request->telefonos,
            'grado' => $request->grado_id,
            'seccion' => $request->seccion
        ]);
        request()->session()->flash('flash', 'Usted ha creado un alumno correctamente');
        return redirect()->route('alumnos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $alumno = Alumno::find($id);
        return view('alumno.show', compact('alumno'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $secciones = \App\Seccion::all();
        $alumno = Alumno::find($id);
        return view('alumno.edit', compact('alumno', 'secciones'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {      
        $alumno = Alumno::find($id);
        $alumno->update([
            'nombre' => $request->nombre,
            'cedula' => $request->cedula,
            'direccion' => $request->direccion,
            'telefonos' => $request->telefonos,
            'grado' => $request->seccion_id,
            'seccion' => $request->seccion
        ]);
        request()->session()->flash('flash', 'Usted ha actualizado un alumno correctamente');
        return redirect()->route('alumnos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $alumno = Alumno::find($id);
        if($alumno->notas->isNotEmpty())
        {
            foreach($alumno->notas as $nota)
            {
                $nota->delete();
            }
        }
        $alumno->delete();
        request()->session()->flash('flash', 'Usted ha eliminado un alumno correctamente');
        return redirect()->route('alumnos.index');
    }
}
