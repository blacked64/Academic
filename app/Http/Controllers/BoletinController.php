<?php

namespace App\Http\Controllers;

use App\Nota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Database\Eloquent\Collection;

class BoletinController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('nota.boletin.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        if($request->has('boletin_id'))
        {
            $nota = Nota::findorfail($request->boletin_id);
        }
        else 
        {
            $nota = Nota::whereHas('alumno', function($q) use($request){
                $q->where('cedula', $request->cedula);
            })->get();
        }
        if($nota instanceof Collection)
        {   
            $notas = $nota;
            return view('nota.boletin.showed', compact('notas'));
        }

        if($nota == null)
        {
            return redirect()->route('boletin.index')->with('flash', 'Cédula invalida o no posee un boletín registrado.');
        }

        //return view('nota.boletin.show', compact('nota'));

        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('nota.boletin.show', compact('nota'));
        $pdf->setPaper('A4', 'landscape');
        $name = str_slug(strtolower($nota->alumno->nombre. '-'.$nota->alumno->cedula));
        //return $pdf->stream();
        return $pdf->download($name.'.pdf');
    }

}
