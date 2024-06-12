<?php

namespace App\Http\Controllers;
use App\Models\cursos;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class CursosController extends Controller
{
    public function consultasElokuent(){
        $user= User::find(1);
        return $user ->posts;

    }

    public function index(){

        $cursos = Cursos::orderBy('id', 'desc')->get();
        return view('curso.listar', compact('cursos'));
     

    }
    public function create(){

        return view('curso.create');

    }
    public function store(Request $request){
       
        $cursos=new Cursos();
        $cursos->name=$request->name;
        $cursos->descripcion=$request->descripcion;
        $cursos->save();
        return $request;
  
      }
   
    public function destroy(Cursos $cursos) {
        $cursos->delete();
        return redirect()->route('curso.index');
    }
    public function show(Cursos $cursos) { 
        return view('curso.show', compact('cursos'));

    }
}
