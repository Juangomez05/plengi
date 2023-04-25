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
            $material->cantidad = floatval($request->input('cantidad'));
            $material->desperdicio = floatval($request->input('desperdicio'));

            // Obtener el valor_unitario del material
            $valor_unitario = $material->valor_unitario;
            $material->cantidad_total = floatval($request->input('cantidad')) * (($request->input('desperdicio')/100)+1);
            $material->valor_total = floatval($material->cantidad_total * $valor_unitario);

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

    //vista editar materiales A.P.U
    public function edit_apu_material($_id){
        $material = Materiales::findOrFail($_id);
        return view('apu.editApuMaterial',compact('material'));
    }

    //editar materiales desde A.P.U
    public function update_Materiales_Apu(Request $request, $_id){
        $material = Materiales::findOrFail($_id);

        $material->cantidad = floatval($request->input('cantidad'));
        $material->desperdicio = floatval($request->input('desperdicio'));

        $material->save();

        return redirect('/apu');
    }

    // -------- ELIMINAR --------//

    public function destroyMaterial(Materiales $id){
        $id->delete();
        return redirect('/materiales');
    }

}
