<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
Use Jenssegers\Mongodb\Eloquent\Model;

class Materiales extends Model
{
    use HasFactory;

    protected $connection = "mongodb";
    protected $collection= "materiales";
}
