<?php

namespace App\Http\Controllers;

use App\Models\basciu01; 
use App\Models\basmun01; 
use Illuminate\Http\Request;

class Basciu01Controller extends Controller
{
    public function getCiudadesEstado(Request $request){
        $estados=$request->id_estado;
        $basciu01 = basciu01::where("id_estado", $estados)->get();
        $basmun01 = basmun01::where("id_estado", $estados)->get();

        return response()->json(["ciudad"=>$basciu01, "municipio"=>$basmun01]);

    }
}
