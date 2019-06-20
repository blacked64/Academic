<?php

namespace App\Http\Controllers;

use App\Nota;
use App\Alumno;
use App\Materia;
use App\Profesor;
use Illuminate\Http\Request;
use App\VueTables\EloquentVueTables;

class NotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notas = Nota::with(['alumno'])
                     ->orderBy('updated_at', 'desc')
                     ->search(request('admin'))
                     ->paginate(5);
        return view('nota.index', compact('notas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //DD('OK');
        $alumnos = Alumno::orderBy('updated_at', 'desc')
                              ->get();
       return view('nota.show', compact('alumnos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $alumno = Alumno::findorfail($request->alumno_id);
        $materias = Materia::where('grado', $alumno->grado)->get();
       return view('nota.create', compact('alumno', 'materias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
       Nota::create($request->all());
        request()->session()->flash('flash', 'Usted ha creado una nota correctamente');
        return redirect()->route('notas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nota = Nota::find($id);
        $nota->delete();
        request()->session()->flash('flash', 'Usted ha eliminado una nota correctamente');
        return redirect()->route('notas.index');
    }

    public function alumnosJson()
    {
        if(request()->ajax())
        {
            $vueTables = new EloquentVueTables;
            $data = $vueTables->get(new Alumno, ['id','cedula', 'nombre', 'grado', 'seccion']);

            return response()->json($data);
        }
        return abort(401);
    }

}
