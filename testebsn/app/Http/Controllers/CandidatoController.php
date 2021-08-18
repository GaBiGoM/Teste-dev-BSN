<?php

namespace App\Http\Controllers;

use App\Models\Candidato;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CandidatoController extends Controller
{
    public function getlvaga() {

    }

    public function getCandidatoId($id){
        $Candidato = Candidato::find($id);
        if(is_null($Candidato)){
            return response()->json(['message' => 'Candidato Not Found'], 404);
        }
        return response()->json($Candidato::find($id),200);
    }

    public function addCandidato(Request $request){
        $Candidato = Candidato::create($request->all());
        return response($Candidato, 201);
    }

    public function updateCandidato(Request $request, $id){
        $Candidato = Candidato::find($id);
        if(is_null($Candidato)){
            return response()->json(['message' => 'Candidato Not Found'], 404);
        }
        $Candidato->update($request->all());
        return response($Candidato, 200);
    }

    public function deleteCandidato(Request $request, $id){
        $Candidato = Candidato::find($id);
        if(is_null($Candidato)){
            return response()->json(['message' => 'Candidato Not Found'], 404);
        }
        $Candidato->delete($request->all());
        return response($Candidato, 200);
    }
}
