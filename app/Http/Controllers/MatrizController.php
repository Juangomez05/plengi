<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matriz;

class MatrizController extends Controller
{
    //mostrar todos los datos de matriz
    public function showMatriz(){
        $matriz = Matriz::all();

        return view('matriz.matrizView',[
            'allmatriz' => Matriz::all()
        ]);
    }

    //agregar datos a matriz
    public function createMatriz(Request $request){
        $matriz = new Matriz();

        // Obtener el número de filas en la base de datos
        $numFilas = Matriz::count();

        // Actualizar el valor de id_orden
        $matriz->id_orden = $numFilas + 1;

        $matriz->actividad = $request->actividad;
        $matriz->unidad = $request->unidad;
        $matriz->cantidad = floatval($request->cantidad);

        $matriz->save();

        return redirect('/presupuesto');
    }
}
