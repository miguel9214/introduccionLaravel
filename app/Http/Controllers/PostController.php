<?php

namespace App\Http\Controllers;
//importamos el modelo para hacer consultas en la tabla
use App\Models\Post;

use Illuminate\Http\Request;
// importar configuracion para crear url amigables
use Illuminate\Support\Str;

class PostController extends Controller
{
    // Listar registro de la base de datos
    public function index(){
        
        return view('posts.index',['posts'=>Post::latest()->paginate()]);

    }
     
    //Metodo de registro el cual captura la informacion 
    public function create(Post $post){
        
        return view('posts.create',['post'=>$post]);

    }
//Metodo para enviar informacion a la base de datos
    public function store(Request $request){

        $request->validate([
            'title'=>'required',
            'slug'=>'required|unique:posts,slug',
            'body'=>'required'
        ]);

        $post=$request->user()->posts()->create([
            'title'=>$request->title,
            'slug'=>$request->title,
            'body'=>$request->body,
           ]);
        
        return redirect()->route('posts.edit',$post);

    }


    //Metodo de edicion el cual captura la informacion que se editara

    public function edit(Post $post){
        
        return view('posts.edit',['post'=>$post]);

    }

    //Metodo para editar informacion a la base de datos
    public function update(Request $request, Post $post ){
        
        $request->validate([
            'title'=>'required',
            'slug'=>'required|unique:posts,slug,'.$post->id,
            'body'=>'required'
        ]);

        $post->update([
            'title'=>$request->title,
            'slug'=>$request->title,
            'body'=>$request->body,
           ]);
        
        return redirect()->route('posts.edit',$post);

    }


    //Metodo que elimina registro de una base de datos
    public function destroy(Post $post){
        
        $post->delete();

        return back();

    }




}
