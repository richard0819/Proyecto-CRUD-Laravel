<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proyecto;
use PDF;
use Illuminate\Support\Facades\View;

class ProyectoController extends Controller
{
    public function index()
    {
        $proyectos = Proyecto::all();

        return view('proyectos.index', compact('proyectos'));
    }

    public function create()
    {
        return view('proyectos.create');
    }

    public function store(Request $request)
    {
        $proyecto = Proyecto::create($request->all());

        return redirect()->route('proyectos.index')->with('success', 'Proyecto creado exitosamente.');
    }

    public function edit(Proyecto $proyecto)
    {
        return view('proyectos.edit', compact('proyecto'));
    }

    public function update(Request $request, Proyecto $proyecto)
    {
        $proyecto->update($request->all());

        return redirect()->route('proyectos.index')->with('success', 'Proyecto actualizado exitosamente.');
    }

    public function destroy(Proyecto $proyecto)
    {
        $proyecto->delete();

        return redirect()->route('proyectos.index')->with('success', 'Proyecto eliminado exitosamente.');
    }


    public function generarInformePDF()
    {
        
        $proyectos = Proyecto::all();

        $data = [
            'proyectos' => $proyectos,
        ];

        $pdf = PDF::loadView('pdf', $data);
        return $pdf->stream('informe.pdf');
        //return $pdf->download('informe.pdf');

    }    

}


