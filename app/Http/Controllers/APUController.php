<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materiales;
use App\Models\Matriz;

class APUController extends Controller
{
    // --------  --------//

    //mostrar todos los datos APU
    public function showAPU(){
        $material = Materiales::all();
        $matriz = Matriz::all();

        return view('apu.apuView',[
            'allmateriales' => Materiales::all(),
            'allmatriz' => Matriz::all()
        ]);
    }
}
