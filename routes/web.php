<?php
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


/*
Route::Get Consultar
Route::Post Guardar
Route::Delete Eliminar
Route::Put Actualizar
*/

Route::controller(PageController::class)->group(function(){

    Route::get('/', 'home')->name('home');
    
    Route::get('blog','blog')->name('blog');
    
    Route::get('blog/{slug}', 'post')->name('post');
    
});

