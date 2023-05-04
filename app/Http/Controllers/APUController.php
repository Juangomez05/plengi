<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materiales;
use App\Models\Matriz;
use App\Models\Materiales_Usuarios;

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

    // // Buscar el material por su nombre
    // public function searchMaterial(Request $request){
    //     $search = $request->input('search');
    //     $material = Materiales::query()
    //         ->when($search, function($query, $search){
    //             return $query->where('materiales', 'like', "%{$search}%");
    //         })
    //         ->first();
    //         return view('apu.apuView', compact('material'));
    // }

    public function buscarMaterial(Request $request)
    {
        $search = $request->input('search');
        $material = Materiales::where('materiales', 'like', '%' . $search . '%')->first();

        // Agregar material a la colección materialesUsuarios si no existe
        if (!Materiales_Usuarios::where('material_id', $material->_id)->exists()) {
            Materiales_Usuarios::create([
                'material_id' => $material->_id,
                'material' => $material->materiales
            ]);
        }

        $allmateriales = $material ? [$material] : [];
        return view('apu.apuView', compact('material'));
    }




//         //search por usuario
//         public function searchMaterialapu(Request $request)
//     {
//         $search = $request->input('search');
//         $material = Materiales::query()
//             ->when($search, function($query, $search){
//                 return $query->where('materiales', 'like', "%{$search}%");
//             })
//             ->pluck('id', 'materiales')
//             ->first();

//         if ($material) {
//             $user = Auth::user();
//             $user->materiales_usuario()->attach($material->id);
//         }

//         return view('apu.apuView');
//     }

}
