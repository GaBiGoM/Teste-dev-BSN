<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Linguagem;

class LinguagemController extends Controller
{
    public function listarlinguagem() {
        return response()->json(Linguagem::all(), 200);
    }

    public function getlinguagemId($id){
        $Linguagem = Linguagem::find($id);
        if(is_null($Linguagem)){
            return response()->json(['message' => 'Linguagem Not Found'], 404);
        }
        return response()->json($Linguagem::find($id),200);
    }

    public function addLinguagem(Request $request){
        $Linguagem = Linguagem::create($request->all());
        return response($Linguagem, 201);
    }

    public function updateLinguagem(Request $request, $id){
        $Linguagem = Linguagem::find($id);
        if(is_null($Linguagem)){
            return response()->json(['message' => 'Linguagem Not Found'], 404);
        }
        $Linguagem->update($request->all());
        return response($Linguagem, 200);
    }

    public function deleteLinguagem(Request $request, $id){
        $Linguagem = Linguagem::find($id);
        if(is_null($Linguagem)){
            return response()->json(['message' => 'Linguagem Not Found'], 404);
        }
        $Linguagem->delete($request->all());
        return response($Linguagem, 200);
    }

}
