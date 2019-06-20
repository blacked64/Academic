<?php

namespace App\Http\Controllers;

use App\Materia;
use App\Profesor;
use Illuminate\Http\Request;

class ProfesorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profesores = Profesor::with(['materias'])
                              ->orderBy('updated_at', 'desc')
                              ->search(request('admin'))
                              ->paginate(5);
        return view('profesor.index', compact('profesores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $materias = Materia::with(['profesores'])
                           ->orderBy('updated_at', 'desc')
                           ->paginate(6);
        return view('profesor.create', compact('materias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $profesor = Profesor::create($request->all());
        if($request->materias <> null)
        {
            $profesor->materias()->sync($request->materias);
        }
        else 
        {
            $profesor->materias()->detach();
        }
        request()->session()->flash('flash', 'Usted ha creado un profesor correctamente');
        return redirect()->route('profesores.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $profesor = Profesor::find($id);
        return view('profesor.show', compact('profesor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profesor = Profesor::find($id);
        $materias = Materia::with(['profesores'])
                           ->orderBy('updated_at', 'desc')
                           ->paginate(6);
        return view('profesor.edit', compact('profesor', 'materias'));
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
        $profesor = Profesor::find($id);
        $profesor->update($request->all());
        if($request->materias <> null)
        {
            $profesor->materias()->sync($request->materias);
        }
        else 
        {
            $profesor->materias()->detach();
        }
        request()->session()->flash('flash', 'Usted ha actualizado un profesor correctamente');
        return redirect()->route('profesores.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $profesor = Profesor::find($id);
        if($profesor->materias)
        {
            foreach($profesor->materias as $materia)
            {
                $materia->pivot->delete();
            }
        }
        $profesor->delete();
        request()->session()->flash('flash', 'Usted ha eliminado un profesor correctamente');
        return redirect()->route('profesores.index');
    }
}
