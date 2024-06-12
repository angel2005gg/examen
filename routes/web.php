<?php

namespace App\Http\Controllers;
use App\Models\cursos;
use App\Models\Libro;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
/*
Route::get('consultas',[CursosController::class,'consultasElokuent']);
Route::get('cursos/create',[CursosController::class,'create']);
Route::post('cursos/store', [CursosController::class,'store'])->name('cursos.store');
Route::get('cursos/listar',[CursosController::class,'index'])->name('curso.index');
Route::delete('curso/{curso}',[CursosController::class,'destroy'])->name('curso.destroy');
Route::get('curso/{curso}',[CursosController::class,'show'])->name('curso.show');*/


Route::get('libro/create', [LibroController::class, 'creates']);
Route::post('libro/store', [LibroController::class, 'store'])->name('libro.store');
Route::get('libro/listar', [LibroController::class, 'index'])->name('libro.index');
Route::delete('libro/{libro}', [LibroController::class, 'destroy'])->name('libro.destroy');
Route::get('libro/{libro}', [LibroController::class, 'show'])->name('libro.show');
Route::put('libro/{libro}', [LibroController::class, 'update'])->name('libro.update');
Route::get('libro/{libro}/editar', [LibroController::class, 'edit'])->name('libro.edit');


