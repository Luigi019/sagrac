<?php

namespace App\Http\Controllers;
use App\Models\baspar01; 
use Illuminate\Http\Request;

class Baspar01Controller extends Controller
{
       public function getParroquiasMuncipio(Request $request){
        $municipio=$request->id_municipio;
        $baspar01 = baspar01::where("id_municipio", $municipio)->get();

        return response()->json($baspar01);

    }
}
