<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materiales;
use App\Models\Matriz;

class MaterialesController extends Controller
{
    // -------- AGREGAR --------//

    //mostrar todos los datos de materiales
    public function showMateriales(){
        $material = Materiales::all();
        $matriz = Matriz::all();

        return view('materiales.materialesView',[
            'allmateriales' => Materiales::all(),
            'allmatriz' => Matriz::all()
        ]);
    }

    //agregar materiales
    public function createMateriales(Request $request){

        $material = new Materiales();

        // Obtener el número de filas en la base de datos
        $numFilas = Materiales::count();
        // Actualizar el valor de id_orden
        $material->id_orden = $numFilas + 1;

        $material->materiales = $request->materiales;
        $material->unidad = $request->unidad;
        $material->valor_unitario = floatval($request->valor_unitario);

        $material->save();

        return redirect('/materiales');
    }

    //agregar campos a material por A.P.U
    public function uptateAPUMateriales(Request $request, $_id){
        // Buscar el material por su nombre
        $materiales = $request->input('materiales');
        $material = Materiales::where('materiales', $materiales)->first();

        if ($material) {
            // Si el material existe, agregar cantidad y desperdicio
            $material->cantidad = $request->input('cantidad');
            $material->desperdicio = $request->input('desperdicio');
            $material->save();

            return redirect('/apu');
        } else {
            // Si el material no existe, devolver mensaje de error
            return redirect('/apu')->with('error', 'El material no existe');
        }
    }

    // -------- EDITAR --------//

    //vista editar materiales
    public function editMateriales($_id){
        $material = Materiales::findOrFail($_id);
        return view('materiales.editarMateriales',compact('material'));
    }

    //editar materiales
    public function updateMateriales(Request $request, $_id){
        $material = Materiales::findOrFail($_id);

        $material->materiales = $request->input('materiales');
        $material->unidad = $request->input('unidad');
        $material->valor_unitario = floatval($request->input('valor_unitario'));

        $material->save();

        return redirect('/materiales');
    }

    //agregar material desde APU
    public function createAPUMateriales(){

    }

    // -------- ELIMINAR --------//

    public function destroyMaterial(Materiales $id){
        $id->delete();
        return redirect('/materiales');
    }

}
