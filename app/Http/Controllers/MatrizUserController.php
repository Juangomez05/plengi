<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matriz_Usuarios;
use App\Models\APU;
use App\Models\Materiales;


class MatrizUserController extends Controller
{
    //agregar datos a matriz_usuarios
    public function createMatriz(Request $request){
        $matriz = new Matriz_Usuarios();

        // Obtener el número de filas en la base de datos
        $numFilas = Matriz_Usuarios::count();
        // Actualizar el valor de id_orden
        $matriz->id_orden = $numFilas + 1;

        $matriz->actividad = $request->actividad;
        $matriz->unidad = $request->unidad;
        $matriz->cantidad = floatval($request->cantidad);

        $matriz->save();

        $apu = new APU();
        $apu->actividad = $request->actividad;
        $apu->unidad = $request->unidad;
        $apu->cantidad = floatval($request->cantidad);

        $apu->save();

        return redirect('/presupuesto');
    }
}
