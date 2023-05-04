<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
Use Jenssegers\Mongodb\Eloquent\Model;

class Materiales_Usuarios extends Model
{
    use HasFactory;

    protected $connection = "mongodb";
    protected $collection= "materiales_usuarios";

    protected $fillable = ['material_id',
                            'material'];
}
