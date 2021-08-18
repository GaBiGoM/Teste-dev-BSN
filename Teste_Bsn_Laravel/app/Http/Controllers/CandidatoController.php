<?php

namespace App\Http\Controllers;

use App\Models\Candidato;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CandidatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Candidato::with(['linguagem', 'vaga.linguagem'])->get(), 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = Validator::make($request->all(), [
            'email' => 'required|unique:candidatos|email',
            'nome' => 'required|min:2',
            'id_vaga' => 'required',
            'id_linguagem' => 'required'
        ]);
        if ($validated->fails()) {
            return response()->json($validated->errors(), 422);
        }
        $Candidato = Candidato::create($request->all());
        return response($Candidato, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Candidato  $candidato
     * @return \Illuminate\Http\Response
     */
    public function show($candidato)
    {
        $Candidato = Candidato::find($candidato);
        if(is_null($Candidato)){
            return response()->json(['message' => 'Candidato Not Found'], 404);
        }
        return response()->json($Candidato::find($candidato),200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Candidato  $candidato
     * @return \Illuminate\Http\Response
     */
    public function edit(Candidato $candidato)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Candidato  $candidato
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $candidato)
    {
        $Candidato = Candidato::find($candidato);
        if(is_null($Candidato)){
            return response()->json(['message' => 'Candidato Not Found'], 404);
        }
        $Candidato->update($request->all());
        return response($Candidato, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Candidato  $candidato
     * @return \Illuminate\Http\Response
     */
    public function destroy( $candidato)
    {
        $Candidato = Candidato::find($candidato);
        if(is_null($Candidato)){
            return response()->json(['message' => 'Candidato Not Found'], 404);
        }
        $Candidato->delete();
        return response($Candidato, 200);
    }
}
