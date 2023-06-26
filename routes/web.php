<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


/*
Route::Get Consultar
Route::Post Guardar
Route::Delete Eliminar
Route::Put Actualizar



*/

Route::get('/', function () {
    return 'Rutas Home';
    // return view('welcome');
});

Route::get('blog', function () {
    return 'Listado de publicaciones';
    // return view('welcome');
});

Route::get('blog/{slug}', function ($slug) {
    return $slug;
    // return 'Listado de publicaciones';
    // return view('welcome');
});

Route::get('buscar', function (Request $request) {
    return $request->all();
    // return 'Listado de publicaciones';
    // return view('welcome');
});