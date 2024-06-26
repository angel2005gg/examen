<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;

class LibroController extends Controller
{
    public function creates()
    {
        return view('libro.libro');
    }
    
    public function store(Request $request)
    { 
        $libro = new Libro();
        $libro->titulo = $request->titulo;
        $libro->isbn = $request->isbn; 
        $libro->editorial = $request->editorial;
        $libro->paginas = $request->paginas;
        $libro->save();

        return redirect()->route('libro.index');
    }



    public function index()
    {
        $libros = Libro::all();
        return view('libro.listar', ['libros' => $libros]); 
    }


    
    public function show(Libro $libro)
    {
        return view('libro.show', compact('libro'));
    }



    public function destroy(Libro $libro)
    {
        $libro->delete();
        return redirect()->route('libro.index');
    }

    public function edit(Libro $libro)
    {
        return view('libro.edit', compact('libro'));
    }

    public function update(Request $request, Libro $libro)
    {
        $libro->titulo = $request->titulo;
        $libro->isbn = $request->isbn;
        $libro->editorial = $request->editorial;
        $libro->paginas = $request->paginas;
        $libro->save();
        return redirect()->route('libro.index');
    }
}

