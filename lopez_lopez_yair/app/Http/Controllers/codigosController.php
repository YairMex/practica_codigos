<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Codigo;

class codigosController extends Controller
{
    public function mostrarCodigos(Request $request){

    //$codigos = Codigo::find($request->codigo);

    $codigos = Codigo::where('codigo', $request->codigo)->get();
        //cp aenta municipio ciudad
    return view('colonia', ['codigos'=>$codigos]);

    }

    public function verMunicipio($Ids){
        $muni = Codigo::where('Ids', $Ids)->get();
        
        return view('municipio', ['muni'=>$muni]);
        
    }

    public function verEstado($id){
        $muni = Codigo::where('id', $id)->get();
        
        return view('estado', ['muni'=>$muni]);
        
    }


}
