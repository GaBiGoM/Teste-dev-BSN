<?php

namespace App\Http\Controllers;

use App\Models\Vaga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class VagaController extends Controller
{
    public function getlvaga() {
        $vaga = DB::table('vagas')
        ->join ('linguagems','linguagems.id','=','vagas.id_linguagem')
        ->select('vagas.id','vagas.nome','linguagems.nome as linguagem')
        ->orderBy('linguagems.nome')
        ->get();
        return response($vaga, 201);
    }

    public function getVagaId($id){
        $Vaga = Vaga::find($id);
        if(is_null($Vaga)){
            return response()->json(['message' => 'Vaga Not Found'], 404);
        }
        return response()->json($Vaga::find($id),200);
    }

    public function addVaga(Request $request){
        $Vaga = Vaga::create($request->all());
        return response($Vaga, 201);
    }

    public function updateVaga(Request $request, $id){
        $Vaga = Vaga::find($id);
        if(is_null($Vaga)){
            return response()->json(['message' => 'Vaga Not Found'], 404);
        }
        $Vaga->update($request->all());
        return response($Vaga, 200);
    }

    public function deleteVaga(Request $request, $id){
        $Vaga = Vaga::find($id);
        if(is_null($Vaga)){
            return response()->json(['message' => 'Vaga Not Found'], 404);
        }
        $Vaga->delete($request->all());
        return response($Vaga, 200);
    }
}
