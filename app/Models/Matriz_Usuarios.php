<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
Use Jenssegers\Mongodb\Eloquent\Model;


class Matriz_Usuarios extends Model
{
    use HasFactory;

    protected $connection = "mongodb";
    protected $collection= "matriz_usuarios";
}
