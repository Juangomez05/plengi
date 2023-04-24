<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matriz;

class MatrizController extends Controller
{
    // -------- AGREGAR --------//

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

    // -------- EDITAR --------//

    public function editMatriz($_id){
        $matriz = Matriz::findOrFail($_id);
        return view('matriz.editMatriz',compact('matriz'));
    }

    public function updateMatriz(Request $request, $_id){
        $matriz = Matriz::findOrFail($_id);

        $matriz->actividad = $request->input('actividad');
        $matriz->unidad = $request->input('unidad');
        $matriz->cantidad = floatval($request->input('cantidad'));
        $matriz->save();

        return redirect('/presupuesto');
    }

    // -------- ELIMINAR --------//

    public function destroyMatriz(Matriz $id){
        $id->delete();
        return redirect('/presupuesto');
    }

}
