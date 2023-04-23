<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materiales;

class MaterialesController extends Controller
{
    //mostrar todos los datos de materiales
    public function showMateriales(){
        $material = Materiales::all();

        return view('materiales.materialesView',[
            'allmateriales' => Materiales::all()
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

    //vista editar materiales
    public function editMateriales($_id){
        $material = Materiales::findOrFail($_id);

        return view('materiales.editarMateriales',compact('material'));
    }

    //actualizar materiales
    public function updateMateriales(Request $request, $_id){
        $material = Materiales::findOrFail($_id);

        $material->materiales = $request->input('materiales');
        $material->unidad = $request->input('unidad');
        $material->valor_unitario = $request->input('valor_unitario');

        $material->save();

        return redirect('/materiales');
    }

    public function destroyMaterial(Materiales $id){
        $id->delete();
        return redirect('/materiales');
    }

}