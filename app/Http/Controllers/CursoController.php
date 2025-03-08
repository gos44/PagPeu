<?php

namespace App\Http\Controllers;
use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        $cursos = Curso::all();
        return view('cursos.index', compact('cursos'));
    }

    public function create()
    {
        return view('cursos.create');
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'nombre' => 'required',
        //     'descripcion' => 'nullable',
        //     'fecha_inicio' => 'required|date',
        //     'fecha_fin' => 'required|date|after:fecha_inicio',
        // ]);
        // Curso::create($request->all());

        
        $curso = Curso::create($request->all());

        return redirect()->route('cursos.index')
                         ->with('success', 'Curso creado exitosamente.');
    }

    public function show(Curso $curso)
    {
        return view('cursos.show', compact('curso'));
    }

    public function edit(Curso $curso)
    {
        return view('cursos.edit', compact('curso'));
    }

    public function update(Request $request, Curso $curso)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'nullable',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date|after:fecha_inicio',
        ]);

        $curso->update($request->all());

        return redirect()->route('cursos.index')
                         ->with('success', 'Curso actualizado exitosamente.');
    }

    public function destroy(Curso $curso)
    {
        $curso->delete();

        return redirect()->route('cursos.index')
                         ->with('success', 'Curso eliminado exitosamente.');
    }
}

