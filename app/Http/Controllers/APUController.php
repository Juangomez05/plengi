<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materiales;


class APUController extends Controller
{
    public function showAPU(){
        $material = Materiales::all();

        return view('apu.apuView',[
            'allmateriales' => Materiales::all()
        ]);
    }
}
