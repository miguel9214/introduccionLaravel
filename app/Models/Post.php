<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Creacion de relacion de manera directa
    
    public function user(){
        //Una publicacion pertenece a un usuario.
        return $this->belongsTo(User::class);
    }
}
