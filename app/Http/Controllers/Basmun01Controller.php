<?php

namespace App\Http\Controllers;

use App\Models\basmun01; 
use Illuminate\Http\Request;

class Basmun01Controller extends Controller
{
     public function getMunicipiosEstado(Request $request){
        $estados=$request->id_estado;
        $basmun01 = basmun01::where("id_estado", $estados)->get();

        return response()->json($basmun01);

    }
}
