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
    return view('home');
    // return view('welcome');
});

Route::get('blog', function () {
    $posts =[
        ['id'=>1,'title'=>'PHP','slug'=>'php'],
        ['id'=>2,'title'=>'Laravel','slug'=>'laravel']
    ];

    return view('blog', ['posts' => $posts]);
});



Route::get('blog/{slug}', function ($slug) {
    $post = $slug;
    return view('post',['post'=>$post]);
});
